<?php

require_once 'DbManager.php';
require_once 'vali_check.php';
require_once  'Smarty.php';


$SignUpMsg = "";
$errorMsg = "";


// ログインボタンが押された場合
if (isset($_POST["signUp"]) && isset($_POST["usr_id"]) && isset($_POST["name"]) && isset($_POST["password"]) && isset($_POST["password2"])) {
    // 1. ユーザIDの入力チェック
    if ($_POST["usr_id"] == null || $_POST["name"] == null || $_POST["password"] == null || $_POST["password2"] == null ) {
        $errorMsg = '未入力の項目があります';
    } else if (str_count($_POST["name"], 30, "more")) {
        $errorMsg = 'ユーザー名は30字までです。';
    } else if (mb_strlen($_POST['usr_id']) != 6 || !is_alnum($_POST['password'])) {
        $errorMsg = 'ユーザーIDに6桁の半角英数字を入力してください';
    } else if (str_count($_POST["password"], 30, "more") || str_count($_POST['password'], 8, "less") || !is_alnum($_POST['password'])) {
        $errorMsg = 'パスワードは8-16字の半角英数字で入力してください';

    } else if($_POST["password"] != $_POST["password2"]) {
        $errorMsg = 'パスワードに誤りがあります。';

    } else {

        // 入力したユーザID、名前、パスワードを格納
        $usr_id = $_POST["usr_id"];
        $name = $_POST["name"];
        $password = $_POST["password"];

        try {
            $db = getDb();

            $stt_select_id = $db->prepare('select * from member where id = :usr_id');
            $stt_select_id->bindValue(':usr_id', $usr_id);
            $stt_select_id->execute();

            $stt_select_pass = $db->prepare('select * from member where password = :password');
            $stt_select_pass->bindValue(':password', $password);
            $stt_select_pass->execute();

            if($stt_select_id->rowCount() == 0 && $stt_select_pass->rowCount() == 0) {
                $stt_insert = $db->prepare("INSERT INTO member(id, name, password) VALUES (:usr_id, :name, :password)");
                $stt_insert->bindValue(':usr_id', $usr_id);
                $stt_insert->bindValue(':name', $name);
                $stt_insert->bindValue(':password', $password);
                $stt_insert->execute();
                $SignUpMsg = '登録が完了しました。' . $name . 'さんのユーザーIDは ' . $usr_id . ' です。パスワードは ' . $password . ' です。';  // ログイン時に使用するIDとパスワード

            }else if($stt_select_id->rowCount() != 0 && $stt_select_pass->rowCount() != 0) {
                $errorMsg = "すでに登録されています";

            }else if($stt_select_id->rowCount() != 0) {
                $errorMsg = "入力されたIDはすでに使われています";

            }else if($stt_select_pass->rowCount() != 0) {
                $errorMsg = "入力されたパスワードはすでに使われています";
            }

            $db = NULL;



        } catch (PDOException $e) {
            $errorMsg = "データベースエラー";

        }
    }
}


$smartyObj->assign('signUpMsg', $SignUpMsg);
$smartyObj->assign('errorMsg', $errorMsg);

$smartyObj->display('register.tpl');
?>


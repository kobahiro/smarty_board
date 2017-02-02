<?php

require_once 'DbManager.php';
require_once  'Smarty.php';
require_once 'vali_check.php';

// エラーメッセージの初期化
$errorMsg = "";

// ログインボタンが押された場合
if (isset($_POST["login"])) {
    // 1. ユーザID,パスワードの入力チェック
    if ($_POST["usr_id"] == null || $_POST["password"] == null) {
        $errorMsg = '未入力の項目があります。';
    }else {

        $usr_id = $_POST["usr_id"];
        $password = $_POST["password"];

        try {

            $db = getDb();
            $stmt = $db->prepare('SELECT * FROM member where id = :usr_id and password = :password');
            $stmt->bindValue(':usr_id', $usr_id);
            $stmt->bindValue(':password', $password);
            $stmt->execute();

            if ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {

                //セッションID置き換え
                session_regenerate_id(true);

                $_SESSION["USERID"] = $row['id'];
                $_SESSION["NAME"] = $row['name'];
                header("Location: home_smarty.php");  // メイン画面へ遷移
                exit();  // 処理終了

            } else {

                // error
                $errorMsg = 'ユーザーIDあるいはパスワードに誤りがあります。';
            }
        } catch (PDOException $e) {
            $errorMsg = 'データベースエラー';
        }
    }
}

$smartyObj->assign('errorMsg', $errorMsg);
$smartyObj->display('login.tpl');

?>

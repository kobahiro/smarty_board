<?php

require_once 'DbManager.php';
require_once  'Smarty.php';
require_once 'vali_check.php';

$errorMsg = "";
$resultMsg = "";

//sql-select * from post 一覧表示
function selectDb(){
    try {

        $db = getDb();
        $stt = $db->prepare('select * from post where user_id = :usr_id order by id');
        $stt->bindValue(':usr_id', $_SESSION["USERID"]);
        $stt->execute();
        $rows = $stt->fetchAll(PDO::FETCH_ASSOC);
        $db = NULL;
        return $rows;

    } catch (PDOException $ex) {     // DBアクセス時にエラーとなった時
        unset($db);
        die();
    }
}
// ログイン状態チェック
if (!isset($_SESSION["USERID"])) {
    header("Location: logout_smarty.php");
    exit;
}

$rows = selectDb();


if(isset($_POST["update"]) && isset($_POST["update_id"]) && isset($_POST["contents"])) {

    if($_POST['update_id'] == null || $_POST['contents'] == null) {
        $errorMsg = "未入力の項目があります";
    }else if(!isNumeric($_POST['update_id'])) {
        $errorMsg = 'IDには半角数字を入力してください';
    }else if (str_count($_POST["contents"], 140, "more")) {
        $errorMsg = "本文は140文字以内で入力してください";
    }else {
        $id = $_POST["update_id"];
        $contents = $_POST["contents"];

        try {
            $db = getDb();
            $stt = $db->prepare('update post set contents = :contents where id = :id and user_id = :usr_id');
            $stt->bindValue(':contents', $contents);
            $stt->bindValue(':id', $id);
            $stt->bindValue(':usr_id', $_SESSION["USERID"]);

            $stt->execute();
            if($stt->rowCount() == 0){
                $errorMsg = "該当する投稿は存在しません";
            }else{
                $resultMsg =  '投稿を更新しました';
                $rows = selectDb();
            }

            $db = NULL;
        } catch (PDOException $e) {
            $errorMsg = "データベースエラー";
        }
    }
}

$smartyObj->assign('resultMsg', $resultMsg);
$smartyObj->assign('errorMsg', $errorMsg);
$smartyObj->assign('rows', $rows);
$smartyObj->assign('usr_name', $_SESSION["NAME"]);

$smartyObj->display('update.tpl');


?>

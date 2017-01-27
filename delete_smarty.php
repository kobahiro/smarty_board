<?php

require_once 'DbManager.php';
require_once  'Smarty.php';
require_once 'vali_check.php';

$resultMsg = "";
$errorMsg = "";

//sql-select * from post 一覧表示
function selectDb(){
    try{

        $db = getDb();
        $stt = $db->prepare('select * from post where user_id = :usr_id order by id');
        $stt->bindValue(':usr_id', $_SESSION["USERID"]);
        $stt->execute();
        $rows = $stt->fetchAll(PDO::FETCH_ASSOC);
        $db = NULL;
        return $rows;

    }catch( PDOException $ex ) {     // DBアクセス時にエラーとなった時
        unset( $db );
        die();
    }
}

// ログイン状態チェック
if (!isset($_SESSION["USERID"])) {
    header("Location: logout_smarty.php");
    exit;
}

$rows = selectDB();

if(isset($_POST["delete_id"])){
    if($_POST["delete_id"] == null){
        $errorMsg = "未入力の項目があります";
    }else if(!isNumeric($_POST["delete_id"])) {
        $errorMsg = "半角数字で入力してください";
    }else{
        $id = $_POST["delete_id"];
        try {
            $db = getDb();
            $stt = $db->prepare('delete from post where id = :id and user_id = :user_id');
            $stt->bindValue(':id', $id);
            $stt->bindValue(':user_id', $_SESSION["USERID"]);

            $stt->execute();
            if($stt->rowCount() == 0){
                $errorMsg = '該当する投稿は存在しませんでした';
            }else{
                $resultMsg = '投稿を削除しました';
                $rows = selectDB();
            }
            $db = NULL;
        } catch (PDOException $e) {
            die("エラーメッセージ：{$e->getMessage()}");
        }
    }
}



$smartyObj->assign('rows', $rows);
$smartyObj->assign('usr_name', $_SESSION["NAME"]);
$smartyObj->assign('resultMsg', $resultMsg);
$smartyObj->assign('errorMsg', $errorMsg);

$smartyObj->display('delete.tpl');


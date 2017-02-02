
<?php
require_once 'DbManager.php';
require_once 'vali_check.php';
require_once  'Smarty.php';


$errorMsg = "";
$resultMsg = "";


if (!isset($_SESSION["USERID"])) {
    header("Location: logout_smarty.php");
    exit;
}

if(isset($_POST["inform"])) {
    if (isset($_POST["contents"])) {
        if ($_POST["contents"] == null) {
            $errorMsg = "本文が入力されていません";
        } else {
            if (str_count($_POST["contents"], 140, "more")) {
                $errorMsg = "本文は140文字以内で入力してください";
            } else {

                try {
                    $db = getDb();

                    $usr_id = $_SESSION["USERID"];
                    $contents = $_POST["contents"];
                    $stt = $db->prepare('INSERT INTO post(contents, user_id) VALUES(:contents, :user_id)');
                    $stt->bindValue(':user_id', $usr_id);
                    $stt->bindValue(':contents', $contents);
                    $stt->execute();

                    $db = NULL;
                    $resultMsg = "投稿しました";
                } catch (PDOException $e) {
                    $errorMsg = "データベースエラー";

                }
            }
        }
    }
}

try {
    $db = getDb();
    $stt = $db->prepare('select post.user_id, member.name, post.contents from post, member where post.user_id = member.id order by post.id desc');
    $stt->execute();
    $rows = $stt->fetchAll(PDO::FETCH_ASSOC);
    $db = NULL;
    //DB接続error
} catch (PDOException $e) {
    $errorMsg = "データベースエラー";
}


$smartyObj->assign('rows', $rows);
$smartyObj->assign('usr_name', $_SESSION["NAME"]);
$smartyObj->assign('errorMsg', $errorMsg);
$smartyObj->assign('resultMsg', $resultMsg);
$smartyObj->display('home.tpl');
    ?>





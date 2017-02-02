<?php

require_once  'Smarty.php';

if (isset($_SESSION["USERID"])) {
    $errorMessage = "ログアウトしました。";
} else {
    $errorMessage = "セッションがタイムアウトしました。";
}

// セッションの変数のクリア
$_SESSION = array();

// セッションクリア
@session_destroy();

$smartyObj->assign('errorMessage', $errorMessage);

$smartyObj->display('logout.tpl');
?>

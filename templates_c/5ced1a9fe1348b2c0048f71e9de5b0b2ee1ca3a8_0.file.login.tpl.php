<?php
/* Smarty version 3.1.30, created on 2017-01-27 09:15:11
  from "C:\xampp\htdocs\smarty_board\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588b018f13f3d8_61060738',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5ced1a9fe1348b2c0048f71e9de5b0b2ee1ca3a8' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_board\\templates\\login.tpl',
      1 => 1485504680,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588b018f13f3d8_61060738 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>ログイン</title>
</head>
<body>
<h1>ログイン画面</h1>

<form id = "loginForm" name = "loginForm" action = "" method = "POST">
    <fieldset>
        <legend>ログインフォーム</legend>
        <div style = "color:red"><?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>
</div>
        <label for = "usr_id">ユーザーID</label><input type = "text" id = "usr_id" name = "usr_id" placeholder = "ユーザーIDを入力" value = "">
        <br>
        <label for = "password">パスワード</label><input type = "password" id = "password" name = "password" value = "" placeholder = "パスワードを入力">
        <br>
        <input type = "submit" id = "login" name = "login" value = "ログイン">
    </fieldset>

</form>
<br>
<form action = "register_smarty.php">
    <fieldset>
        <legend>新規登録フォーム</legend>
        <input type = "submit" value = "新規登録">
    </fieldset>
</form>
</body>
</html><?php }
}

<?php
/* Smarty version 3.1.30, created on 2017-01-27 09:13:07
  from "C:\xampp\htdocs\smarty_board\templates\register.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588b0113c77549_51267340',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc2ac11f917cfe70c9d6f97aef6735864e65267c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_board\\templates\\register.tpl',
      1 => 1485504777,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588b0113c77549_51267340 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset = "UTF-8">
    <title>新規登録</title>
</head>
<body>
<h1>新規登録画面</h1>


<form id = "loginForm" name = "loginForm" action = "" method = "POST">
    <fieldset>
        <legend>新規登録フォーム</legend>
        <div style = "color:red"><?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>
</div>
        <div style = "color:blue"><?php echo $_smarty_tpl->tpl_vars['signUpMsg']->value;?>
</div>
        <label for = "username">ユーザー名</label><input type = "text" id = "name" name = "name" placeholder = "ユーザー名を入力" maxlength = "30" value = "">(30字以内)
        <br>
        <label for = "usr_id">ユーザーID</label><input type = "usr_id" id = "usr_id" name = "usr_id" value = "" placeholder = "ユーザーIDを入力">(半角英数字6桁)
        <br>
        <label for = "password">パスワード</label><input type = "password" id = "password" name = "password" value = "" placeholder = "パスワードを入力">(半角英数字8-16桁)
        <br>
        <label for = "password2">パスワード(確認用)</label><input type = "password" id = "password2" name = "password2" value = "" placeholder = "再度パスワードを入力">
        <br>
        <input type = "submit" id = "signUp" name = "signUp" value = "新規登録">
    </fieldset>
</form>
<br>

<form action = "login_smarty.php">
    <input type = "submit" value = "戻る">
</form>
</body>
</html><?php }
}

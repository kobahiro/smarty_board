<?php
/* Smarty version 3.1.30, created on 2017-01-24 09:43:07
  from "C:\xampp\htdocs\smarty_board\templates\logout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5887139b140ab4_38294497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b8e47014c496538bab9e587c095da912cb3d30b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_board\\templates\\logout.tpl',
      1 => 1484990614,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5887139b140ab4_38294497 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ログアウト</title>
</head>
<body>
<h1>ログアウト画面</h1>
<div><?php echo $_smarty_tpl->tpl_vars['errorMessage']->value;?>
</div>
<ul>
    <li><a href="login_smarty.php">ログイン画面に戻る</a></li>
</ul>
</body>
</html><?php }
}

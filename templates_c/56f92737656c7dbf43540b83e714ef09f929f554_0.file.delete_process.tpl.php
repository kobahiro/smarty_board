<?php
/* Smarty version 3.1.30, created on 2017-01-24 10:04:05
  from "C:\xampp\htdocs\smarty_board\templates\delete_process.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_58871885120350_89440310',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '56f92737656c7dbf43540b83e714ef09f929f554' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_board\\templates\\delete_process.tpl',
      1 => 1485248621,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_58871885120350_89440310 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>メッセージ削除</title>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['resultMessage']->value;?>

<form action="delete_smarty.php">
    <input type="submit" value="戻る">
</form>
<P><a href="home_smarty.php">まいぺーじに戻る</a></P>
</body>
</HTML>

<?php }
}

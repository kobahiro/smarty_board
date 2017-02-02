<?php
/* Smarty version 3.1.30, created on 2017-01-26 10:58:33
  from "C:\xampp\htdocs\smarty_board\templates\update_process.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5889c849ebd4d1_82496243',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '13e14a72745b1a5c8155e651dc4bcc5e7067bc18' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_board\\templates\\update_process.tpl',
      1 => 1485424710,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5889c849ebd4d1_82496243 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>メッセージ更新</title>
</head>
<body>
<?php echo $_smarty_tpl->tpl_vars['errorMsg']->value;?>

<?php echo $_smarty_tpl->tpl_vars['resultMsg']->value;?>


<form action="update_smarty.php">
    <input type="submit" value="戻る">
</form>
<P><a href="home_smarty.php">ほーむに戻る</a></P>
</body>
</HTML>

<?php }
}

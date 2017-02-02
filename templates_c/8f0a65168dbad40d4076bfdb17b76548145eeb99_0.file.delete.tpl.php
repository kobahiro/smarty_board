<?php
/* Smarty version 3.1.30, created on 2017-02-02 09:47:17
  from "C:\xampp\htdocs\smarty_board\templates\delete.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5892f2156566c1_04152933',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f0a65168dbad40d4076bfdb17b76548145eeb99' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_board\\templates\\delete.tpl',
      1 => 1486025234,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5892f2156566c1_04152933 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>削除</title>
</head>
<body>
<h1>掲示板 削除</h1>

<p>ユーザ名：<u><?php echo $_smarty_tpl->tpl_vars['usr_name']->value;?>
</u></p>
<ul>
    <li><a href="logout_smarty.php">ログアウト</a></li>
    <li><a href="delete_smarty.php">削除</a></li>
    <li><a href="update_smarty.php">更新</a></li>
    <li><a href="home_smarty.php">ほーむへ</a></li>
</ul>
<form method = "POST" action = "">

    <p>
        削除したい投稿のidを入力してください<br />
        <input type = "text" name = "delete_id" size = "5"/>
    </p>
    <p>
        <input type = "submit" id="delete" name="delete" value = "削除" />
    </p>

    <p style = "color:red"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['errorMsg']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
    <p style = "color:blue"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['resultMsg']->value, ENT_QUOTES, 'UTF-8', true);?>
</p>
    <table border = "1">
        <tbody>
        <tr>

            <th>id</th>
            <th>本文</th>
        </tr>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rows']->value, 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
            <tr>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</td>
                <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['contents'], ENT_QUOTES, 'UTF-8', true);?>
</td>
            </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


        </tbody></table>
</form>
</body>
</html><?php }
}

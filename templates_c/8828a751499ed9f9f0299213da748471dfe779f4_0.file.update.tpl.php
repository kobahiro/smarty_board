<?php
/* Smarty version 3.1.30, created on 2017-01-27 11:31:06
  from "C:\xampp\htdocs\smarty_board\templates\update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588b216a8189e7_09361726',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8828a751499ed9f9f0299213da748471dfe779f4' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_board\\templates\\update.tpl',
      1 => 1485513003,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588b216a8189e7_09361726 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>更新</title>
</head>
<body>
<h1>掲示板 更新</h1>

<p>ユーザ名：<u><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['usr_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</u></p>
<ul>
    <li><a href="logout_smarty.php">ログアウト</a></li>
    <li><a href="delete_smarty.php">削除</a></li>
    <li><a href="update_smarty.php">更新</a></li>
    <li><a href="home_smarty.php">ほーむへ</a></li>
</ul>
<form method = "POST" action = "">

    <p>
        更新したい投稿のidを入力してください<br />
        <input type = "text" name = "update_id" size = "5"/>
    </p>
    <p>
        本文を入力してください：(140字以内)<br />
        <input type = "text" name = "contents" size = "140" maxlength = "140"/>
    </p>

    <p>
        <input type = "submit" id="update" name="update" value = "更新" />
    </p>
    <p style = "color:red"><?php echo mb_convert_encoding(htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['errorMsg']->value, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
    <p style = "color:blue"><?php echo mb_convert_encoding(htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['resultMsg']->value, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
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
                <td><?php echo mb_convert_encoding(htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['id'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
                <td><?php echo mb_convert_encoding(htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['contents'], ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
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

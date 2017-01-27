<?php
/* Smarty version 3.1.30, created on 2017-01-27 11:39:03
  from "C:\xampp\htdocs\smarty_board\templates\home.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_588b2347e67500_73740867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0336b6e78aeda6fcf4986e0771962cc44bb39ae2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\smarty_board\\templates\\home.tpl',
      1 => 1485513537,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_588b2347e67500_73740867 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
    <title>掲示板 </title>
</head>
<body>

<h1>掲示板 ほーむ</h1>
<p>ユーザ名：<u><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['usr_name']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</u></p>
<ul>
    <li><a href = "logout_smarty.php">ログアウト</a></li>
    <li><a href = "update_smarty.php">更新</a></li>
    <li><a href = "delete_smarty.php">削除</a></li>
</ul>
<form method = "POST" action = "">

    <p>
        本文：(140字以内)<br />
        <input type = "text" name = "contents" size = "140" maxlength = "140"/>
    </p>


    <p>
        <input type = "submit" id = "inform" name = "inform" value = "投稿" />
    </p>
    <p style = "color:red"><?php echo mb_convert_encoding(htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['errorMsg']->value, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>
    <p style = "color:blue"><?php echo mb_convert_encoding(htmlspecialchars(htmlspecialchars($_smarty_tpl->tpl_vars['resultMsg']->value, ENT_QUOTES, 'UTF-8', true), ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</p>

    <p>投稿一覧</p>

    <table border = "1">
        <tr>
            <th>名前</th><th>本文</th>

        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, htmlspecialchars($_smarty_tpl->tpl_vars['rows']->value, ENT_QUOTES, 'UTF-8', true), 'row');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
?>
        <tr>

            <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['name'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
            <td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['row']->value['contents'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
        </tr>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>


    </table>

</form>
</body>
</html>
<?php }
}

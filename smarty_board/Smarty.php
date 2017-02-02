<?php

session_start();

require_once('../libs/Smarty.class.php');

$smartyObj=new Smarty();
$smartyObj->template_dir='../templates/';
$smartyObj->compile_dir='../templates_c/';

//xssエスケープ
//$smartyObj->default_modifiers = array('escape:"htmlall"');
?>
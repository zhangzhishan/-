<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:19:48
         compiled from "F:\www\eesh\view\admin\\public\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1378755bc10a4599494-63064755%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8ca0bbef64ff79ae8e297a6836cc4609cc781dc3' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\\\public\\login.tpl',
      1 => 1438073380,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1378755bc10a4599494-63064755',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc10a45fce27_81103968',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc10a45fce27_81103968')) {function content_55bc10a45fce27_81103968($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/login.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/login.js"></script>
<title>Myshop Admin</title>
</head>
<body>
<div id="login">
	<form method="post" action="?a=admin&m=runLogin" id="loginForm">
	<dl>
		<dd>
			<label for="user">User Name:</label>
				<input type="text" id="user" name="user" class="text"/>
			</dd>
		<dd>
			<label for="pwd">Password：</label>
				<input type="password" id="pwd" name="pwd" class="text"/>
			</dd>
		<dd><input type="submit" name="send" class="submit" value="loginSystem"/></dd>
	</dl>
	</form>
	
</div>
</body>
</html><?php }} ?>

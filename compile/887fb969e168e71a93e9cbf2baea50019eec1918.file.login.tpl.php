<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 09:35:10
         compiled from "F:\www\eesh\view\default\public\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2372255bc18ff9f6ff4-56858878%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '887fb969e168e71a93e9cbf2baea50019eec1918' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\login.tpl',
      1 => 1438392880,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2372255bc18ff9f6ff4-56858878',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc18ffa58ab7_84764358',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc18ffa58ab7_84764358')) {function content_55bc18ffa58ab7_84764358($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/login.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/default/js/login.js"></script>
<title>MyShop</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 Now:<a href="./">Home</a> &gt; Login
</div>
	<form action="?a=user&m=login" method="post" id="loginForm" name="form">

	</form>


<div id="login">	
	<form action="?a=user&m=login" method="post" id="loginForm" name="form">
		<dl>
			<dt><h2>Login</h2><p class="short_line"></p></dt>
			<dd><label> User name：</label><input type="text" name="user" class="text"/><span class="red">*</span></dd>
			<dd><label>Password：</label><input type="password" id="pwd" name="pwd" class="text"/><span class="red"> *</span></dd>
			<dd><input type="submit" name="send" class="sub" value="Login"/></dd>
		</dl>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

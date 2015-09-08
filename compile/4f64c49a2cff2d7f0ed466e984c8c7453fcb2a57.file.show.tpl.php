<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:51:54
         compiled from "F:\www\eesh\view\admin\edit\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:928855c1dcbab64677-24191509%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4f64c49a2cff2d7f0ed466e984c8c7453fcb2a57' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\edit\\show.tpl',
      1 => 1438074630,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '928855c1dcbab64677-24191509',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1dcbabb0e59_83398676',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1dcbabb0e59_83398676')) {function content_55c1dcbabb0e59_83398676($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=edit&m=runAdd">Add theme</a>Goods  -- theme list</h2>
<div id="list">
	<table class="public">
		<tr><th>theme Name</th><th>theme directory </th><th>version</th><th>Operation</th></tr>
		<tr><td><input type="text" value="default theme" size="8" /></td><td>default</td><td>v.10</td><td><a href="?a=edit&m=dir&dir=default">Jump into directory </a></td></tr>
			
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>

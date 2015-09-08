<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:21:28
         compiled from "F:\www\eesh\view\admin\price\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106055bc11089a2b66-44503332%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a3ecd988fd05918253bc6ddf3b29867a4b4d00d1' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\price\\show.tpl',
      1 => 1438073547,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106055bc11089a2b66-44503332',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allPrice' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc1108a1d952_24200960',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc1108a1d952_24200960')) {function content_55bc1108a1d952_24200960($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=price&m=runadd">Add price </a>Goods  --  price  list</h2>
<div id="list">
	<form method="post" action="?a=price&m=runAdd">
	<table class="public">
		<tr><th>Number<th>Min</th><th>Max</th><th>Operation</th></tr>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allPrice']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>			
				<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_left;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_right;?>
</td>
				<td>
				<a href="?a=price&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=price&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
				</td></tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
				<tr><td colspan="4">No data!</td></tr>
			<?php } ?>
	</table>
	</form>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>

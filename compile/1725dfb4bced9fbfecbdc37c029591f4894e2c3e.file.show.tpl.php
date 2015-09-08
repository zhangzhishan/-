<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:51:43
         compiled from "F:\www\eesh\view\admin\delivery\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1695455c1dcaf0373a1-88098867%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1725dfb4bced9fbfecbdc37c029591f4894e2c3e' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\delivery\\show.tpl',
      1 => 1438075071,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1695455c1dcaf0373a1-88098867',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allDelivery' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1dcaf151f58_96978261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1dcaf151f58_96978261')) {function content_55c1dcaf151f58_96978261($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\www\\eesh\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=delivery&m=runAdd">Add  delivery</a>Goods  --  delivery list</h2>
<div id="list">
	<table class="public">
		<tr><th>Number</th><th>Delivery company</th><th>In town</th><th>Out of town</th><th>Additional</th><th> information</th><th>address</th><th>RegisterTime</th><th>Operation</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allDelivery']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allDelivery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_in;?>
 Pounds</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_out;?>
 Pounds</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_add;?>
 Pounds</td>
			<td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->info,20);?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->url;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</td><td>
				<a href="?a=delivery&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=delivery&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
			</td></tr>
			<?php } ?>
		<?php } else { ?>
			<tr><td colspan="6">No data!</td></tr>
		<?php }?>
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>

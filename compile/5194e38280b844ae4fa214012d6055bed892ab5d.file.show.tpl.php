<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:20:02
         compiled from "F:\www\eesh\view\admin\brand\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2747355bc10b282d677-67227695%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5194e38280b844ae4fa214012d6055bed892ab5d' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\brand\\show.tpl',
      1 => 1438075017,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2747355bc10b282d677-67227695',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allFrand' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc10b2995174_29019278',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc10b2995174_29019278')) {function content_55bc10b2995174_29019278($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\www\\eesh\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=brand&m=runAdd">Add  brand </a>Goods  --  brand  list</h2>
<div id="list">
	<table class="public">
		<tr><th>Number</th><th> brand </th><th>Type </th><th> information</th><th>address</th><th>RegisterTime</th><th>Operation</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allFrand']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allFrand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->type;?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->info,20);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->url;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->reg_time;?>
</td><td>
				<a href="?a=brand&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=brand&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
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

<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:51:47
         compiled from "F:\www\eesh\view\admin\manage\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:381955c1dcb3a4aa35-77619357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cb16531901be330e36318c2a36034ebfd13b8ffe' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\manage\\show.tpl',
      1 => 1438092822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '381955c1dcb3a4aa35-77619357',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allManage' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1dcb3afa788_73632913',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1dcb3afa788_73632913')) {function content_55c1dcb3afa788_73632913($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=manage&m=runAdd">Add Admin </a>System -- Admin  list</h2>
<div id="list">
	<table class="public">
		<tr><th>Number</th><th>Username </th><th>Level</th><th>Login times</th><th>Last login ip</th><th>Last login time</th><th>Operation</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allManage']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allManage']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->user;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->level_name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->login_count;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->last_ip;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->last_time;?>
</td><td>
				<a href="?a=manage&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=manage&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
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

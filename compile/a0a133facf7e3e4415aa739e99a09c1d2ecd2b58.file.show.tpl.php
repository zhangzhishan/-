<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:44:20
         compiled from "F:\www\eesh\view\admin\rotator\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1464455c1daf4a2f276-07724008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0a133facf7e3e4415aa739e99a09c1d2ecd2b58' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\rotator\\show.tpl',
      1 => 1438072484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1464455c1daf4a2f276-07724008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allRotator' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1daf4abd6e0_50477950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1daf4abd6e0_50477950')) {function content_55c1daf4abd6e0_50477950($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=rotator&m=runAdd">Add  rotator</a> rotator --  rotator list</h2>
<div id="list">
<form method="post" action="?a=rotator&m=runSort">
	<table class="public">
		<tr><th>Number</th><th>picture Name</th><th>links address</th><th>picture Address</th><th>Time</th><th>Home on show</th><th>Range</th><th>Operation</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allRotator']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allRotator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->link;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->thumb;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</td>

			<td>
			<?php if ($_smarty_tpl->tpl_vars['value']->value->state==0) {?>
				<span class="red">No</span> <a class="green"href="?a=rotator&m=isShow&act=yes&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[ on show]</a>
			<?php } else { ?>
				<span class="green">Yes</span> <a class="red" href="?a=rotator&m=isShow&act=no&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[Cancel ]</a>
			<?php }?>
			</td>
			<td><input type="text" class="text sort" name="sort[<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->sort;?>
"/></td>
			<td>
				<a href="?a=rotator&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=rotator&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
			</td></tr>
			<?php } ?>
			<tr><td></td><td></td><td><td></td></td><td></td><td></td><td><input type="submit" name="send" value="Range"/></td><td></td></tr>
		<?php } else { ?>
			<tr><td colspan="6">No data!</td></tr>
		<?php }?>
	</table>
	</form>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>

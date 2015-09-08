<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:51:14
         compiled from "F:\www\eesh\view\admin\goods\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3000255bc252bd7a739-50300711%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50a786a039b9d3ec5530a0aadd3cc097918fe60f' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\goods\\show.tpl',
      1 => 1438768268,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3000255bc252bd7a739-50300711',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc252be3dbf0_89439429',
  'variables' => 
  array (
    'allGoods' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc252be3dbf0_89439429')) {function content_55bc252be3dbf0_89439429($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\www\\eesh\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/goods.css'/>
</head>
<body>
<h2><a href="?a=goods&m=runAdd">Add Goods </a>Goods  list</h2>
<div id="list">
	<table class="public">
		<tr><th>Number</th><th>Goods Name</th><th>Goods Number</th><th>Goods Price（ Pounds）</th><th>Goods Type </th><th>IsSelling</th><th>Whether On sale</th><th>Whether Recommend</th><th>Stock</th><th>Operation</th></tr>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allGoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td><td><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->name,15);?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->sn;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['value']->value->is_up==0) {?>
						<span class="red">No</span> <a class="green"href="?a=goods&m=isUp&act=up&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[Up]</a>
					<?php } else { ?>
						<span class="green">Yes</span> <a class="red" href="?a=goods&m=isUp&act=down&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[Down]</a>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['value']->value->is_promote==0) {?>
						<span class="red">No</span> <a class="green"href="?a=goods&m=isPromote&act=yes&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[On sale]</a>
					<?php } else { ?>
						<span class="green">Yes</span> <a class="red" href="?a=goods&m=isPromote&act=no&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[Cancel ]</a>
					<?php }?>
				</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['value']->value->is_recommend==0) {?>
						<span class="red">No</span> <a class="green"href="?a=goods&m=isRecommend&act=yes&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[Recommend]</a>
					<?php } else { ?>
						<span class="green">Yes</span> <a class="red" href="?a=goods&m=isRecommend&act=no&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">[Cancel ]</a>
					<?php }?>
				</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->inventory;?>
</td><td>
					<a href="?a=goods&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
					<a href="?a=goods&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
				</td></tr>
			<?php }
if (!$_smarty_tpl->tpl_vars['value']->_loop) {
?>
				<tr><td colspan="9">No data!</td></tr>
			<?php } ?>
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>

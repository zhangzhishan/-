<?php /* Smarty version Smarty-3.1.17, created on 2015-07-31 23:35:20
         compiled from "F:\www\eesh\view\admin\nav\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2670955bb95b890b370-79328510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e0877bf09c0ed62d9276e925f84ac593f74326c' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\nav\\show.tpl',
      1 => 1438073791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2670955bb95b890b370-79328510',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'flag' => 0,
    'oneNav' => 0,
    'allNav' => 0,
    'key' => 0,
    'value' => 0,
    'prev_url' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bb95b89ae570_64723993',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bb95b89ae570_64723993')) {function content_55bb95b89ae570_64723993($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/admin.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?><a href="?a=nav&m=runAdd">Add nav</a><?php } else { ?><a href="?a=nav&m=runadd&id=<?php echo $_smarty_tpl->tpl_vars['oneNav']->value[0]->id;?>
">Add nav</a><?php }?>System --  nav list</h2>
<div id="list">
	<form method="post" action="?a=nav&m=runSort">
	<table class="public">
		<tr><th>Number<th>Name</th><th>Introduction</th><?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?><th>Child category</th><?php } else { ?><th> brand </th><?php }?><th>Range</th><th>Operation</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allNav']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>			
				<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
<td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->info;?>
</td><td>
					<?php if (!$_smarty_tpl->tpl_vars['flag']->value) {?>
					<a href="?a=nav&sid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">view</a> | <a href="?a=nav&m=runAdd&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">Add</a></td>
					<?php } else { ?>
					<?php echo $_smarty_tpl->tpl_vars['value']->value->brand;?>

					<?php }?>
					<td><input type="text" class="text sort" name="sort[<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->sort;?>
"/></td>
				<td>
				<a href="?a=nav&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=nav&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
				</td></tr>
			<?php } ?>
			<tr><td></td><td></td><td></td><td></td><td><input type="submit" name="send" value="Range"/></td><td></td></tr>
		<?php } else { ?>
			<tr><td colspan="6">No data!</td></tr>
		<?php }?>
	</table>
	</form>
	<?php if ($_smarty_tpl->tpl_vars['flag']->value) {?><p class="return">last nav：<strong><?php echo $_smarty_tpl->tpl_vars['oneNav']->value[0]->name;?>
</strong>  [<a href="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
">back last</a>]</p><?php }?>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>	
</div>

</body>
</html><?php }} ?>

<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:21:22
         compiled from "F:\www\eesh\view\admin\commend\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2168755bc11026e5710-66174393%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd53e82dbf1d52e3b026bb69cda196840e6dae1bc' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\commend\\show.tpl',
      1 => 1438075003,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2168755bc11026e5710-66174393',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allCommend' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc11027b8fe9_73636442',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc11027b8fe9_73636442')) {function content_55bc11027b8fe9_73636442($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include 'F:\\www\\eesh\\smarty\\plugins\\modifier.truncate.php';
?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2>Goods  -- evaluate list</h2>
<div id="list">
	<table class="public">
		<tr><th>Number</th><th>Goods Name</th><th>evaluate content</th><th>reply content</th><th>Evaluate star</th><th>Evaluate</th><th>Date</th><th>Operation</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allCommend']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allCommend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td>
			<td title="<?php echo $_smarty_tpl->tpl_vars['value']->value->content;?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->content,20);?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['value']->value->re_content) {?><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['value']->value->re_content,20);?>
<?php } else { ?><span>unreply</span><?php }?></td>
			<td style="color:pink">
				<?php if ($_smarty_tpl->tpl_vars['value']->value->star==5) {?><span class="star">★★★★★</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value->star==4) {?><span class="star">★★★★</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value->star==3) {?><span class="star">★★★</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value->star==2) {?><span class="star">★★</span><?php }?>
				<?php if ($_smarty_tpl->tpl_vars['value']->value->star==1) {?><span class="star">★</span><?php }?>					
			</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->user;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</td><td>
				<a href="?a=commend&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
				<a href="?a=commend&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Are you sure to delete it?<?php ?>>') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
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

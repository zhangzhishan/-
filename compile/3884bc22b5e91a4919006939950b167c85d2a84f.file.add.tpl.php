<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:22:23
         compiled from "F:\www\eesh\view\admin\attr\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:136355bc113f15e274-25987741%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3884bc22b5e91a4919006939950b167c85d2a84f' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\attr\\add.tpl',
      1 => 1438071316,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '136355bc113f15e274-25987741',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prev_url' => 0,
    'way' => 0,
    'allNav' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc113f211119_89180435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc113f211119_89180435')) {function content_55bc113f211119_89180435($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\www\\eesh\\smarty\\plugins\\function.html_radios.php';
if (!is_callable('smarty_function_html_checkboxes')) include 'F:\\www\\eesh\\smarty\\plugins\\function.html_checkboxes.php';
?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/attr.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/attr.js"></script>
<title>Myshop Admin</title>
</head>
<body>
	<h2><a href="?a=attr">back attribute list</a>Goods  -- Add Attribute</h2>
<form method="post" action="?a=attr&m=runAdd" name="add" id="addForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		<dd>
			<label for="name">AttributeName：</label><input type="text" id="name" name="name" class="text"/><span> <b class="red">[must]</b>（*2-4 charecter）</span>
		</dd>
		<dd>Select: <?php echo smarty_function_html_radios(array('name'=>"way",'options'=>$_smarty_tpl->tpl_vars['way']->value,'selected'=>0),$_smarty_tpl);?>
</dd>
		<dd>Attribute item：<textarea name="item"></textarea> （*every item is divided by “|”，e.g., red|blue|green）</dd>
		<dd>Please select the related item</dd>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<dd><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</dd>
			<?php if ($_smarty_tpl->tpl_vars['value']->value->child) {?>
			<?php echo smarty_function_html_checkboxes(array('options'=>$_smarty_tpl->tpl_vars['value']->value->child,'name'=>"nav"),$_smarty_tpl);?>

			<?php }?>
		<?php } ?>
		<dd>It is not exist，Please<a class="red" href="?a=nav&m=runAdd">add</a>first</dd>
		<dd><input type="submit" name="send" value="add_Attribute"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>

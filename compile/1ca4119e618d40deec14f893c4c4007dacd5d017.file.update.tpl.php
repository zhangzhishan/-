<?php /* Smarty version Smarty-3.1.17, created on 2015-08-06 06:15:39
         compiled from "F:\www\eesh\view\admin\attr\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:217355c2df6b170fe7-33683760%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ca4119e618d40deec14f893c4c4007dacd5d017' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\attr\\update.tpl',
      1 => 1438388785,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '217355c2df6b170fe7-33683760',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oneAttr' => 0,
    'prev_url' => 0,
    'way' => 0,
    'allNav' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c2df6b30c007_48647681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c2df6b30c007_48647681')) {function content_55c2df6b30c007_48647681($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_radios')) include 'F:\\www\\eesh\\smarty\\plugins\\function.html_radios.php';
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
	<form method="post" action="?a=attr&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneAttr']->value->id;?>
" name="update" id="updateForm">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
" />
	<dl class="form">
		<dd>
			<label for="name">AttributeName：</label><input type="text" id="name" name="name" value="<?php echo $_smarty_tpl->tpl_vars['oneAttr']->value->name;?>
" class="text"/><span> <b class="red">[must]</b>（*2-40 charecter）</span>
		</dd>
		
		<dd>Select:<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['oneAttr']->value->way;?>
<?php $_tmp1=ob_get_clean();?><?php echo smarty_function_html_radios(array('name'=>"way",'options'=>$_smarty_tpl->tpl_vars['way']->value,'selected'=>$_tmp1),$_smarty_tpl);?>
</dd>
		<dd>Attribute item:<textarea name="item"><?php echo $_smarty_tpl->tpl_vars['oneAttr']->value->item;?>
</textarea> （**every item is divided by “|”，e.g., red|blue|green）</dd>
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
			<?php echo smarty_function_html_checkboxes(array('options'=>$_smarty_tpl->tpl_vars['value']->value->child,'name'=>"nav",'selected'=>$_smarty_tpl->tpl_vars['oneAttr']->value->nav),$_smarty_tpl);?>

			<?php }?>
		<?php } ?>
				<dd>It is not exist，Please<a class="red" href="?a=nav&m=runAdd">add</a>first</dd>

		<dd><input type="submit" name="send" value="EditAttribute"/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>

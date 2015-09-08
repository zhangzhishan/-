<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:54:45
         compiled from "F:\www\eesh\view\admin\public\error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:596455bc18d5acb148-89908552%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aab6bbceb8d37fd4a62d103ed2dffa2e7f8bb807' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\public\\error.tpl',
      1 => 1438010784,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '596455bc18d5acb148-89908552',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'message' => 0,
    'key' => 0,
    'value' => 0,
    'prev_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc18d5b3bb49_68027401',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc18d5b3bb49_68027401')) {function content_55bc18d5b3bb49_68027401($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/error.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
	<h2>Error -- Peompt</h2>
<div id="list" class="error">	
	<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['message']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<p><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
.<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</p>
	<?php } ?>
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
">[back]</a></p>
</div>
</body>
</html><?php }} ?>

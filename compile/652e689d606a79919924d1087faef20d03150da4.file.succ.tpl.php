<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:19:53
         compiled from "F:\www\eesh\view\admin\public\succ.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2264855bc10a9b21892-52614972%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '652e689d606a79919924d1087faef20d03150da4' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\public\\succ.tpl',
      1 => 1438010758,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2264855bc10a9b21892-52614972',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'url' => 0,
    'message' => 0,
    'key' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc10a9cd67b3_80275808',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc10a9cd67b3_80275808')) {function content_55bc10a9cd67b3_80275808($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="1;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/succ.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
	<h2>Success -- Peompt</h2>
<div id="list" class="succ">	
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
	<p><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
">[Clik me]</a></p>
</div>
</body>
</html><?php }} ?>

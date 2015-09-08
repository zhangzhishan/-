<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:55:25
         compiled from "F:\www\eesh\view\admin\public\succ_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1730155bc18fdc2df98-75459097%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6cc8f8a91a9b3fe4ef43cb170b498dd29fdb9a4' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\public\\succ_index.tpl',
      1 => 1438005883,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1730155bc18fdc2df98-75459097',
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
  'unifunc' => 'content_55bc18fdd0bd48_55985245',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc18fdd0bd48_55985245')) {function content_55bc18fdd0bd48_55985245($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="refresh" content="1;url=<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" />
<title>Myshop </title>
<style>
	body{
		background: #f3f3f3;
	}
	#list{
		width:700px;
		padding:20px;
		background: #fff;
		margin:60px auto 0;
	}
	#list h2{
		margin:0;
	    	font-weight: normal;
	    	font-size: 26px;
	}
	#list p.short_line{
		width:52px;
		height: 3px;
		background: red;
		margin:10px 0 20px 0;
	}
	#list dl{
		overflow: hidden;
	}
	#list dt{
		float: left;
		padding:0 10px 0 40px;
	}
	#list dd{
		padding-top:40px;
	}
</style>
</head>
<body>	
<div id="list" class="succ">
	<h2>Prompt</h2><p class="short_line"></p>
	<dl>
		<dt><img src="view/default/images/success.jpg" alt="" /></dt>
		<dd>
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
">[If the browser don't jump automatilly, please click me!]</a></p>
		</dd>
	</dl>	
	
</div>
</body>
</html><?php }} ?>

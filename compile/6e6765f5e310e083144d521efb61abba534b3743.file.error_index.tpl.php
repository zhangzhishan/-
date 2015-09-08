<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 12:19:16
         compiled from "F:\www\eesh\view\admin\public\error_index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2523555c1e324b29a55-08074084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e6765f5e310e083144d521efb61abba534b3743' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\public\\error_index.tpl',
      1 => 1438010777,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2523555c1e324b29a55-08074084',
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
  'unifunc' => 'content_55c1e324e44635_02761615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1e324e44635_02761615')) {function content_55c1e324e44635_02761615($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
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
<div id="list" class="error">
	<h2>Error -- Peompt</h2><p class="short_line"></p>
	<dl>
		<dt><img src="view/default/images/error_cry.gif" alt="" /></dt>
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
			<p><a href="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
">[back]</a></p>
		</dd>
	</dl>	
</div>
</body>
</html><?php }} ?>

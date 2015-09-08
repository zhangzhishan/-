<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:52:06
         compiled from "F:\www\eesh\view\admin\edit\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1197555c1dcc63cab19-71534997%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '132dce13019bdcdef76c087d3a45a65c84ef890f' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\edit\\update.tpl',
      1 => 1438075086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1197555c1dcc63cab19-71534997',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'prev_url' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1dcc6485311_30097741',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1dcc6485311_30097741')) {function content_55c1dcc6485311_30097741($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/edit.css'/>
<title>Myshop Admin</title>
</head>
<body>
	<h2><a href="?a=edit&m=file&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_GET['file'];?>
">backfile  list</a>System -- Add file </h2>
	<form method="post" name="update" action="?a=edit&m=runUpdate&dir=<?php echo $_GET['dir'];?>
&file=<?php echo $_GET['file'];?>
">
	<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
"/>
	<dl class="form">
		<dd>file Name：<input type="text" name="name" class="text" value="<?php echo $_GET['name'];?>
" /> </dd>
		<dd><span class="middle">code edit：</span><textarea name="content" style="width:90%;height:500px;"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</textarea></dd>
		<dd><input type="submit" name="send"  value="editfile " class="submit" /></dd>
	</dl>
</form>
</body>
</html><?php }} ?>

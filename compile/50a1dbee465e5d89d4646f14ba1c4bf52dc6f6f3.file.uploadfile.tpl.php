<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 09:54:40
         compiled from "F:\www\eesh\view\admin\public\uploadfile.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1820855bc26e0991de2-72330386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50a1dbee465e5d89d4646f14ba1c4bf52dc6f6f3' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\public\\uploadfile.tpl',
      1 => 1438005742,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1820855bc26e0991de2-72330386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'type' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc26e09e15d8_59863820',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc26e09e15d8_59863820')) {function content_55bc26e09e15d8_59863820($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Upload</title>
</head>
<body >
<div style="margin:30px auto;width:400px;text-align:center" >
	<form method="post" action="?a=call&m=upload" enctype="multipart/form-data" >
		<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
" name="type"/>	
		<input type="hidden" name="MAX_FILE_SIZE" value="2000000"/>
		<input type="file" name="userfile" id="userfile"/>
		<input type="submit" name="send"  value="confirm"/>
	</form>
</div>

</body>
</html><?php }} ?>

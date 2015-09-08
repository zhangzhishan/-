<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:21:33
         compiled from "F:\www\eesh\view\admin\price\add.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2753355bc110d0f18e7-82513185%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4a21afae93b47650f1636e24ae06b30bca5f788b' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\price\\add.tpl',
      1 => 1438073558,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2753355bc110d0f18e7-82513185',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc110d12fbd1_34483552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc110d12fbd1_34483552')) {function content_55bc110d12fbd1_34483552($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/price.css'/>
<body>
<h2><a href="?a=price">back price  list</a>Goods  -- Add price </h2>
<form method="post" action="?a=price&m=runAdd" name="add" id="priceForm">
	<dl class="form">
		<dd>
		<label for="price_left"> price ：</label>
			<input type="text" id="price_left" name="price_left" class="text"/> - <input type="text" id="price_right" name="price_right" class="text"/><span>（*Number required!）</span>
		</dd>
		<dd><input type="submit" name="send" value="Add price "/></dd>
	</dl>
</form>

</body>
</html><?php }} ?>

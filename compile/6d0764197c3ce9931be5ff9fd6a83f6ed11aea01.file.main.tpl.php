<?php /* Smarty version Smarty-3.1.17, created on 2015-07-31 23:35:16
         compiled from "F:\www\eesh\view\admin\public\main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2228455bb95b4bb63a8-43754410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d0764197c3ce9931be5ff9fd6a83f6ed11aea01' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\public\\main.tpl',
      1 => 1438072697,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2228455bb95b4bb63a8-43754410',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'count1' => 0,
    'count2' => 0,
    'count3' => 0,
    'count4' => 0,
    'allGoodsCount' => 0,
    'warnInventoryCount' => 0,
    'downGoodsCount' => 0,
    'promoteGoodsCount' => 0,
    'os' => 0,
    'server' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bb95b4c61339_17808679',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bb95b4c61339_17808679')) {function content_55bb95b4c61339_17808679($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/main.css'/>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<h2>First -- Admin</h2>

<div id="list">
	<table class="public">
		<tr><th colspan="4">Order number information</th></tr>
		<tr><td>Undelivery Order：</td><td><?php echo $_smarty_tpl->tpl_vars['count1']->value;?>
</td><td>unconfirmedOrder：</td><td><?php echo $_smarty_tpl->tpl_vars['count2']->value;?>
</td></tr>
		<tr><td>Unpaid Order：</td><td><?php echo $_smarty_tpl->tpl_vars['count3']->value;?>
</td><td>apply for refundingOrder：</td><td><?php echo $_smarty_tpl->tpl_vars['count4']->value;?>
</td></tr>
	</table>
	
	<table class="public">
		<tr><th colspan="4">Goods  number information</th></tr>
		<tr><td>Goods Amount：</td><td><?php echo $_smarty_tpl->tpl_vars['allGoodsCount']->value;?>
</td><td>Warning amount</td><td><?php echo $_smarty_tpl->tpl_vars['warnInventoryCount']->value;?>
</td></tr>
		<tr><td>Goods down：</td><td><?php echo $_smarty_tpl->tpl_vars['downGoodsCount']->value;?>
</td><td>Goods on sale：</td><td><?php echo $_smarty_tpl->tpl_vars['promoteGoodsCount']->value;?>
</td></tr>
	</table>
	
	<table class="public">
		<tr><th colspan="4">System information</th></tr>
		<tr><td>Server OS:</td><td><?php echo $_smarty_tpl->tpl_vars['os']->value;?>
</td><td>Server software</td><td><?php echo $_smarty_tpl->tpl_vars['server']->value['SERVER_SOFTWARE'];?>
</td></tr>
		<tr><td>Browser:</td><td><?php echo $_smarty_tpl->tpl_vars['server']->value['HTTP_USER_AGENT'];?>
</td><td>IP address：</td><td><?php echo $_smarty_tpl->tpl_vars['server']->value['HTTP_HOST'];?>
</td></tr>
	</table>
</div>
</html><?php }} ?>

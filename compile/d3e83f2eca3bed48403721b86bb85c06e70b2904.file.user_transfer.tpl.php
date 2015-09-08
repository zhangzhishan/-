<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 12:57:22
         compiled from "F:\www\eesh\view\default\public\user_transfer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2991355c1ec12ebe293-10811932%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3e83f2eca3bed48403721b86bb85c06e70b2904' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\user_transfer.tpl',
      1 => 1438006194,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2991355c1ec12ebe293-10811932',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oneOrder' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1ec12f2e0e3_39935903',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1ec12f2e0e3_39935903')) {function content_55c1ec12f2e0e3_39935903($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyShop</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/list.css" />
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	Now:<a href="./">Home</a> Remit	
</div>
<div id="shop_main">
	<div id="main">
		<h2>Remit</h2>
		<div class="pay">
			<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state=='Cancelled'||$_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_pay=='paied'||$_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery=='deserved'||$_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery=='delivered') {?>
			<dl><dd>This order is locked<input type="button" value="back" onclick="javascript:history.go(-1);" /></dd></dl>
			<?php } else { ?>
			<dl>
				<dd>Order number：<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ordernum;?>
</dd>
				<dd>Order money：<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->price;?>
/ Pounds</dd>
				<dd>Order details：<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->text;?>
</dd>
				<dd>You chosn remit through bank, please remit to the bank account below：</dd>
				<dd><img src="view/default/images/image_pay.jpg" alt="bank account" /></dd>
				<dd>We will deliver the goods as soon as we received the money.</dd>
			</dl>
			<?php }?>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

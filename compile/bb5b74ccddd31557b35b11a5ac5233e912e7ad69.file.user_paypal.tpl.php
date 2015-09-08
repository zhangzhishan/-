<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 13:11:43
         compiled from "F:\www\eesh\view\default\public\user_paypal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2528055c1ea5073ee66-38071304%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb5b74ccddd31557b35b11a5ac5233e912e7ad69' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\user_paypal.tpl',
      1 => 1438773096,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2528055c1ea5073ee66-38071304',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1ea507abeb1_20660346',
  'variables' => 
  array (
    'OneOrder' => 0,
    'oneOrder' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1ea507abeb1_20660346')) {function content_55c1ea507abeb1_20660346($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyShop</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/list.css" />
<script type="text/javascript" src="view/default/js/jquery.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	Now:<a href="./">Home</a> &gt; Paypal	
</div>
<div id="shop_main">
	<div id="main">
		<h2>pay online</h2>
		<div class="pay">
			<?php if ($_smarty_tpl->tpl_vars['OneOrder']->value[0]->order_state=='Cancelled'||$_smarty_tpl->tpl_vars['OneOrder']->value[0]->order_pay=='paid'||$_smarty_tpl->tpl_vars['OneOrder']->value[0]->order_delivery=='deserved'||$_smarty_tpl->tpl_vars['OneOrder']->value[0]->order_delivery=='Delivered') {?>
			<dl><dd>This order is locked!！<input type="button" value="back" onclick="javascript:history.go(-1);" /></dd></dl>
			<?php } else { ?>
			<dl>
				<dd>Order number：<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ordernum;?>
</dd>
				<dd>Order money：<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->price;?>
/ Pounds</dd>
				<dd>Order details：<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->text;?>
</dd>
				
				<dd><input type="button" onclick="javascript:alert('pay sucessuflly')" name="send" value="Paypal" /></dd>
				<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_pay=='paid';?>

				<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state=='confirmed';?>

			</dl>
			</form>
			<?php }?>
		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

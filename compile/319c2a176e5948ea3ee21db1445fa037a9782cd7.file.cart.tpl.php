<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 18:03:21
         compiled from "F:\www\eesh\view\default\public\cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3177355c1df69bb9c73-37208655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '319c2a176e5948ea3ee21db1445fa037a9782cd7' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\cart.tpl',
      1 => 1438094180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3177355c1df69bb9c73-37208655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'frontProduct' => 0,
    'value' => 0,
    'k' => 0,
    'v1' => 0,
    'v2' => 0,
    'total_sale' => 0,
    'total_market' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1df69d0f753_33374924',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1df69d0f753_33374924')) {function content_55c1df69d0f753_33374924($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/cart.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/cart.js"></script>
<title>MyShop</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 Now:<a href="./">Home</a> &gt; Cart
</div>
<div id="cart">
	<h2>Goods list</h2>	
	<table cellspacing="1">
		<tr><th>Goods Name</th><th>Attribute</th><th>Price</th><th>Market price</th><th>BuyAmount</th><th>Subtotal</th><th>Operation</th></tr>
		<?php $_smarty_tpl->tpl_vars['total_sale'] = new Smarty_variable(0, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['total_market'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontProduct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
		<td>
			<?php  $_smarty_tpl->tpl_vars['v1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v1']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v1']->key => $_smarty_tpl->tpl_vars['v1']->value) {
$_smarty_tpl->tpl_vars['v1']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v1']->key;
?>
			<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:
				<?php  $_smarty_tpl->tpl_vars['v2'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v2']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['v1']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v2']->key => $_smarty_tpl->tpl_vars['v2']->value) {
$_smarty_tpl->tpl_vars['v2']->_loop = true;
?>
				<?php echo $_smarty_tpl->tpl_vars['v2']->value;?>
;
				<?php } ?>
			<?php } ?>
		</td>
		<?php $_smarty_tpl->tpl_vars['total_sale'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_sale']->value+$_smarty_tpl->tpl_vars['value']->value['price_sale']*$_smarty_tpl->tpl_vars['value']->value['num'], null, 0);?>
		<?php $_smarty_tpl->tpl_vars['total_market'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_market']->value+$_smarty_tpl->tpl_vars['value']->value['price_market']*$_smarty_tpl->tpl_vars['value']->value['num'], null, 0);?>
		<td><strong class="red">£ <?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
 Pounds</strong></td>
		<td>£ <?php echo $_smarty_tpl->tpl_vars['value']->value['price_market'];?>
 Pounds</td>
		<td><input goodsid="<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
"type="text" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
" class="num"/></td>
		<td><strong class="red">£ <?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale']*$_smarty_tpl->tpl_vars['value']->value['num'];?>
 Pounds</strong></td>
		<td><a href="?a=cart&m=deleteProduct&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">delete</a></td></tr>
		<?php } ?>
	</table>
	<p class="buy_total">Shopping Subtotal <strong class="red">£ <?php echo $_smarty_tpl->tpl_vars['total_sale']->value;?>
 Pounds</strong>, cheaper <strong class="red">£ <?php echo $_smarty_tpl->tpl_vars['total_market']->value;?>
 Pounds</strong> save <strong class="red">£ <?php echo $_smarty_tpl->tpl_vars['total_market']->value-$_smarty_tpl->tpl_vars['total_sale']->value;?>
 Pounds</strong> <span><a style="color:red;" href="?a=cart&m=clearProduct">clear Cart</a> | <a style="color:green;" href="./">go on shopping</a></span></p>
	<div class="now_pay"><a href="?a=cart&m=flow">pay now</a></div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

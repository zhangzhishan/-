<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 12:26:43
         compiled from "F:\www\eesh\view\default\public\flow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2939255c1e4e3b5c4e5-94248641%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '504720ba285ccfaa701866a87f3feb8df8047a96' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\flow.tpl',
      1 => 1438094185,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2939255c1e4e3b5c4e5-94248641',
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
    'total_weight' => 0,
    'frontUser' => 0,
    'frontDelivery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1e4e415e338_56207059',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1e4e415e338_56207059')) {function content_55c1e4e415e338_56207059($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/cart.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/flow.js"></script>
<title>MyShop</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 Now:<a href="./">Home</a> &gt; Cart
</div>
<div id="cart">
	<h2>Goods Order</h2>
	<form method="post" name="flow" action="?a=cart&m=order"> 
	
	<table cellspacing="1">
		<caption>Goods list</caption>
		<tr><th>Number</th><th>Name</th><th>Attribute</th><th>Price</th><th>Amount</th><th>Total weight</th><th>Subtotal</th><th>Operation</th></tr>
		<?php $_smarty_tpl->tpl_vars['total_sale'] = new Smarty_variable(0, null, 0);?>
		<?php $_smarty_tpl->tpl_vars['total_weight'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontProduct']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['sn'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
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
		<?php $_smarty_tpl->tpl_vars['total_weight'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_weight']->value+$_smarty_tpl->tpl_vars['value']->value['weight']*$_smarty_tpl->tpl_vars['value']->value['num'], null, 0);?>
		<td><strong class="red">£ <?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
 Pounds</strong></td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
 </td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value['weight']*$_smarty_tpl->tpl_vars['value']->value['num'];?>
/kg </td>
		<td><strong class="red">£ <?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale']*$_smarty_tpl->tpl_vars['value']->value['num'];?>
 Pounds</strong></td>
		<td><a class="red" href="?a=cart&m=deleteProduct&id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
">delete</a></td></tr>
		<?php } ?>
	</table>
	<p><span><a class="green" href="?a=cart">backEdit</a> | Goods total price： <strong class="red">£ <?php echo $_smarty_tpl->tpl_vars['total_sale']->value;?>
 Pounds</strong></span></p>
	<table>
		<caption>Receiver information</caption>
		<tr><td width="25%">Receiver information：</td><td width="25%"><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->name;?>
</td><td width="25%">Email:</td><td width="25%"><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->email;?>
</td></tr>
		<tr><td>Address:</td><td><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->address;?>
</td><td>Post code</td><td><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->code;?>
</td></tr>
		<tr><td>Telephone</td><td><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->tel;?>
</td><td>Famous places around</td><td><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->buildings;?>
</td></tr>
		<tr><td>Town?</td><td><?php if ($_smarty_tpl->tpl_vars['frontUser']->value[0]->flag) {?>Yes<?php } else { ?>No<?php }?></td><td>Best delivery time</td><td><?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->time;?>
</td></tr>
	</table>
	<p><a class="green" href="?a=user&m=address&id=<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->id;?>
">Edit receivers information</a></p>
	
	
	<table>
		<caption>Delivery information</caption>
		<tr><th width="10%"></th><th>Name</th><th  width="50%">Description</th><th>Delivery fee</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontDelivery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr>
			<td><input type="radio" class="delivery" checked="checked" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->price_in;?>
" add="<?php echo $_smarty_tpl->tpl_vars['value']->value->price_add;?>
" weight="<?php echo $_smarty_tpl->tpl_vars['total_weight']->value;?>
" name="delivery"/></td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->info;?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price_in;?>
 Pounds</td>
		</tr>
		<?php } ?>
		<tr><td colspan="4">Total delivery fee<strong class="show_delivery"></strong>/ Pounds</td></tr>
	</table>
	<p>You need to pay delivery fees:<strong class="red price_delivery">12/ Pounds</strong></p>
	<table>
		<caption>Pay method</caption>
		<tr><th width="10%"></th><th>Name</th><th  width="50%">Description</th><th>Commission charge</th></tr>
		<tr><th><input type="radio" checked="checked" value="0"  class="pay_way" name="pay_way" title="Paypal"/><td>Paypal</td><td>Paypal online</td><td>0 Pounds</td></tr>
		<tr><th><input type="radio"  value="2" class="pay_way"  name="pay_way"  title="remit" /><td>remit</td><td>Remit through bank, you need to write the order number</td><td>2 Pounds</td></tr>
		<tr><th><input type="radio"  value="0" class="pay_way"  name="pay_way" title="cash" /><td>cash</td><td>pay by cash</td><td>0 Pounds</td></tr>	
	</table>
	<p>Commission charge：<strong class="price_pay">12/ Pounds</strong></p>
	<table cellspacing="1">
		<caption>Other information</caption>
		<tr><td width="30%"><strong>Order other information：</strong></td><td><textarea name="text"></textarea></td></tr>
		<tr><td><strong>Method for OOS：</strong></td>
		<td>
			<label><input name="ps" checked="checked" value="Deliver together" type="radio" name=""/>Deliver together</label>
			<label><input name="ps" value="Deliver sepated" type="radio" name="ps"/>Deliver sepated</label>
			<label><input name="ps" value="Cancel Order" type="radio" name="ps"/>Cancel Order</label>
		</td></tr>
	</table>
	<p id="total">Goods total:<strong><?php echo $_smarty_tpl->tpl_vars['total_sale']->value;?>
</strong>/ Pounds + Delivery fees<strong></strong>/ Pounds + Commission charge：<strong></strong>/ Pounds</p>
	<p>You need to pay<strong class="red price"></strong>  Pounds</p>
	
	<input type="hidden" value="<?php echo $_COOKIE['user'];?>
" name="user"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->name;?>
" name="name"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->email;?>
" name="email"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->code;?>
" name="code"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->address;?>
" name="address"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->tel;?>
" name="tel"/>
	<input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->buildings;?>
" name="buildings"/>
	<input type="hidden" value="" class="pay" name="pay"/>
	<input type="hidden" value="" class="form_price" name="price"/>	
	<p style="text-align:center;"><input type="submit" class="submit" name="send" value="Submit Order" /></p>
	</form>	
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

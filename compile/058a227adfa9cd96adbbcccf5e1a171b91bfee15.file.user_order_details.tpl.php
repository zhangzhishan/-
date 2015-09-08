<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 13:34:09
         compiled from "F:\www\eesh\view\default\public\user_order_details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2261755c1f4b1ebf506-21162275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '058a227adfa9cd96adbbcccf5e1a171b91bfee15' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\user_order_details.tpl',
      1 => 1438005165,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2261755c1f4b1ebf506-21162275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'oneOrder' => 0,
    'value' => 0,
    'k' => 0,
    'v' => 0,
    'vv' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1f4b20caf04_20521953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1f4b20caf04_20521953')) {function content_55c1f4b20caf04_20521953($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<title>MyShop</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 Now:<a href="./">Home</a> &gt; MY
</div>
<div id="shop_main">
	<?php echo $_smarty_tpl->getSubTemplate ('default/public/user_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	<div id="main">
		<h2><a href="?a=user&m=order">[Back to the order lists]</a>Order details</h2>
		<table cellspacing="1">
			<caption>Order status</caption>
			<tr><th>Order number</th><th>Order status</th><th>Pay status</th><th>Delivery status</th></tr>	
			<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ordernum;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_pay;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery;?>
</td></tr>		
		</table>
		<table cellspacing="1">
			<caption>Goods list</caption>
			<tr><th>Number</th><th>Name</th><th>Attribute</th><th>Price</th><th>Amount</th><th>Subtotal</th><th>Evaluate</th></tr>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneOrder']->value[0]->goods; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
				<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['sn'];?>
</td>
				<td><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value['navid'];?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</a></td>
				<td>
				<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
					<?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
;<?php } ?>
				<?php } ?>
				</td>
				<td><strong class="red"><?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
 Pounds</strong></td><td><?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
</td>
				<td><strong class="red"><?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale']*$_smarty_tpl->tpl_vars['value']->value['num'];?>
 Pounds</strong></td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery=='Delivered') {?>
					<a href="?a=user&m=commend&goods_id=<?php echo $_smarty_tpl->tpl_vars['value']->value['id'];?>
&order_id=<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->id;?>
">Evaluate</a>
					<?php } else { ?>
					---
					<?php }?>
					
					
				</td>
				</tr>
			<?php } ?>
		</table>
		<table>
			<caption>Receiver information</caption>
			<tr><td width="25%">Name</td><td width="25%"><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->name;?>
</td><td width="25%">Email:</td><td width="25%"><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->email;?>
</td></tr>
			<tr><td>Address:</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->address;?>
</td><td>Post code</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->code;?>
</td></tr>
			<tr><td>Telephone</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->tel;?>
</td><td>Famous places around</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->buildings;?>
</td></tr>
			<tr><td>Town?</td><td><?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->flag) {?>Yes<?php } else { ?>No<?php }?></td><td>Best delivery time</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->date;?>
</td></tr>
		</table>
		
		
		<table>
			<caption>Delivery information</caption>
			<tr><th>Delivery status</th><th  width="50%">Delivery company</th><th>Delivery number</th></tr>
			<tr>
				<td><?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery) {?><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery;?>
<?php } else { ?>---<?php }?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_name) {?><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_name;?>
<?php } else { ?>---<?php }?></td>
				<td><?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_num) {?><a href="<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_url;?>
"><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_num;?>
</a><?php } else { ?>---<?php }?></td>
			</tr>
		</table>
		<table>
			<caption>Pay information</caption>
			<tr><th>Pay status</th><th  width="50%">Pay method</th><th>Total</th></tr>
			<tr><td>Paypal</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state;?>
</td><td><strong class="red"><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->price;?>
</strong></strong></td></tr>		
		</table>
		<table cellspacing="1">
			<caption>Other information</caption>
			<tr><td>Other information</td><td>Method for OOS</td></tr>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->text;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ps;?>
</td></tr>
		</table>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

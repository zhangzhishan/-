<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 13:32:06
         compiled from "F:\www\eesh\view\admin\order\update.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1784855c1f436b8d804-36589001%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9d28b35ce3953d5f232629b1f1fdcaf49543f987' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\order\\update.tpl',
      1 => 1438074400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1784855c1f436b8d804-36589001',
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
    'prev_url' => 0,
    'key' => 0,
    'allDelivery' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1f436db3df5_94353267',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1f436db3df5_94353267')) {function content_55c1f436db3df5_94353267($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
<script type="text/javascript" src="view/admin/js/jquery.js"></script>
<script type="text/javascript" src="view/admin/js/jquery.validate.js"></script>
<script type="text/javascript" src="view/admin/js/order.js"></script>
</head>
<body>
<h2><a href="?a=order">Back to the order lists</a>Order -- Order list</h2>
<div id="list">
	<!--Order information-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">Order information</caption>
		<tr><th>OrderNumber</th><th>Order time</th></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ordernum;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->date;?>
</td></tr>
	</table>
	
	<!--Goods  information-->
	<table class="public">
		<caption style="padding:10px">Goods list</caption>
		<tr><th>Number</th><th>Name</th><th>Attribute</th><th>Price</th><th>Amount</th><th>Subtotal</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneOrder']->value[0]->goods; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value['sn'];?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</td>
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
			</tr>
			<?php } ?>
		<?php } else { ?>
			<tr><td colspan="6">No data!</td></tr>
		<?php }?>
	</table>
	<!--My information-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">User  information</caption>
		<tr><th>Username </th><th>Receiver  persons </th><th>Email</th></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->user;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->email;?>
</td></tr>
	</table>
	<!--Delivery  information-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">Delivery  information</caption>
		<tr><th>Postcode</th><th>Telephone</th><th>Famous palaces around</th><th>Address</th></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->code;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->tel;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->buildings;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->address;?>
</td></tr>
	</table>
	<!--Pay information-->
	<table class="public" cellspacing="1">
		<caption style="padding:10px">Pay information</caption>
		<tr><th>Delivery method</th><th>Pay method</th><th>Fee</th></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->tel;?>
</td><td><span class="red"><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->price;?>
/ Pounds</span></td></tr>
	</table>
	<!--Other information-->
	<table class="public">
		<caption style="padding:10px">Other information</caption>
		<tr><th>Other information</th><th>Method for OOS</th></tr>
		<tr><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->text;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->ps;?>
</td></tr>
	</table>
	<form method="post" action="?a=order&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->id;?>
" name="update" id="updateForm">
		<input type="hidden" name="prev_url" value="<?php echo $_smarty_tpl->tpl_vars['prev_url']->value;?>
"/>
		<input type="hidden" name="is_record" value="<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->is_record;?>
"/>
		<input type="hidden" name="user" value="<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->user;?>
"/>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneOrder']->value[0]->goods; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<input type="hidden" name="goods_id[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"/>
			<input type="hidden" name="goods_num[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['num'];?>
"/>
			<input type="hidden" name="goods_name[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
"/>
			<input type="hidden" name="goods_price_sale[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php echo $_smarty_tpl->tpl_vars['value']->value['price_sale'];?>
"/>
			<input type="hidden" name="goods_attr[<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
]" value="<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value['attr']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
:<?php  $_smarty_tpl->tpl_vars['vv'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['vv']->_loop = false;
 $_smarty_tpl->tpl_vars['kk'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['v']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['vv']->key => $_smarty_tpl->tpl_vars['vv']->value) {
$_smarty_tpl->tpl_vars['vv']->_loop = true;
 $_smarty_tpl->tpl_vars['kk']->value = $_smarty_tpl->tpl_vars['vv']->key;
?><?php echo $_smarty_tpl->tpl_vars['vv']->value;?>
;<?php } ?><?php } ?>"/><?php } ?>		
		<dl class="form">
			<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state=='Cancelled') {?>
				<dd class="red">OrderCancelled，it can be delete</dd>
			<?php } else { ?>
			<dd>Order status：
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state=='unconfirmed') {?>checked="checked"<?php }?> name="order_state" value="unconfirmed"/> unconfirmed</label>
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state=='confirmed') {?>checked="checked"<?php }?> name="order_state" value="confirmed"/> confirmed</label>
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_state=='Cancelled') {?>checked="checked"<?php }?> name="order_state" value="Cancelled"/> Cancelled</label>
			</dd>
			<dd>Pay status：
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_pay=='unpaid') {?>checked="checked"<?php }?> name="order_pay" value="unpaid"/> unpaid</label>
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_pay=='paid') {?>checked="checked"<?php }?> name="order_pay" value="paid"/> paid</label>
			</dd>
			<dd>Delivery status：
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery=='undelivery') {?>checked="checked"<?php }?> name="order_delivery" value="undelivery"/> undelivery</label>
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery=='deserved') {?>checked="checked"<?php }?> name="order_delivery" value="deserved"/> deserved</label>
				<label><input type="radio" <?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->order_delivery=='Delivered') {?>checked="checked"<?php }?> name="order_delivery" value="Delivered"/> Delivered</label>
			</dd>
			<dd>Delivery method:<select id="delivery" name="delivery">
					<option>--Please select a Delivery company</option>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allDelivery']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery==$_smarty_tpl->tpl_vars['value']->value->name) {?>
						<option url="<?php echo $_smarty_tpl->tpl_vars['value']->value->url;?>
" selected="selected" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</option>
						<?php } else { ?>
						<option url="<?php echo $_smarty_tpl->tpl_vars['value']->value->url;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</option>
						<?php }?>
						
					<?php } ?>
				</select><input id="url" name="delivery_url" type="hidden"/>
				
			</dd>
			<dd>Delivery number:<input type="text" name="delivery_num" value="<?php echo $_smarty_tpl->tpl_vars['oneOrder']->value[0]->delivery_num;?>
" class="text"/></dd>
			<?php if ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->refund==1) {?>
				<dd>
					<label><span class="red">Order is On refunding，please check if you are sure：</span><input type="checkbox" name="refund" value="2"/></label>
				</dd>
			<?php } elseif ($_smarty_tpl->tpl_vars['oneOrder']->value[0]->refund==2) {?>
				<dd>
					<span class="green">Order is refunded success</span>
				</dd>
			<?php }?>
			<dd><input type="submit" name="send" value="EditOrder"/></dd>
			<?php }?>
			
			
		</dl>
		
	</form>
</div>

</body>
</html><?php }} ?>

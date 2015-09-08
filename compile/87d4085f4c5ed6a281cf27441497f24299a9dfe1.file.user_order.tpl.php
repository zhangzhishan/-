<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 13:38:56
         compiled from "F:\www\eesh\view\default\public\user_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1705655c1e4329c4277-47961727%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87d4085f4c5ed6a281cf27441497f24299a9dfe1' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\user_order.tpl',
      1 => 1438774716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1705655c1e4329c4277-47961727',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1e432ab40f0_21046787',
  'variables' => 
  array (
    'allOrder' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1e432ab40f0_21046787')) {function content_55c1e432ab40f0_21046787($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/user.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<title>MyShop</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	 Now:<a href="./">Home</a> &gt; Myself
</div>
<div id="shop_main">
<?php echo $_smarty_tpl->getSubTemplate ('default/public/user_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">	
	<h2><a href="?a=cart">[Go to pay]</a>Order list</h2>
	<table>
		<tr><th>Order number</th><th>Order time</th><th>Total</th><th>Order status</th><th>Operation</th></tr>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allOrder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<tr><td class="order_nums"><a href="?a=user&m=order_details&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->ordernum;?>
</a></td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</td>
		<td><?php echo $_smarty_tpl->tpl_vars['value']->value->price;?>
</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['value']->value->order_state=='Cancelled') {?>
						<span style="color:red">Cancelled</span>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->order_delivery=='Delivered') {?>
							<?php if ($_smarty_tpl->tpl_vars['value']->value->refund==1) {?>
								<span style="color:red">On refunding</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
								<span style="color:green">Refunding success</span>
							<?php } else { ?>
								<span style="color:green">Delivered，wait to confirm</span>
							<?php }?>							
						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['value']->value->order_delivery=='deserved') {?>
								<?php if ($_smarty_tpl->tpl_vars['value']->value->refund==1) {?>
									<span style="color:red">On refunding</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
									<span style="color:green">Refunding success</span>
								<?php } else { ?>
									<span style="color:green">deserved，wait to deliver</span>
								<?php }?>							
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['value']->value->order_pay=='paid') {?>	
									<?php if ($_smarty_tpl->tpl_vars['value']->value->refund==1) {?>
										<span style="color:red">On refunding</span>
									<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
										<span style="color:green">Refunding success</span>
									<?php } else { ?>
										<span style="color:green">paid，wait to deserve</span>
									<?php }?>																	
														
								<?php } else { ?>
									<?php if ($_smarty_tpl->tpl_vars['value']->value->order_state=='confirmed') {?>
										<span style="color:green">confirmed，wait to pay</span>
									<?php } else { ?>
										<span style="color:#666">unconfirmed</span>
									<?php }?>
								<?php }?>
							<?php }?>					
						<?php }?>
					<?php }?>
		</td>
		<td>
			<?php if ($_smarty_tpl->tpl_vars['value']->value->order_delivery=='deserved'||$_smarty_tpl->tpl_vars['value']->value->order_state=='Cancelled'||$_smarty_tpl->tpl_vars['value']->value->order_pay=='paid') {?>	
				<?php if ($_smarty_tpl->tpl_vars['value']->value->order_state=='Cancelled'||$_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
				<a style="color:red;" href="?a=user&m=deleteOrder&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Are you sure to delete?') ? true : false">delete</a>
				<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund=='0') {?>
				<a style="color:red;" href="?a=user&m=refund&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Information for applying for refunding：\n\n1. You can apply for refunding for paid、deserved or delivered goods；\n2.Paid or deserved goods should be applied in 72 hours;\n\nAre you sure to apply for refunding?') ? true : false">apply for refunding</a> 
				<?php } else { ?>
				----
				<?php }?>
			<?php } else { ?>
			<a style="color:green;" href="?a=user&m=runpaid&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">pay online</a> | 
			<a style="color:green;" href="?a=user&m=transfer&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">pay transfer</a> | 
				<a style="color:green;" href="?a=user&m=cash&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">pay cash</a> | 
				<a style="color:red;" href="?a=user&m=cancel&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Are you sure to Cancel?') ? true : false">Cancel </a> 
			<?php }?>
		
		</td></tr>
		<?php } ?>
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

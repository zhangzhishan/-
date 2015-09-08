<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 17:50:32
         compiled from "F:\www\eesh\view\admin\order\show.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3234855c1dc681c05d8-34581458%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c671acd869a0e428e025dff7220649b59855aa5d' => 
    array (
      0 => 'F:\\www\\eesh\\view\\admin\\order\\show.tpl',
      1 => 1438074539,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3234855c1dc681c05d8-34581458',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allOrder' => 0,
    'key' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1dc683a1787_68910499',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1dc683a1787_68910499')) {function content_55c1dc683a1787_68910499($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2>Order -- Order list</h2>
<div id="list">
	<table class="public">
		<tr><th>Number</th><th>Order number</th><th>Consumer</th><th>Order time</th><th>Total</th><th>Order status</th><th>Operation</th></tr>
		<?php if ($_smarty_tpl->tpl_vars['allOrder']->value) {?>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allOrder']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr>
				<td><?php echo $_smarty_tpl->tpl_vars['key']->value+1;?>
</td>
				<td><a href="?a=user&m=order_details&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value->ordernum;?>
</a></td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value->user;?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->price;?>
</td>
				<td>
					<?php if ($_smarty_tpl->tpl_vars['value']->value->order_state=='Cancelled') {?>
						<span class="red">Cancelled</span>
					<?php } else { ?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->order_delivery=='Delivered') {?>
							<?php if ($_smarty_tpl->tpl_vars['value']->value->refund==1) {?>
								<span class="red">On refunding</span>
							<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
								<span class="green">Refunding success</span>
							<?php } else { ?>
								<span class="green">Delivered，wait to confirm</span>
							<?php }?>
						<?php } else { ?>
							<?php if ($_smarty_tpl->tpl_vars['value']->value->order_delivery=='deserved') {?>
								<?php if ($_smarty_tpl->tpl_vars['value']->value->refund==1) {?>
									<span class="red">On refunding</span>
								<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
									<span class="green">Refunding success</span>
								<?php } else { ?>
									<span class="green">deserved，wait to deliver</span>
								<?php }?>
							<?php } else { ?>
								<?php if ($_smarty_tpl->tpl_vars['value']->value->order_pay=='paid') {?>
									<?php if ($_smarty_tpl->tpl_vars['value']->value->refund==1) {?>
										<span class="red">On refunding</span>
									<?php } elseif ($_smarty_tpl->tpl_vars['value']->value->refund==2) {?>
										<span class="green">Refunding success</span>
									<?php } else { ?>
										<span class="green">paid，wait to deserve</span>
									<?php }?>
								<?php } else { ?>
									<?php if ($_smarty_tpl->tpl_vars['value']->value->order_state=='confirmed') {?>
										<span class="green">confirmed，wait to pay</span>
									<?php } else { ?>
										<span style="color:#666">unconfirmed</span>
									<?php }?>
								<?php }?>
							<?php }?>					
						<?php }?>
					<?php }?>
					</td>
				<td>
					<a href="?a=order&m=runUpdate&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
					<a href="?a=order&m=runDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
				</td></tr>
			<?php } ?>
		<?php } else { ?>
			<tr><td colspan="6">No data!</td></tr>
		<?php }?>
	</table>
	<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
<input type="button" style="cursor:pointer" onclick="javascript:location.href='?a=order&m=clear'" value="delete in 24 hoursunconfirmed Order"/></div>	
</div>

</body>
</html><?php }} ?>

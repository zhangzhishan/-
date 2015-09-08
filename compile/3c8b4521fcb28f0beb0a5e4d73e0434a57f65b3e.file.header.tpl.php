<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:19:04
         compiled from "F:\www\eesh\view\default\public\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1403755bc1078ad2322-09709140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c8b4521fcb28f0beb0a5e4d73e0434a57f65b3e' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\header.tpl',
      1 => 1438009756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1403755bc1078ad2322-09709140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cartGoodsCount' => 0,
    'frontTenNav' => 0,
    'oneFrontNav' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc1078e3bcd2_15831802',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc1078e3bcd2_15831802')) {function content_55bc1078e3bcd2_15831802($_smarty_tpl) {?><div id="header">
	<span class="tel"><em class="tel_ico"></em>1234567890</span>
	<h1><a href="./"><img src="view/default/images/huahua_logo2.png" alt="LOGO"></a></h1>
	<?php if ($_COOKIE['user']) {?>
	<p>
		Hello,<?php echo $_COOKIE['user'];?>
，<a href="?a=user">Myself</a> | <a href="?a=cart"><i class="cat"></i>Cart(<strong><?php echo $_smarty_tpl->tpl_vars['cartGoodsCount']->value['num'];?>
</strong>)</a> | <a href="?a=user&m=loginOut">Login out</a>
	</p>
	<?php } else { ?>
	<p>
		<a href="?a=cart"><i class="cat"></i>Cart(<strong>0</strong>)</a>
		<a href="?a=user&m=login">login</a> | 
		<a href="?a=user&m=reg">Register</a>
	</p>
	<?php }?>
	<div class="header_search">
		<form method="post" name="form_search" action="?a=list&m=searchGoods">
			<input type="text" name="content" placeholder=" Search"/>
			<input type="submit" name="search" value="" />
		</form>
	</div>
</div>
<div id="nav">
	<ul>
		<?php if (isset($_GET['navid'])) {?>
			<li><a href="./">Home</a></li>
		<?php } else { ?>
			<li><a class="selected" href="./">Home</a></li>
		<?php }?>
		
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontTenNav']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->id)&&$_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->id==$_smarty_tpl->tpl_vars['value']->value->id) {?>
				<li><a class="selected" href="?a=list&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></li>
			<?php } else { ?>
				<li><a href="?a=list&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" ><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></li>
			<?php }?>
		<?php } ?>
	</ul>
</div>
<div id="blackHead">
	<div class="inner_top">
		<span class="tel"><em class="tel_ico"></em>1234567890</span>
		<h1>
			<a href="./"><img src="view/default/images/small_logo.png" alt="logo"></a>
			<form method="post" name="form_search" action="?a=list&m=searchGoods">
				<input type="text" name="content"/>
				<input type="submit" name="search" value="" />
			</form>
		</h1>
		
		<?php if ($_COOKIE['user']) {?>
		<p>
			Hello,<?php echo $_COOKIE['user'];?>
，<a href="?a=user">Myself</a> | <a href="?a=cart"><i class="cat"></i> Cart(<strong><?php echo $_smarty_tpl->tpl_vars['cartGoodsCount']->value['num'];?>
</strong>)</a> | <a href="?a=user&m=loginOut">Login out</a>
		</p>
		<?php } else { ?>
		<p>
			<a href="?a=cart"><i class="cat"></i> Cart(<strong>0</strong>)</a>
			<a href="?a=user&m=login">login</a> | 
			<a href="?a=user&m=reg">Register</a>
		</p>
		<?php }?>

	</div>
</div>
<script type="text/javascript" src="view/default/js/basic.js"></script>
<!-- <div id="search">
	<form method="post" name="form" action="?a=list&m=searchGoods">
		<select name="way">
			<option value="nav">category</option>
			<option value="goods">brand</option>
		</select>
		<input type="text" name="content"/>
		<input type="submit" name="search"/>
	</form>
</div> -->
<?php }} ?>

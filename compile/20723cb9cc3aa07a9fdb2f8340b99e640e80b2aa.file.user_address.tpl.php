<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 12:21:23
         compiled from "F:\www\eesh\view\default\public\user_address.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3106955c1e3a314a278-09292911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20723cb9cc3aa07a9fdb2f8340b99e640e80b2aa' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\user_address.tpl',
      1 => 1438009093,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3106955c1e3a314a278-09292911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allAddress' => 0,
    'value' => 0,
    'frontUser' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1e3a31fe562_61753261',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1e3a31fe562_61753261')) {function content_55c1e3a31fe562_61753261($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
		<h2><a href="?a=cart">[Go to pay]</a>Address</h2>
		<table>
			<tr><th>Name</th><th>Address</th><th>Telephone</th><th>Postcode</th><th>Email</th><th>Famous palaces around</th><th>Operation</th></tr>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allAddress']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<tr><td><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->address;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->tel;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->code;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->email;?>
</td><td><?php echo $_smarty_tpl->tpl_vars['value']->value->buildings;?>
</td>
			<td class="control"><?php if ($_smarty_tpl->tpl_vars['value']->value->selected) {?>Yes<?php } else { ?><a class="choose" href="?a=user&m=selected&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">First</a><?php }?> | <a class="repair" href="?a=user&m=address&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">Edit</a> | <a class="del" href="?a=user&m=RunDelete&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="return confirm('Are you sure to delete?') ? true : false">delete</a></td></tr>
			<?php } ?>
		</table>
		<h2>Edit receivers information</h2>
		<form action="?a=user&m=address&id=<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->id;?>
" method="post">
		<table class="left">
			<tr><td width="15%">Name</td><td><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->name;?>
" name="name"/></td><td width="15%">EmailAddress：</td><td><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->email;?>
" name="email"/></td></tr>
			<tr><td>Detailed Address：</td><td><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->address;?>
" name="address"/></td><td>Post code</td><td><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->code;?>
" name="code"/></td></tr>
			<tr><td>Telephone:</td><td><input type="text" class="text" name="tel" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->tel;?>
"/></td><td>Famous palaces around:</td><td><input type="text" class="text" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->buildings;?>
" name="buildings"/></td></tr>
			<tr><td>IsTowns:</td><td><label><input type="radio" value="1" <?php if ($_smarty_tpl->tpl_vars['frontUser']->value[0]->flag) {?>checked="checked"<?php }?> name="flag"/>Yes</label><label><input type="radio" value="0" <?php if ($_smarty_tpl->tpl_vars['frontUser']->value[0]->flag==0) {?>checked="checked"<?php }?> name="flag"/>No</label></td><td>The best delivery time</td><td><input type="text" name="time" value="<?php echo $_smarty_tpl->tpl_vars['frontUser']->value[0]->time;?>
"/></td></tr>
			<tr><td colspan="4" class="submit"><input class="submit" name="send" value="Deliver to this address" type="submit"/></td></tr>	
		</table>
		</form>
		<h2>New receive persons </h2>
		<form action="?a=user&m=address" method="post">
		<table class="left">
			<tr><td width="15%">Name</td><td><input type="text" class="text"  name="name"/></td><td width="15%">EmailAddress：</td><td><input type="text" class="text" name="email"/></td></tr>
			<tr><td>Detailed Address：</td><td><input type="text" class="text"  name="address"/></td><td>Post code</td><td><input type="text" class="text" name="code"/></td></tr>
			<tr><td>Telephone:</td><td><input type="text" class="text" name="tel" /></td><td>Famous palaces around:</td><td><input type="text" class="text"name="buildings"/></td></tr>
			<tr><td>IsTowns:</td><td><label><input type="radio" checked="checked" value="1" name="flag"/>Yes</label><label><input type="radio" value="0" name="flag"/>No</label></td><td>The best delivery time</td><td><input type="text" name="time" /></td></tr>
			<tr><td colspan="4" class="submit"><input class="submit" name="send" value="Deliver to this address" type="submit"/></td></tr>	
		</table>
		</form>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

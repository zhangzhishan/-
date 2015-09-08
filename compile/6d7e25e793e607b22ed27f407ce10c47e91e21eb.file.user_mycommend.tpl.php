<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 12:21:33
         compiled from "F:\www\eesh\view\default\public\user_mycommend.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1301055c1e3ada99268-92015088%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6d7e25e793e607b22ed27f407ce10c47e91e21eb' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\user_mycommend.tpl',
      1 => 1438006412,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1301055c1e3ada99268-92015088',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'allCommend' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1e3adb307a2_50140793',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1e3adb307a2_50140793')) {function content_55c1e3adb307a2_50140793($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>MyShop</title>
<link rel="stylesheet" type="text/css" href="view/default/style/basic.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/list.css" />
<link rel="stylesheet" type="text/css" href="view/default/style/user_mycommend.css" />
<script type="text/javascript" src="view/default/js/jquery.js"></script>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	Now:<a href="?a=user">Myself</a> &gt; My evaluate	
</div>
<div id="shop_main">
<?php echo $_smarty_tpl->getSubTemplate ('default/public/user_sidebar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="main">
	<h2>My evaluate</h2>
	<div class="mycommend">		
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allCommend']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<dl>
				<dt><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></dt>
				<dd><a href="?a=details&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->goodsid;?>
&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></dd>
				<dd><span class="date"><?php echo $_smarty_tpl->tpl_vars['value']->value->date;?>
</span><?php echo $_smarty_tpl->tpl_vars['value']->value->attr;?>
</dd>
				<dd>Evaluate：
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==5) {?><span class="star">★★★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==4) {?><span class="star">★★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==3) {?><span class="star">★★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==2) {?><span class="star">★★</span><?php }?>
						<?php if ($_smarty_tpl->tpl_vars['value']->value->star==1) {?><span class="star">★</span><?php }?>
				</dd>
				<?php if ($_smarty_tpl->tpl_vars['value']->value->re_content) {?>
				<dd><span class="red">Reversion:<?php echo $_smarty_tpl->tpl_vars['value']->value->re_content;?>
</span></dd>
				<?php }?>
			</dl>
			<p class="clear"></p>
		<?php } ?>
		<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>				
	</div>
</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

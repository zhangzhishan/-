<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 12:23:58
         compiled from "F:\www\eesh\view\default\public\compare.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2235655c1e43eabd923-63635104%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e75cce50cfacdd227c1bc6db49d2b9348ea6d679' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\compare.tpl',
      1 => 1438072121,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2235655c1e43eabd923-63635104',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GoodsCompare' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1e43eb51d46_84762225',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1e43eb51d46_84762225')) {function content_55c1e43eb51d46_84762225($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<!-- <link rel="stylesheet" href="view/default/style/compare.css" type="text/css"/> -->
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<title>MyShop</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="shop_main">
	<div id="main">
		<h2>Goods list</h2>
		<div class="pro_list">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['GoodsCompare']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<dl>
				<dt><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a></dt>
				<dd><strong>£ <?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
 Pounds</strong> <del>£ <?php echo $_smarty_tpl->tpl_vars['value']->value->price_market;?>
 Pounds</del></dd>
				<dd class="title"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</dd>
				<dd>Number：<?php echo $_smarty_tpl->tpl_vars['value']->value->sn;?>
</dd>
				<dd> brand ：<?php echo $_smarty_tpl->tpl_vars['value']->value->brand;?>
</dd>
				<dd>Attribute：<?php echo $_smarty_tpl->tpl_vars['value']->value->attr;?>
</dd>
				
				<dd>weight<?php echo $_smarty_tpl->tpl_vars['value']->value->weight;?>
/kg</dd>
				<dd>evaluate：<a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
#commend"><?php echo $_smarty_tpl->tpl_vars['value']->value->count;?>
 persons Evaluate </a> <span class="green">(Sold <?php echo $_smarty_tpl->tpl_vars['value']->value->sale_count;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value->unit;?>
)</span></dd>
				<dd>Amount:<a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">Buy</a> | <a href="#">collect</a> | <a href="#">Compare</a></dd>
				<dd style="text-align:center"><a href="?a=compare&m=deleteCompare&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">delete this Goods </a></dd>			
			</dl>
			<?php } ?>
			<div id="page" class="clear_all"><a style="padding:5px;" href="?a=compare&m=clearAll">Cleat All</a></div>
		</div>	
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

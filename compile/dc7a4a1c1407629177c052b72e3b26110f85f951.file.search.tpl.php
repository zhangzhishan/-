<?php /* Smarty version Smarty-3.1.17, created on 2015-08-05 12:16:23
         compiled from "F:\www\eesh\view\default\public\search.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2361955c1e27726bb71-00428716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dc7a4a1c1407629177c052b72e3b26110f85f951' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\search.tpl',
      1 => 1438009143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2361955c1e27726bb71-00428716',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'listGoods' => 0,
    'value' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1e27734bd15_45038950',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1e27734bd15_45038950')) {function content_55c1e27734bd15_45038950($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/list.js"></script>

<title>MyShop</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	Now:<a href="./">Home</a> 
	&gt; Search list
</div>
<div id="shop_main">
	<div id="main">
		<h2>Search list</h2>
		<div class="pro_list">
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['listGoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<dl>
				<dt><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a></dt>
				<dd class="price"><strong>£ <?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
 Pounds</strong> <del>£ <?php echo $_smarty_tpl->tpl_vars['value']->value->price_market;?>
 Pounds</del></dd>
				<dd class="title"><a href="#"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></dd>
				<dd class="commend"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
#commend"><?php echo $_smarty_tpl->tpl_vars['value']->value->count;?>
 persons Evaluate </a> <span class="green">(Sold <?php echo $_smarty_tpl->tpl_vars['value']->value->sale_count;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value->unit;?>
)</span></dd>
				<dd class="buy"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">Buy</a> | <a href="?a=user&m=addCollect&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" target="blank">collect</a> | <a href="?a=compare&m=setCompare&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="javascript:return checkCompare('<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
')" target="blank">Compare</a></dd>			
			</dl>
			<?php } ?>
			<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
		</div>	
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html><?php }} ?>

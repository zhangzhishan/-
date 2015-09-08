<?php /* Smarty version Smarty-3.1.17, created on 2015-08-06 02:33:59
         compiled from "F:\www\eesh\view\default\public\details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:156955c1d41a976c67-92512047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '883a642e6a20f040cb5868a68a4d294466856123' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\details.tpl',
      1 => 1438820466,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '156955c1d41a976c67-92512047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55c1d41ac27618_36306146',
  'variables' => 
  array (
    'oneFrontNav' => 0,
    'key' => 0,
    'value' => 0,
    'oneGoods' => 0,
    'attrType' => 0,
    'domain' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55c1d41ac27618_36306146')) {function content_55c1d41ac27618_36306146($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/details.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/list.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script type="text/javascript" src="view/default/js/details.js"></script>
<script type="text/javascript" src="view/default/js/channel.js"></script>
<title>MyShop</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div id="sait">
	Now:<a href="./">Home</a> <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->sait; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	&gt;<a href="?a=list&navid=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
	<?php } ?>
	&gt;<span><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->name;?>
</span>
	
</div>
<div id="shop_main">
	<div id="main">
		<form method="post" name="buy" action="?a=cart&m=addProduct">
		<input type="hidden" id="attr" attr_type="<?php echo $_smarty_tpl->tpl_vars['attrType']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->attr;?>
"/>
		<input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->id;?>
"/>
		<input type="hidden" name="nav" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->nav;?>
"/>
		<input type="hidden" name="price_sale" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->price_sale;?>
"/>
		<input type="hidden" name="price_market" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->price_market;?>
"/>
		<input type="hidden" name="sn" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->sn;?>
"/>
		<input type="hidden" name="name" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->name;?>
"/>
		<input type="hidden" name="thumb_small" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->thumb_small;?>
"/>
		<input type="hidden" name="weight" value="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->weight;?>
"/>
		<h2><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->name;?>
</h2>
		<dl class="pic">
			<dt id="midImg"><img src="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->thumb;?>
"/><div id="mask"></div></dt>
			<script>var thumbnail = '<?php echo $_smarty_tpl->tpl_vars['domain']->value;?>
<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->thumb;?>
';</script>
			
			
			
		</dl>	
		<dl class="text">
			<dt id="zoomLarge"><img src="<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->thumb;?>
"/></dt>
		   <dd>Price:<span class="sale">£ <?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->price_sale;?>
</span> <span class="market">£ <?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->price_market;?>
</span></dd>
		   <dd>Goods sn: <?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->sn;?>
</dd>
		   <dd>Stock：<span class="sale_num"><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->inventory;?>
 </span><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->unit;?>
</dd>
		   <dd>Weight:<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->weight;?>
/kg</dd>
		   <dd>Number:<input type="text" name="num" value="1" class="num"/></dd>
		   <dd class="buy_button">
				<input class="submit" type="submit" value=" Buy now!" name="send">
				<a target="_blank" href="?a=user&m=addCollect&id=<?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->id;?>
">
					<!-- <img border="0" title="collect" alt="collect" src="view/default/images/collect.gif"> -->
					 Collect
				</a>
			</dd>		
		</dl>
		</form>
		<div class="content">
			<a name="commend"></a>
			<ul class="channel">
				<li class="selected">Goods details</li>
		
			</ul>
			<!--Goods details-->
			<div class="c" style="display:block"><?php echo $_smarty_tpl->tpl_vars['oneGoods']->value[0]->content;?>
</div>

		</div>
	</div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>
</html>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.17, created on 2015-08-06 09:16:06
         compiled from "F:\www\eesh\view\default\public\list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2882755bc1c41b6e681-75081101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4ebd50126da49260e178112caee5039973fac0e7' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\list.tpl',
      1 => 1438844886,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2882755bc1c41b6e681-75081101',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc1c41cde757_74719925',
  'variables' => 
  array (
    'oneFrontNav' => 0,
    'key' => 0,
    'value' => 0,
    'frontAttr' => 0,
    'url' => 0,
    'v' => 0,
    'k' => 0,
    'frontPrice' => 0,
    'priceUrl' => 0,
    'listGoods' => 0,
    'page' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc1c41cde757_74719925')) {function content_55bc1c41cde757_74719925($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
	Now:<a href="./">Home</a> <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['oneFrontNav']->value[0]->sait; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
	&gt; <a href="?a=list&navid=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a>
	<?php } ?>
</div>
<div id="shop_main">
	<div id="main">
		<h2>List</h2>
		<div class="filter">

			<!--Attribute choose-->
				<?php if ($_smarty_tpl->tpl_vars['frontAttr']->value) {?>
				<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontAttr']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
					<p><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
：<?php if ($_smarty_tpl->tpl_vars['value']->value->flag) {?><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value->all;?>
">All</a><?php } else { ?><span>All</span><?php }?>			
					<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['v']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['value']->value->attr; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
?>
						<?php if ($_GET['attr']==$_smarty_tpl->tpl_vars['v']->value) {?>
								<span><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</span>
							<?php } else { ?>						
							<a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
&attr=<?php echo $_smarty_tpl->tpl_vars['v']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['k']->value;?>
</a>
						<?php }?>
					<?php } ?></P>
				<?php } ?>
				
				<?php }?>
			<!--Attribute choose-->
			<?php if ($_smarty_tpl->tpl_vars['frontPrice']->value->price) {?>
				<p>Price:<?php if ($_GET['price']) {?><a href="<?php echo $_smarty_tpl->tpl_vars['priceUrl']->value;?>
">All</a><?php } else { ?><span>All</span><?php }?>
					<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['frontPrice']->value->price; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
						<?php if ($_GET['price']==$_smarty_tpl->tpl_vars['key']->value) {?>
							<span><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</span>
						<?php } else { ?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['priceUrl']->value;?>
&price=<?php echo $_smarty_tpl->tpl_vars['key']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value;?>
</a> 
						<?php }?>
						
					<?php } ?>
				</p>
			<?php }?>
		</div>
		<h2>Goods list</h2>
		<div class="pro_list">
		<!-- <?php echo var_dump($_smarty_tpl->tpl_vars['listGoods']->value);?>
 -->
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
 </strong> <del>£ <?php echo $_smarty_tpl->tpl_vars['value']->value->price_market;?>
 </del></dd>
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
" target="blank">collect</a> </dd>			
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

<?php /* Smarty version Smarty-3.1.17, created on 2015-08-01 08:19:03
         compiled from "F:\www\eesh\view\default\public\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2036455bc107746efc6-56803714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2f01997ce694ae1ccf171fd86a4f9b0255f14a07' => 
    array (
      0 => 'F:\\www\\eesh\\view\\default\\public\\index.tpl',
      1 => 1438071875,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2036455bc107746efc6-56803714',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rotator' => 0,
    'value' => 0,
    'hotSale' => 0,
    'key' => 0,
    'promoteGoods' => 0,
    'page' => 0,
    'recommendGoods' => 0,
    'allBrand' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.17',
  'unifunc' => 'content_55bc107860abd4_47972034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55bc107860abd4_47972034')) {function content_55bc107860abd4_47972034($_smarty_tpl) {?><!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<link rel="stylesheet" href="view/default/style/basic.css" type="text/css"/>
<link rel="stylesheet" href="view/default/style/index.css" type="text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="view/default/images/icon.ico"/>
<script type="text/javascript" src="view/default/js/jquery.js"></script>
<script src="view/default/js/slide.js"></script>
<script type="text/javascript" src="view/default/js/index.js"></script>
<title>MyShop</title>
</head>
<body>
<?php echo $_smarty_tpl->getSubTemplate ('default/public/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

<div class="scroll-box" id="HP_carousel" rel="auto-play">
    <div class="img">
        <div class="slider" id="hp_images">
        <?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['rotator']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
          <a href="<?php echo $_smarty_tpl->tpl_vars['value']->value->link;?>
"><img title="<?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
" src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb;?>
" /></a>
        <?php } ?>
<!--             <a href="#"><img src="view/default/images/four1.jpg" /></a>
            <a href="#"><img src="view/default/images/two1.jpg" /></a>
            <a href="#"><img src="view/default/images/three1.jpg" /></a>
            <a href="#"><img src="view/default/images/one1.jpg" /></a> -->
        </div>
        <div class="paging pattern"></div>
        <div class="paging subpattern"></div>
    </div>
</div>
<div id="sale_num">
	<h2>Sold range</h2>
	<p class="short_line"></p>
	<div class="box">
		<ul>
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['hotSale']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<?php if ($_smarty_tpl->tpl_vars['key']->value<5) {?>
			<li>
				<a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a>
				<div class="bg_hover">
					<p class="price">£ <?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
 Pounds</p>
					<p class="see"><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">More</a></p>
					<p class="title"><a target="_blank" href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></p>
				</div>
			</li>
		<?php }?>
		<?php } ?>
		</ul>
	</div>
</div>
<div id="main">
	<h2>Big Sale</h2>
	<p class="short_line"></p>
	<div class="pro_list">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['promoteGoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
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
			<dd class="buy">
			<a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">Buy</a> | 
			<a href="?a=user&m=addCollect&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" target="blank">collect</a> | 
			<span class="now_buy"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">Buy now</a></span>
			</dd>			
		</dl>
		<?php } ?>
		<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
	</div>
	<h2>Recommend</h2>
	<p class="short_line"></p>
	<div class="pro_list_two">
		<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['recommendGoods']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
		<dl>
			<dt><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['value']->value->thumb_small;?>
"/></a></dt>
			<dd class="title"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></dd>
			<div class="covers">
				<p class="price"><strong>£ <?php echo $_smarty_tpl->tpl_vars['value']->value->price_sale;?>
 Pounds</strong> <del>£ <?php echo $_smarty_tpl->tpl_vars['value']->value->price_market;?>
 Pounds</del></p>
				<p class="now_buy"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">Buy now!</a></p>
				<p class="title"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</a></p>
				<p class="commend"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
#commend"><?php echo $_smarty_tpl->tpl_vars['value']->value->count;?>
 persons Evaluate </a> <span class="green">(Sold <?php echo $_smarty_tpl->tpl_vars['value']->value->sale_count;?>
<?php echo $_smarty_tpl->tpl_vars['value']->value->unit;?>
)</span></p>
				<p class="buy"><a href="?a=details&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
">Buy now!</a> | <a href="?a=user&m=addCollect&id=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" target="blank">Collect</a> | <a href="?a=compare&m=setCompare&navid=<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
&goodsid=<?php echo $_smarty_tpl->tpl_vars['value']->value->id;?>
" onclick="javascript:return checkCompare('<?php echo $_smarty_tpl->tpl_vars['value']->value->nav;?>
')" target="blank">Compare</a></p>
			</div>			
		</dl>
		<?php } ?>
		<div id="page"><?php echo $_smarty_tpl->tpl_vars['page']->value;?>
</div>
	</div>
	<h2> brand </h2>
	<p class="short_line"></p>
	<div class="brand">
		<ul>
			<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_smarty_tpl->tpl_vars['key'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['allBrand']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value) {
$_smarty_tpl->tpl_vars['value']->_loop = true;
 $_smarty_tpl->tpl_vars['key']->value = $_smarty_tpl->tpl_vars['value']->key;
?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['value']->value->url;?>
" target="_blank"><span><?php echo $_smarty_tpl->tpl_vars['value']->value->name;?>
</span><!-- <img src="view/default/images/huahua_logo2.png" alt="logo"> --></a></li>
			<?php } ?>
		</ul>
	</div>	
</div>
<p class="clear"></p>

<?php echo $_smarty_tpl->getSubTemplate ('default/public/footer.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

</body>

</html><?php }} ?>

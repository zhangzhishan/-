<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
{include file='default/public/header.tpl'}
<div id="sait">
	Now:<a href="./">Home</a> {foreach from=$oneFrontNav[0]->sait key=key item=value}
	&gt;<a href="?a=list&navid={$key}">{$value}</a>
	{/foreach}
	&gt;<span>{$oneGoods[0]->name}</span>
	
</div>
<div id="shop_main">
	<div id="main">
		<form method="post" name="buy" action="?a=cart&m=addProduct">
		<input type="hidden" id="attr" attr_type="{$attrType}" value="{$oneGoods[0]->attr}"/>
		<input type="hidden" name="id" value="{$oneGoods[0]->id}"/>
		<input type="hidden" name="nav" value="{$oneGoods[0]->nav}"/>
		<input type="hidden" name="price_sale" value="{$oneGoods[0]->price_sale}"/>
		<input type="hidden" name="price_market" value="{$oneGoods[0]->price_market}"/>
		<input type="hidden" name="sn" value="{$oneGoods[0]->sn}"/>
		<input type="hidden" name="name" value="{$oneGoods[0]->name}"/>
		<input type="hidden" name="thumb_small" value="{$oneGoods[0]->thumb_small}"/>
		<input type="hidden" name="weight" value="{$oneGoods[0]->weight}"/>
		<h2>{$oneGoods[0]->name}</h2>
		<dl class="pic">
			<dt id="midImg"><img src="{$oneGoods[0]->thumb}"/><div id="mask"></div></dt>
			<script>var thumbnail = '{$domain}{$oneGoods[0]->thumb}';</script>
			{literal}
			
			{/literal}
		</dl>	
		<dl class="text">
			<dt id="zoomLarge"><img src="{$oneGoods[0]->thumb}"/></dt>
		   <dd>Price:<span class="sale">£ {$oneGoods[0]->price_sale}</span> <span class="market">£ {$oneGoods[0]->price_market}</span></dd>
		   <dd>Goods sn: {$oneGoods[0]->sn}</dd>
		   <dd>Stock：<span class="sale_num">{$oneGoods[0]->inventory} </span>{$oneGoods[0]->unit}</dd>
		   <dd>Weight:{$oneGoods[0]->weight}/kg</dd>
		   <dd>Number:<input type="text" name="num" value="1" class="num"/></dd>
		   <dd class="buy_button">
				<input class="submit" type="submit" value=" Buy now!" name="send">
				<a target="_blank" href="?a=user&m=addCollect&id={$oneGoods[0]->id}">
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
			<div class="c" style="display:block">{$oneGoods[0]->content}</div>

		</div>
	</div>
</div>
{include file='default/public/footer.tpl'}
</body>
</html>

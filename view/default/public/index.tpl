<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
{include file='default/public/header.tpl'}
<div class="scroll-box" id="HP_carousel" rel="auto-play">
    <div class="img">
        <div class="slider" id="hp_images">
        {foreach from=$rotator key=key item=value}
          <a href="{$value->link}"><img title="{$value->name}" src="{$value->thumb}" /></a>
        {/foreach}
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
		{foreach from=$hotSale key=key item=value}
		{if  $key<5}
			<li>
				<a target="_blank" href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a>
				<div class="bg_hover">
					<p class="price">£ {$value->price_sale} Pounds</p>
					<p class="see"><a target="_blank" href="?a=details&navid={$value->nav}&goodsid={$value->id}">More</a></p>
					<p class="title"><a target="_blank" href="?a=details&navid={$value->nav}&goodsid={$value->id}">{$value->name}</a></p>
				</div>
			</li>
		{/if}
		{/foreach}
		</ul>
	</div>
</div>
<div id="main">
	<h2>Big Sale</h2>
	<p class="short_line"></p>
	<div class="pro_list">
		{foreach from=$promoteGoods key=key item=value}
		<dl>
			<dt><a href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a></dt>
			<dd class="price"><strong>£ {$value->price_sale} Pounds</strong> <del>£ {$value->price_market} Pounds</del></dd>
			<dd class="title"><a href="#">{$value->name}</a></dd>
			<dd class="commend"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}#commend">{$value->count} persons Evaluate </a> <span class="green">(Sold {$value->sale_count}{$value->unit})</span></dd>
			<dd class="buy">
			<a href="?a=details&navid={$value->nav}&goodsid={$value->id}">Buy</a> | 
			<a href="?a=user&m=addCollect&id={$value->id}" target="blank">collect</a> | 
			<span class="now_buy"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">Buy now</a></span>
			</dd>			
		</dl>
		{/foreach}
		<div id="page">{$page}</div>
	</div>
	<h2>Recommend</h2>
	<p class="short_line"></p>
	<div class="pro_list_two">
		{foreach from=$recommendGoods key=key item=value}
		<dl>
			<dt><a href="?a=details&navid={$value->nav}&goodsid={$value->id}"><img src="{$value->thumb_small}"/></a></dt>
			<dd class="title"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">{$value->name}</a></dd>
			<div class="covers">
				<p class="price"><strong>£ {$value->price_sale} Pounds</strong> <del>£ {$value->price_market} Pounds</del></p>
				<p class="now_buy"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">Buy now!</a></p>
				<p class="title"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">{$value->name}</a></p>
				<p class="commend"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}#commend">{$value->count} persons Evaluate </a> <span class="green">(Sold {$value->sale_count}{$value->unit})</span></p>
				<p class="buy"><a href="?a=details&navid={$value->nav}&goodsid={$value->id}">Buy now!</a> | <a href="?a=user&m=addCollect&id={$value->id}" target="blank">Collect</a> | <a href="?a=compare&m=setCompare&navid={$value->nav}&goodsid={$value->id}" onclick="javascript:return checkCompare('{$value->nav}')" target="blank">Compare</a></p>
			</div>			
		</dl>
		{/foreach}
		<div id="page">{$page}</div>
	</div>
	<h2> brand </h2>
	<p class="short_line"></p>
	<div class="brand">
		<ul>
			{foreach from=$allBrand key=key item=value}
			<li><a href="{$value->url}" target="_blank"><span>{$value->name}</span><!-- <img src="view/default/images/huahua_logo2.png" alt="logo"> --></a></li>
			{/foreach}
		</ul>
	</div>	
</div>
<p class="clear"></p>

{include file='default/public/footer.tpl'}
</body>

</html>
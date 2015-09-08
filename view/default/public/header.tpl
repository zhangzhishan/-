<div id="header">
	<span class="tel"><em class="tel_ico"></em>1234567890</span>
	<h1><a href="./"><img src="view/default/images/huahua_logo2.png" alt="LOGO"></a></h1>
	{if $smarty.cookies.user}
	<p>
		Hello,{$smarty.cookies.user}，<a href="?a=user">Myself</a> | <a href="?a=cart"><i class="cat"></i>Cart(<strong>{$cartGoodsCount.num}</strong>)</a> | <a href="?a=user&m=loginOut">Login out</a>
	</p>
	{else}
	<p>
		<a href="?a=cart"><i class="cat"></i>Cart(<strong>0</strong>)</a>
		<a href="?a=user&m=login">login</a> | 
		<a href="?a=user&m=reg">Register</a>
	</p>
	{/if}
	<div class="header_search">
		<form method="post" name="form_search" action="?a=list&m=searchGoods">
			<input type="text" name="content" placeholder=" Search"/>
			<input type="submit" name="search" value="" />
		</form>
	</div>
</div>
<div id="nav">
	<ul>
		{if isset($smarty.get.navid)}
			<li><a href="./">Home</a></li>
		{else}
			<li><a class="selected" href="./">Home</a></li>
		{/if}
		
		{foreach from=$frontTenNav key=key item=value}
			{if isset($oneFrontNav[0]->id) && $oneFrontNav[0]->id==$value->id}
				<li><a class="selected" href="?a=list&navid={$value->id}" >{$value->name}</a></li>
			{else}
				<li><a href="?a=list&navid={$value->id}" >{$value->name}</a></li>
			{/if}
		{/foreach}
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
		
		{if $smarty.cookies.user}
		<p>
			Hello,{$smarty.cookies.user}，<a href="?a=user">Myself</a> | <a href="?a=cart"><i class="cat"></i> Cart(<strong>{$cartGoodsCount.num}</strong>)</a> | <a href="?a=user&m=loginOut">Login out</a>
		</p>
		{else}
		<p>
			<a href="?a=cart"><i class="cat"></i> Cart(<strong>0</strong>)</a>
			<a href="?a=user&m=login">login</a> | 
			<a href="?a=user&m=reg">Register</a>
		</p>
		{/if}

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

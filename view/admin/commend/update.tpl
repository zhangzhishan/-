<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2><a href="?a=commend">backEvaluate list</a>Goods  -- EditEvaluate</h2>
<form method="post" action="?a=commend&m=runUpdate&id={$oneCommend->id}" name="update" id="updateForm">
	<input type="hidden" name="url" value="{$prev_url}"/>
	<dl class="form">
		<dd>Goods Name：<a href="?a=details&navid={$oneCommend->nav}&goodsid={$oneCommend->goodsid}" target="_blank">{$oneCommend->name}</a></dd>
		<dd><a href="?a=details&navid={$oneCommend->nav}&goodsid={$oneCommend->goodsid}" target="_blank"><img src="{$oneCommend->thumb_small}"/></a></dd>
		<dd>BuyAttribute：{$oneCommend->attr}</dd>
		<dd>EvaluateUser ：{$oneCommend->user}</dd>
		<dd >Evaluate star：<span style="color:pink">{html_radios name="star" options=$star checked=$oneCommend->star}</span></dd>
		<dd>Evaluate content：{$oneCommend->content}</dd>
		<dd>
			<label for="content">reply content：</label>
			<textarea class="text" style="width:350px;height:80px;background:#fff;" name="re_content">{$oneCommend->re_content}</textarea>
			<span>（*smaller than 200）</span>
		</dd>
		<dd>Whether  on show：
		{if $oneCommend->flag==1}
		<label><input type="radio" name="flag" value="1" checked="checked"/>Yes</label>
		<label><input type="radio" name="flag" value="0"/>No</label>
		{else}
		<label><input type="radio" name="flag" value="1"/>Yes</label>
		<label><input type="radio" name="flag" value="0"  checked="checked"/>No</label>
		{/if}
		
		</dd>
		<dd><input type="submit" name="send" value="reply及Editevaluate"/></dd>
	</dl>
</form>

</body>
</html>
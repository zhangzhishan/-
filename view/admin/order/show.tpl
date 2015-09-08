<!DOCTYPE html PUBLIC "- XHTML 1.0 Transitional" "http:.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Myshop Admin</title>
<link rel="stylesheet" type="text/css" href='view/admin/style/basic.css'/>
</head>
<body>
<h2>Order -- Order list</h2>
<div id="list">
	<table class="public">
		<tr><th>Number</th><th>Order number</th><th>Consumer</th><th>Order time</th><th>Total</th><th>Order status</th><th>Operation</th></tr>
		{if $allOrder}
			{foreach from=$allOrder key=key item=value}
			<tr>
				<td>{$key+1}</td>
				<td><a href="?a=user&m=order_details&id={$value->id}" target="_blank">{$value->ordernum}</a></td>
				<td>{$value->user}</td>
				<td>{$value->date}</td><td>{$value->price}</td>
				<td>
					{if  $value->order_state=='Cancelled'}
						<span class="red">Cancelled</span>
					{else}
						{if $value->order_delivery=='Delivered'}
							{if $value->refund==1}
								<span class="red">On refunding</span>
							{elseif $value->refund==2}
								<span class="green">Refunding success</span>
							{else}
								<span class="green">Delivered，wait to confirm</span>
							{/if}
						{else}
							{if $value->order_delivery=='deserved'}
								{if $value->refund==1}
									<span class="red">On refunding</span>
								{elseif $value->refund==2}
									<span class="green">Refunding success</span>
								{else}
									<span class="green">deserved，wait to deliver</span>
								{/if}
							{else}
								{if $value->order_pay=='paid'}
									{if $value->refund==1}
										<span class="red">On refunding</span>
									{elseif $value->refund==2}
										<span class="green">Refunding success</span>
									{else}
										<span class="green">paid，wait to deserve</span>
									{/if}
								{else}
									{if $value->order_state=='confirmed'}
										<span class="green">confirmed，wait to pay</span>
									{else}
										<span style="color:#666">unconfirmed</span>
									{/if}
								{/if}
							{/if}					
						{/if}
					{/if}
					</td>
				<td>
					<a href="?a=order&m=runUpdate&id={$value->id}"><img src="view/admin/images/edit.gif" alt="edit" title="edit" /></a>
					<a href="?a=order&m=runDelete&id={$value->id}" onclick="return confirm('Are you sure to delete?') ? true : false"><img src="view/admin/images/drop.gif" alt="delete" title="delete" /></a>
				</td></tr>
			{/foreach}
		{else}
			<tr><td colspan="6">No data!</td></tr>
		{/if}
	</table>
	<div id="page">{$page}<input type="button" style="cursor:pointer" onclick="javascript:location.href='?a=order&m=clear'" value="delete in 24 hoursunconfirmed Order"/></div>	
</div>

</body>
</html>
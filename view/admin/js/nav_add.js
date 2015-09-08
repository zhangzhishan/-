$(function(){
	$('#navForm').validate({
		submitHandler:function(form){
			form.submit();
			
		},
		highlight:function(element,errorclass){
			$(element).css('border','1px solid red');
			$(element).nextAll('span').html('').removeClass('succ');
		},
		unhighlight:function(element,errorclass){
			$(element).css('border','1px solid #333');
			$(element).nextAll('span').html('&nbsp;').addClass('succ');
		},
		rules:{
			name:{
				required:true,
				rangelength:[2,40],
				remote:{
					url:'?a=nav&m=isExist',
					type:'post',
				},
			},
			info:{
				maxlength:200
			}
		},
		messages:{
			name:{
				required:'  nav name cannot be empty!',
				rangelength:jQuery.format('  nav name should be between {0} and {1}'),
				remote:' Nav name is used',
				
			},
			info:{
				maxlength:' The max length should be smaller than 200'
			}
		}
	})
})

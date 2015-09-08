$(function(){
	$('#loginForm').validate({
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
			user:{
				required:true,
				rangelength:[2,20],
				remote:{
					url:'?a=user&m=ajaxLogin',
					type:'post',
				},
			},
			pwd:{
				required:true,
				minlength:6,				
			}
			
			
		},
		messages:{
			user:{
				required:' Username cannot be empty',
				rangelength:jQuery.format(' Username should be between {0} and {1}'),
				remote:' Username does not exist!',				
			},
			pwd:{
				required:' Password cannot be empty!',
				minlength:' Password should larger than 6 carecaters!',
			}		
		}
	})
})

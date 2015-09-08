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
			$(element).css('border','1px solid #fff');
			$(element).nextAll('span').html('&nbsp;').addClass('succ');
		},
		rules:{
			user:{
				required:true,
				rangelength:[2,20],
				remote:{
					url:'?a=admin&m=ajaxLogin',
					type:'post',
				},
			},
			pwd:{
				required:true,
				minlength:6,
				remote:{
					url:'?a=admin&m=ajaxPwd',
					data:{
						user:function(){
							return $('#user').val();
						}
					},
					type:'post',
				}
			}
			}
		},
		messages:{
			user:{
				required:' (*Admin Username cannot be empty)',
				rangelength:jQuery.format(' (*Username should be between {0} and {1})'),
				remote:' (*Username does not exist!*)',
				
			},
			pwd:{
				required:' (*Password cannot be empty!)',
				minlength:jQuery.format(' (*Password must be larger than {0})'),
				remote:' (*Password error)',
			}
		}
	})
})

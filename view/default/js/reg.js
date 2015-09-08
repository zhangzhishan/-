$(function(){

	$('#regForm').validate({
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
					url:'?a=user&m=isExist',
					type:'post',
				},
			},
			pwd:{
				required:true,
				minlength:6,				
			},
			notpwd:{
				equalTo:'#pwd',
			},
			email:{
				required:true,
				email:true,
			},
			question:{
				required:true,
			},
			answer:{
				required:true,
			}.
			
			
		},
		messages:{
			user:{
				required:' Username cannot be empty',
				rangelength:jQuery.format(' The length of username should be between{0} and {1}'),
				remote:' The username is used already',				
			},
			email:{
				required:' Email cannot be empty',
				email:' The format of email is not correct',
			},
			
			pwd:{
				required:' Password cannot be empty',
				minlength:' The length of password should be longer than 6',
			},
			notpwd:{
				equalTo:' The two password should be the same',
			},

			question:{
				required:' Please choose a safety question',
			},
			answer:{
				required:' The answer cannot be empty',
			},

			
			
		}
	})
})
function centerWindow(width,height){
  	var left = (screen.width - width) / 2;
	var top = (screen.height - height) / 2 - 50;
    window.open('?a=call&m=showUptpl&type=face','Upload','width='+width+',height='+height+',left='+left+',top='+top)
}
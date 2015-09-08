$(function(){
	$('#addForm').validate({
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
				rangelength:[2,20],
				remote:{
					url:'?a=delivery&m=isExist',
					type:'post',
				},
			},
			url:{
				required:true,
				url:true,
				maxlength:40,
			},
			price_in:{
				required:true,
				number:true,
			},
			price_out:{
				required:true,
				number:true,
			},
			price_add:{
				number:true,
			},
			info:{
				maxlength:200,
			},
			
		},
		messages:{
			name:{
				required:' The company name cannot be empty!',
				rangelength:jQuery.format(' The company should be between{0} and {1}'),
				remote:' The company name is used!',
				
			},
			url:{
				required:' addresscannot be empty!',
				url:' Please input correct address',
				maxlength:jQuery.format(' address should be smaller than {0}')
			},
			info:{
				maxlength:jQuery.format(' company  informationsmaller than {0}')
			},
			price_in:{
				required:' The base price in towns cannot be empty!',
				number:' The base price should be number!',
			},
			price_out:{
				required:' The base price out of townscannot be empty!',
				number:' The base price should be number!',
			},
			price_add:{
				number:' The base price should be number!',
			},
			
		}
	})
})

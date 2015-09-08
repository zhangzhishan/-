$(function(){
	$('#addForm').validate({
		submitHandler:function(form){
			// alert('2');
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
					url:'?a=brand&m=isExist',
					type:'post',
				},
			},
			type:{
				min:1,
				
			},
			url:{
				required:true,
				url:true,
				maxlength:40,
			},
			info:{
				maxlength:200,
			},
			
		},
		messages:{
			name:{
				required:'  brand cannot be empty!',
				rangelength:jQuery.format('  brand should be between {0} and {1}'),
				remote:' This brand is used',
				
			},
			type:{
				min:' Type cannot be empty!',
			},
			url:{
				required:' addresscannot be empty!',
				url:' Please input correct address',
				maxlength:jQuery.format(' address should be smaller than {0}')
			},
			info:{
				maxlength:jQuery.format('  brand  informationsmaller than {0}')
			},
			
		}
	})
})

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
				rangelength:[2,40],
				remote:{
					url:'?a=attr&m=isExist',
					type:'post',
				}
			},
		},
		messages:{
			name:{
				required:' Attribute name cannot be empty!',
				rangelength:jQuery.format('  brand should be between {0} and {1}'),
				remote:' Attribute name is used',				
			},
		}
	})
	$('#updateForm').validate({
		submitHandler:function(form){
			$(form).submit();			
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
			},
		},
		messages:{
			name:{
				required:' Attribute name cannot be empty!',
				rangelength:jQuery.format('  brand should be between {0} and {1}'),			
			},
		}
	})
})

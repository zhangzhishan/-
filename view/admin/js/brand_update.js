$(function(){
	$('#updateForm').validate({
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
			type:{
				min:1,
			},
			url:{
				required:true,
				maxlength:40,
				url:true,
			},
			info:{
				maxlength:200,
			},
			
		},
		messages:{
			url:{
				required:' addresscannot be empty!',
				maxlength:jQuery.format(' address should be smaller than {0}'),
				url:' Please input correct address',
			},
			type:{
				min:' Type cannot be empty!',
			},
			info:{
				maxlength:jQuery.format('  brand  informationsmaller than {0}')
			},
			
		}
	})
})

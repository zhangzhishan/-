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
			pwd:{
				required:true,
				minlength:6,
			},
			notpwd:{
				equalTo:'#pwd',
				required:true,
			},
			level:{
				range:[1,4],
			}
		},
		messages:{
			pwd:{
				required:' Password cannot be empty!',
				minlength:jQuery.format(' Password must be larger than {0}')
			},
			notpwd:{
				equalTo:' Two password should be the same',
				required:' Confirm password cannot be empty!',
			},
			level:{
				range:' Level cannot be empty'
			}
		}
	})
})

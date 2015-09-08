
function checkCompare(id){
	if(!checkNav(id)){
		if(confirm('Cannot compare the different categories goods\Do you want to delete the goods before?')){
			$.ajax({
				url:'?a=compare&m=ajaxClearAll',
				method:'get',
				success:function(test){
					if(test='true'){
						alert('Cleat Success');
					}else{
						alert('Error!');
					}
				}
			})
			
		}
		return false;
	}
}

function checkNav(id){
	var flag=true;
	if (document.cookie.indexOf('compare')>=0){
		var patten=/compare\[[0-9]{1,2}\]=([0-9]{1,2})/g
		var str=document.cookie
		var r='';
		while(r=patten.exec(str)){
			if(r[1] != id ){
				flag=false;
			}
		}			
	}
	return flag
}


function centerWindow(width,height){
  	var left = (screen.width - width) / 2;
	var top = (screen.height - height) / 2 - 50;
    window.open('?a=call&m=showUptpl&type=ok','Upload','width='+width+',height='+height+',left='+left+',top='+top)
}
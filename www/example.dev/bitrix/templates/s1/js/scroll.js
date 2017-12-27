$(function(){
	window.onscroll = function() {
		var scrollOnTop 	= window.pageYOffset || document.documentElement.scrollTop;
		var headerHeight 	= document.getElementById('mainHeader').offsetHeight;
		var navHeight 		= document.getElementById('topMenu').offsetHeight;
		 
		var top = headerHeight+navHeight;
		
		if(scrollOnTop >= top)
		{
			document.getElementById('mainHeader').classList.add('fixed');
			document.getElementById('topMenu').style.top = headerHeight+'px';
			document.getElementById('topMenu').classList.add('fixed');
			document.getElementById('bodyIndex').style.top = top*2 +'px';
			document.getElementById('footerBx').style.top = top*2 +'px';
		}
		else{
			document.getElementById('mainHeader').classList.remove('fixed');
			document.getElementById('topMenu').classList.remove('fixed');
			document.getElementById('bodyIndex').style.top = '0px';
			document.getElementById('footerBx').style.top = '0px';
		}
	}
	
});
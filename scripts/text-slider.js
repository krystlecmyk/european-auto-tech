// JavaScript Document

$(document).ready( function() {
	var i = 0,
    	tumgenislik = 0,
      sayi = $('#slider .slide').length,
    	genislik = $('#slider .slide').width();
  
	function animasyon(px){
		$('#slider').stop(false, false).animate({
			left: -px
		}, 300);
	}
	 
	 $('#sayfalama a').click(function(){
		var index = $(this).index(),
				pozisyon = index * genislik;
		
    animasyon(pozisyon);
     
     alert("asd");

		if(index == (sayi - 1)){
			i = 0;
		}else{
			i = index + 1;
		}

		return false;
	});
	 
	var zamanlayici = setInterval(function() {
		tumgenislik = i * genislik;

		if(i == (sayi - 1)) i = -1;

		animasyon(tumgenislik);
    i++;
	}, 2000);
  
  $('#featured-slider .prev').on('click', function(){
		if(i == 0){
			i = sayi - 1;
		}else{
			i--;
		}
    
    pozisyon = i * genislik;
    animasyon(pozisyon);
    
    return false
  });
  
  $('#featured-slider .next').on('click', function(){
		if(i == sayi - 1){
			i = 0;
		}else{
			i++;
		}
    
    pozisyon = i * genislik;
    animasyon(pozisyon);
    
    return false
  });
});
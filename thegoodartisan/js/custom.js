/* 
File: custom.js  
Name: thegoodartisan
*/

( function( $ ) {
"use strict";
		
	//for carousel slider	
	let sliderCount = $('#carouselExampleIndicators .carousel-item').length;//how many .carousel-item
	//console.log("sliderCount: ", sliderCount);//total length number 3
	let randSlide = Math.floor(Math.random()*sliderCount);//random  
	//console.log("randSlide: ", randSlide);// 0, 1, 2

	// add class 'active'  						//eq() -> https://api.jquery.com/eq/ 
	$('#carouselExampleIndicators .carousel-item').eq(randSlide).addClass('active');

	//$('#carouselExampleIndicators .carousel-item').first().addClass('active');
	//with random slider
	/* 
	    <li data-target="#carouselExampleIndicators" data-slide-to="0"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
	    <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
	*/	
	//add slider indicator	      
	for (var i=0; i < sliderCount; i++) {
		let carouselIndicator = '<li data-target="#carouselExampleIndicators" data-slide-to="' + i + '"';

			if(i === randSlide) {
				//indicator class="active"
				carouselIndicator += ' class="active"';
				
			}
		
		carouselIndicator += '></li>';
		$('#carouselExampleIndicators ol').append(carouselIndicator);
	  }  	

} )( jQuery );
$(function(){
	console.log("ready");
	
	$(window).scroll(function(){
		var posTop = $(window).scrollTop();
	
		//var posC = $("#c").offset().top;
		var posStart = $(" #formation div.description_aside").offset().top - 500;
		var posEnd = posStart + 300;
		$("#formation div.description_aside").css({
			"opacity": anime_div(posTop, posStart, posEnd, 0, 1)
		})
		
		//============= Premier panneau
		// Limites de l'animation'
		posStart = $(" #apropos").offset().top + 50;
		posEnd = posStart + 200;	
		// Animation!
		$("#apropos .content_special .description_info:nth-child(1)").css({
			"height": anime_div(posTop, posStart, posEnd, 0, 212) + "px",
			"width": anime_div(posTop, posStart, posEnd, 0, 250) + "px",
			"padding": anime_div(posTop, posStart, posEnd, 0, 25) + "px",
			"opacity": anime_div(posTop, posStart, posEnd, 0, 1),
			"border-top-right-radius": anime_div(posTop, posStart, posEnd, 0, 25)  +  "px " + anime_div(posTop, posStart, posEnd, 0, 50)  +  "px",
			"border-bottom-left-radius": anime_div(posTop, posStart, posEnd, 0, 25)  +  "px " + anime_div(posTop, posStart, posEnd, 0, 50)  +  "px",
			"top": anime_div(posTop, posStart, posEnd, 0, 0) + "px",
			"left": anime_div(posTop, posStart, posEnd, 0, 0) +  "px"
		});
		$("#apropos .content_special .description_info:nth-child(1) p, #apropos .content_special .description_info:nth-child(1) h4").css({
			"font-size": anime_div(posTop, posStart, posEnd, 0, 18) + "px"
		});
		
		//============= Deuxieme panneau
		// Limites de l'animation'
		posStart = $(" #apropos").offset().top + 50;
		posEnd = posStart + 200;	
		// Animation!
		$("#apropos .content_special .description_info:nth-child(2)").css({
			"height": anime_div(posTop, posStart, posEnd, 0, 212) + "px",
			"width": anime_div(posTop, posStart, posEnd, 0, 250) + "px",
			"padding": anime_div(posTop, posStart, posEnd, 0, 25) + "px",
			"opacity": anime_div(posTop, posStart, posEnd, 0, 1),
			"border-top-right-radius": anime_div(posTop, posStart, posEnd, 0, 25)  +  "px " + anime_div(posTop, posStart, posEnd, 0, 50)  +  "px",
			"border-bottom-left-radius": anime_div(posTop, posStart, posEnd, 0, 25)  +  "px " + anime_div(posTop, posStart, posEnd, 0, 50)  +  "px",
			"top": anime_div(posTop, posStart, posEnd, 0, 50) + "px",
			"left": anime_div(posTop, posStart, posEnd, 0, 350) +  "px"
		});
		$("#apropos .content_special .description_info:nth-child(2) p, #apropos .content_special .description_info:nth-child(2) h4").css({
			"font-size": anime_div(posTop, posStart, posEnd, 0, 18) + "px"
		});
		
		//============= Troisieme panneau
		// Limites de l'animation'
		posStart = $(" #apropos").offset().top + 50;
		posEnd = posStart + 200;	
		// Animation!
		$("#apropos .content_special .description_info:nth-child(3)").css({
			"height": anime_div(posTop, posStart, posEnd, 0, 212) + "px",
			"width": anime_div(posTop, posStart, posEnd, 0, 250) + "px",
			"padding": anime_div(posTop, posStart, posEnd, 0, 25) + "px",
			"opacity": anime_div(posTop, posStart, posEnd, 0, 1),
			"border-top-right-radius": anime_div(posTop, posStart, posEnd, 0, 25)  +  "px " + anime_div(posTop, posStart, posEnd, 0, 50)  +  "px",
			"border-bottom-left-radius": anime_div(posTop, posStart, posEnd, 0, 25)  +  "px " + anime_div(posTop, posStart, posEnd, 0, 50)  +  "px",
			"top": anime_div(posTop, posStart, posEnd, 0, 100) + "px",
			"left": anime_div(posTop, posStart, posEnd, 0, 700) +  "px"
		});
		$("#apropos .content_special .description_info:nth-child(3) p, #apropos .content_special .description_info:nth-child(3) h4").css({
			"font-size": anime_div(posTop, posStart, posEnd, 0, 18) + "px"
		});
		
		//============= Guillemets des panneau
		// Limites de l'animation'
		posStart = posEnd;
		posEnd = posEnd + 2;	
		// Animation!
		$("#apropos .content_special .description_info .wrapper_di .container_di::before").css({
			"opacity": anime_div(posTop, posStart, posEnd, 0, 1)
		});
		$("#apropos .content_special .description_info .wrapper_di .container_di::after").css({
			"opacity": anime_div(posTop, posStart, posEnd, 0, 1)
		});
	});
})


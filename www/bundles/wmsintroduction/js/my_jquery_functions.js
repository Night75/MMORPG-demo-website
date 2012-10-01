
// ========================================= ========================================= =========================================
//*************** --------------  ___________  EFFET HIGHLIGHT POUR HOVER
// ========================================= ========================================= =========================================

/*
 * Exemple d'utilisation:
* 	$('#menu_display ul li a').mousemove(function(e) {
					highlight(e, this,"rgba(255,255,255,1)", "rgba(227,227,226,1)" , 150);		
	}).mouseleave(function() {
		$(this).css({ background: originalBG });
	});
 *
 * @param eventObject event. Evenement
 * @param object item. Objet du DOM concerne
 * @param string colorBackground. Couleur de fond 
 * @param integer colorLight. Couleur du point lumineux
 * @param integer diameter. Diametre du point lumineux
 * @param integer factor. Diametre de l''ampleur de la lumiere
 */
function highlight(event, item, colorBackground, colorLight, diameter, diameterLight)
{
	//var x  = event.pageX - item.offsetLeft;  //Ne marche pas sur le menu top 
	var x = event.pageX - $(item).offset().left
	//var y  = event.pageY - item.offsetTop  //Ne marche pas sur le menu top
	var y  = event.pageY - $(item).offset().top;
	var xy = x + " " + y;

	var bgWebKit = "-webkit-gradient(radial, " + xy + ", " + diameter +", " + xy + ", "+ diameterLight + ", from(" +  colorLight +"), to( " + colorBackground + ")) ";
	var bgMoz    = "-moz-radial-gradient(" + x + "px " + y + "px 45deg, circle, " + colorLight +  diameter +"px, " + colorBackground + " " + diameterLight + "px)";
	var bgNotCompatible = colorLight;

	$(item).css({ background: bgNotCompatible }).css({ background: bgWebKit }).css({ background: bgMoz });
}

// ========================================= ========================================= =========================================
//*************** --------------  ___________  ANIMATIONS AU SCROLLING
// ========================================= ========================================= =========================================

/**
 * Calcule et renvoie un attribut d'une valeur de depart jusqu'a une valeur d'arrivee en fonction de la position du scroll,
 * d'un offset de depart et d'arrivee. 
 * Exemple d'utilisation:
 * var posTop = $(window).scrollTop();
    var posStart = $(" #formation div.description_aside").offset().top - 500;
		var posEnd = posStart + 300;
		$("#formation div.description_aside").css({
			"opacity": anime_div(posTop, posStart, posEnd, 0, 1)
		})
 * 
 * @param integer offset. offset = $(window).scrollTop() a passer en parametre (la fonction anime_div est prevue d'etre utilisee plusieurs fois, on economisera du proc)
 * @param integer start. offset haut du declechement de l'anim en px
 * @param integer end. offset bas du declenchement de l'anim en px
 * @param integer posXCenter. Attribut left du centre(en absolu) dans le parent de notre element concerne
 * @param integer posYCenter. Attribut top du centre(en absolu) dans le parent de notre element concerne
 */
function anime_div(offset, start, end, valStart ,valEnd){
	
	// Si on se situe en dehors des limites d'offset de l'animation, rien ne se passe.
	if(offset < start){
		return valStart;
	} else if(offset > end){
		return valEnd;
	}
	
	// Cas ou l'on se situe dans les limites 
	var offsetRelative = (offset - start);
	var coeffDir = (valEnd - valStart)/(end - start)
	var result = valStart + coeffDir*offsetRelative;
	return result;
}

/**
 * Meme chose que pour anim_div mais cette fonction est prevue pour creer une animation de rotation. 
 * Attributs css concernes: "top" et "left".
 * 
 * @param integer start. offset haut du declechement de l'anim en px
 * @param integer end. offset bas du declenchement de l'anim en px
 * @param integer posXCenter. Attribut left du centre(en absolu) dans le parent de notre element concerne
 * @param integer posYCenter. Attribut top du centre(en absolu) dans le parent de notre element concerne
 * @param integer radius. rayon du cercle en px.
 * @param integer angleStart. L'angle de depart de l'animation (en degre)
 * @param integer angleEnd. L'angle d'arrivee de l'animation (en degre)
 */
function anime_divRound(start, end, posXCenter, posYCenter , radius, angleStart, angleEnd)
{
	var offset = $(window).scrollTop();
	var position = new Array();
	
	if(offset < start){
		position["x"] = posXCenter + radius*Math.cos(degToRad(angleStart));
		position["y"] = posYCenter - radius*Math.sin(degToRad(angleStart));
		return position;
	} 
	else if(offset > end){
		position["x"] = posXCenter + radius*Math.cos(degToRad(angleEnd));
		position["y"] = posYCenter - radius*Math.sin(degToRad(angleEnd));
		return position;
	}
	
	// Cas ou l'on se situe dans les limites 
	var offsetRelative = degToRad((offset - start)*(angleEnd - angleStart)/(end - start));
	position["x"] = posXCenter + radius*Math.cos(offsetRelative);
	position["y"] = posYCenter - radius*Math.sin(offsetRelative);
	
	return position;
}


/*
 * Convertit un angle en degres vers sa valeur en radians.
 * 
 * @param integer angle. Angle en degre
 * 
 * @return angle. Angle en radians
 */
function degToRad(angle)
{
	return angle*(Math.PI)/180;
}


// ========================================= ========================================= =========================================
//*************** --------------  ___________ SLIDER A DOUBLE CHAMPS
// ========================================= ========================================= =========================================

/**
 * Scroll du slider et de la description associee
 * 
 * @param integer next. Direction du scrolling
 */
function newsscoller(next, speed)
{
	var $current_image = $(".gallery li.selected");
	var $current_gallery = $current_image.parents(".gallery");

	var index_current_image = $current_gallery.find("li").index($current_image[0]);
	var index_current_gallery = $(".gallery").index($current_gallery[0]);

	// ============= IMAGE SUIVANTE
	if(next){
		// On determince l'index de l'element li de l'image suivante
		var indexImage = index_current_image + 1; 
		indexImage = ($current_gallery.find("li").eq(indexImage)[0] != undefined) ? indexImage : 0;

			// On determine l'index de la gallerie suivante
		if(indexImage == 0){    
			var indexGallery = index_current_gallery + 1;
			indexGallery = (indexGallery < $(".gallery").length) ? indexGallery : 0;
		} else {
			var indexGallery = index_current_gallery;
		}
	// ============= IMAGE PRECEDENTE
	} else {
		// On initialise l'index de l'image precedente
		var indexImage = index_current_image - 1;

		// On determince l'index de l'element li de l'image precedente et de la gallerie precedente  
		if(indexImage < 0){
			var indexGallery = (index_current_gallery == 0) ? sizeGallery.length-1 : index_current_gallery -1;
			console.log(indexGallery)
			indexImage = sizeGallery[indexGallery] -1;
		} else {
			indexGallery = index_current_gallery;
		}
	}

	// Attribution de la classe ".selected" uniquement aux elements a afficher
	$(".gallery li , .excerpt li").removeClass("selected");

	var $imageSelected = $(".gallery").eq(indexGallery).find("li").eq(indexImage);
	var $excerptSelected = $(".excerpt").eq(indexGallery).find("li").eq(indexImage);

	$imageSelected.addClass("selected");
	$excerptSelected.addClass("selected");

	$('#mask-gallery').scrollTo($imageSelected, speed);		
	$('#mask-excerpt').scrollTo($excerptSelected, speed);	
}

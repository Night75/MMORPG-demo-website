$(function(){

	// ========================================= ========================================= =========================================
	//*************** --------------  ___________  EVENEMENTS GENERAUX
	// ========================================= ========================================= =========================================		
	
	
	// =========== ------------- ____________________ REDIMENSIONNEMENT DE LA PAGE D'ACCUEIL ET CONTACT____________________ ------------- ===========
	
	// =========== ------------- Header
	function resizeHeader()
	{
		var minHeightDisplayMenu = 363;													// Hauteur du menu a redimensionner (Il est de 600px au depart pour ne pas reveler le bas);
		var minHeightWindow = 611;															// On ne souhaite assigner qu'une seule fois cette variable, l'expression ci-dessous est invalide
		//var minHeightWindow =  minHeightDisplayMenu + $("#header_info").outerHeight();		
		var heightPanelInfo = $("#header_info>div").outerHeight();
		var reservedSpace = heightPanelInfo + minHeightDisplayMenu;
	
		if(window.innerHeight > minHeightWindow){
			
			var spaceAvailable = window.innerHeight - reservedSpace - 100;			// 100 correspond au padding minimum que l'on va ajouter manuellement car non equitable entre le top et bot	
				$("#header_info").css({															// Redimensionnement du panneau de presentation
				"padding-top": 80 + spaceAvailable/3,
				"padding-bottom": 20 + spaceAvailable/3
			});
			$("#header_info").css({																// Redimensionnement du panneau de presentation
				"padding-top": 80 + spaceAvailable/3,
				"padding-bottom": 20 + spaceAvailable/3
			});
		}
		$("#menu_display").height(minHeightDisplayMenu + spaceAvailable/3);		// Redimensionnement du menu
	}
	
	// =========== ------------- Contact/Footer
	function resizeAPropos()
	{
		var heightPanel = 270 																	// Hauteur d'un paneau de description
		var minSpacePanel = 50;														// Ecart de hauteur entre les panneaux
		var maxSpacePanel = 200;
		var numberPanels = 3;																	// Nombre de panneaux
		var minHeightPanelsGroup = heightPanel + ((numberPanels-1)*minSpacePanel);		// Hauteur minimale du groupe de panneaux	
		var maxHeightPanelsGroup = heightPanel + ((numberPanels-1)*maxSpacePanel) ;	// Hauteur maximale du groupe de panneaux
		
		var paddingVContainer = parseInt($("#apropos .container").css("paddingTop"))
		var reservedSpace = 2*paddingVContainer + $("#apropos h3").outerHeight(true) + $("#menu_top").outerHeight();
		var minHeightWindow = minHeightPanelsGroup + reservedSpace;
		
		if(window.innerHeight > minHeightWindow){
			
			var spaceAvailable = window.innerHeight - reservedSpace
			
			if(spaceAvailable > maxHeightPanelsGroup){
				$("#apropos .content_special").height(maxHeightPanelsGroup);
			}
			else{
				$("#apropos .content_special").height(spaceAvailable);
			}
			
		}
		else{
			$("#apropos .content_special").height(minHeightPanelsGroup);
		}
	}

	
	// =========== ------------- Contact/Footer
	function resizeFooter()
	{
		//var heightBasePanel = $("#contact .vcard").outerHeight();
		var minHeightWindow = 400;
		var minPaddin = 50;
		var heightFooter = $("footer").outerHeight();
		var heightWindowRelative = window.innerHeight - heightFooter;
		var reservedSpace = minHeightWindow + heightFooter - 2*minPaddin;
		
		if(heightWindowRelative > minHeightWindow){
			var spaceAvailable = window.innerHeight  - reservedSpace;	
			var paddinTop = (spaceAvailable/2 > 50) ? spaceAvailable/2 : 50;
			$("#contact .wrapper_container").css({									// Redimensionnement du panneau de presentation
				"height":  heightWindowRelative
			});
			$("#contact .wrapper_container #contact_panel").css({						// Redimensionnement du panneau de presentation
				"padding-top":  paddinTop
			});	
		}
	}
	
	setTimeout(function(){
		resizeHeader();
		resizeFooter();
		resizeAPropos();
	},200);
	
	
	
	// =========== ------------- Changmenent de taille de la fenetre du navigateur	
	$(window).resize(function() {
		resizeHeader();
		resizeFooter();
		resizeAPropos();
		$.waypoints('refresh');
	});
	
	// =========== ------------- ____________________ EFFETS DE PARALLAXE ____________________ ------------- ===========
	setTimeout(function(){
		$('.wrapper_hs').each(function(){
			$(this).parallax("50%",0.5);
		})
	},600) // On ajoute un delai puisque l'offset() top au chargement du dom peut etre errone ==> Le css n'est pas completement charge'
	
	
	// ========================================= ========================================= =========================================
	//*************** --------------  ___________  EVENEMENTS DE LA PAGE D'ACCUEIL/HEADER
	// ========================================= ========================================= =========================================

	// =========== ------------- DImmensionnement du header en full screen
	var minHeightMenu = $("#menu_display>ul").outerHeight(true);


	// =========== ------------- ____________________ EFFET HIGHLIGHT ____________________ ------------- ===========
	var lightColor_1 = "rgba(255,255,255,0.9)";
	var originalBG_1 = "rgba(255,255,255,0.1)";
	var lightColor_2 = "rgba(255,255,255,1)";
	var originalBG_2 = "rgba(227,227,226,1)";

	if($(".no-cssgradients")[0] == undefined){
		// =========== ------------- Sur le menu du haut
		// On lie l'evenement au parent car les elements auquel on souhaite attribuer l'effet changent au cours de la navigation'
		$('#menu_top #menu_links ul').on("mousemove" ,"li a:not('.selected')",function(e) {
			highlight(e, this, originalBG_1, lightColor_1 ,1, 70);		
		})
		$('#menu_top #menu_links ul').on("mouseleave", "li a:not('.selected')",function() {
			$(this).css({ background: "transparent" });
		});
		
		// =========== ------------- Sur le menu vitrine
		$('#menu_display ul li a').mousemove(function(e) {
			highlight(e, this, originalBG_2, lightColor_2 ,75, 150);		
		}).mouseleave(function() {
			$(this).css({ background: originalBG_2 });
		});
	}
	
	// =========== ------------- ____________________ NAVIGATION ENTRE PAGES ==> SCROLL ____________________ ------------- ===========
	// =========== ------------- Sur le menu du haut
	$('#menu_top #menu_links ul').on("click", "li a:not('.selected')",function(event) {
		event.preventDefault();
		var panelName = $(this).attr("href").substring(1); //On enleve le #
		if(panelName == "accueil"){
			var offset = 0 + "px";
		} else {
			var panelSelector = "#" + panelName + " .wrapper_container";
			var offset = $(panelSelector).offset().top - 30 + "px";
		}
		$("html,body").animate({ scrollTop: offset }, 1500 , "easeInBack");
	});
	
	// =========== ------------- Sur le menu vitrine
	$('#menu_display ul ').on("click", "li a",function(event) {
		event.preventDefault();
		var panelName = $(this).attr("href").substring(1); //On enleve le #
		var panelSelector = "#" + panelName + " .wrapper_container";
		var offset = $(panelSelector).offset().top + 30 + "px";
		$("html,body").animate({ scrollTop: offset }, 1500 , "easeInBack");
	});
	
	
	// =========== ------------- ____________________ SWITCH DE PAGE -> COLORATION DU MENU ____________________ ------------- ===========
	$('#menu_top #menu_links ul li:first-child a').addClass("selected");
	
	var selector = "#menu_top #menu_links ul li a";
	
	// =========== ------------- Transition Accueil/CV
	$('section#cv').waypoint(function(event, direction) {
		if (direction === 'down') {
			$(selector + ".selected").removeClass("selected");
			$(selector + "[href=#cv]").removeAttr("style").addClass("selected");
		}
		else {
			$(selector + ".selected").removeClass("selected");
			$(selector + "[href=#accueil]").removeAttr("style").addClass("selected");
			
			rewindDescriptionAside();
		}
	}); 
	
	// =========== ------------- Transition CV/Projets
	$('section#projets').waypoint(function(event, direction) {
		if (direction === 'down') {
			$(selector + ".selected").removeClass("selected");
			$(selector + "[href=#projets]").removeAttr("style").addClass("selected");
		}
		else {
			$(selector + ".selected").removeClass("selected");
			$(selector + "[href=#cv]").removeAttr("style").addClass("selected");
		}
	}); 
	
	// =========== ------------- Transition Projets/apropos
	$('section#apropos').waypoint(function(event, direction) {
		if (direction === 'down') {
			$(selector + ".selected").removeClass("selected");
			$(selector + "[href=#apropos]").removeAttr("style").addClass("selected");
		}
		else {
			$(selector + ".selected").removeClass("selected");
			$(selector + "[href=#projets]").removeAttr("style").addClass("selected");
		}
	}); 
	
	// =========== ------------- Transition apropos/contact
	
	// DEFINIE DANS LA PARTIE "EVENEMENTS DE LA PAGE CONTACT ""
	
	// ========================================= ========================================= =========================================
	//*************** --------------  ___________  EVENEMENTS DE LA PAGE CV'
	// ========================================= ========================================= =========================================

	// =========== ------------- ____________________ ANIMATION DES PANNEAUX ANNEXES____________________ ------------- ===========
	// =========== Animation d'affichage '
	var animDuration  = 1000;
	var divRunning;
	$(".description_aside").on("mouseover", ".question_da:visible" ,function(){
		
		if(divRunning != this){
			$(this).hide("drop" , {}, animDuration, function(){
				$(this).siblings(".wrapper_da").show("fold", {} , animDuration);
			})
		}
		divRunning = this;
	})
	
	// =========== Animation de retour
	// Fonction inseree dans "SWITCH DE PAGE -> COLORATION DU MENU "  - Transition Accueil/CV 
	function rewindDescriptionAside()
	{
		$(".description_aside .wrapper_da:visible").hide("fold", {} , 500 , function(){
			$(this).siblings(".question_da").show("drop", {} , 500);
			divRunning = null;
		})
	}

	// =========== ------------- ____________________  INFOBULE  ____________________ ------------- ===========
	 
	// =========== Affichage de l'infobulle'
	$("#cv").on("mouseover", ".bt_toggle, #certifications img",function(){
		$("body").append("<span class='infobulle_tog'></span>");
		var $bulle = $(".infobulle_tog:last");
		$bulle.text($(this).data("title")); 

		var posTop = $(this).offset().top + $(this).outerHeight();
		var posLeft = $(this).offset().left - ($bulle.outerWidth() - $(this).outerWidth())/2 ;

		$bulle.css({
			top: posTop + 10,
			left: posLeft,
			opacity: 0
		})

		$bulle.animate({
			top: posTop,
			left: posLeft,
			opacity: 99
		},500);
	})

	// =========== Masquage de l'infobulle'
	
	$("#cv").on("mouseout", ".bt_toggle, #certifications img",function(){
		var $bulle = $(".infobulle_tog:last");
		if($bulle.length == 0){
			return; // L'infobulle a etee supprimee car on a appuye sur le bouton'
		}

		$bulle.animate(
		{
			top: $bulle.offset().top - 10,
			opacity: 0
		},
		500,
		"linear",
		function(){
			$bulle.remove();
		})
	})

	// =========== ------------- ____________________  CLIQUE D'UN BOUTON LIE A UNE INFOBULLE  ____________________ ------------- ===========
	$(".bt_toggle").click(function(){
		var $bulle = $(".infobulle_tog:last");

		if($bulle.length != 0){
			$bulle.remove(); 
		} else {
			// Ce cas se produit lorsque l'on laisse la souris sur place et que l'on clique sur le'bouton
			// L'infobulle ne s'affiche pas entre chaque clique car l'evenement mouseover n'est pas declenche'
		}

		var selector = ($(this).data("class"));

		// ============ Si les champs sont masques
		if($(selector).is(":hidden")){
			$(this).html("&#9660;");
		}
		// ============ Si les champs sont visibles
		else{
			$(this).html("&#9658;");
		}
		$(selector).toggle();
	})		

	// ========================================= ========================================= =========================================
	//*************** --------------  ___________  EVENEMENTS DE LA PAGE PROJETS
	// ========================================= ========================================= =========================================

	// =========== ------------- ____________________ SLIDER ____________________ ------------- ===========
	var speedSlider = 800;
	sizeGallery = new Array();

	// ========== Reinitialisation de l'image et extrait du slider a afficher (resout les pb de cache)'
	$(".gallery:first-child li:first-child").addClass("selected");
	$(".excerpt:first-child li:first-child").addClass("selected");
	$('#mask-gallery').scrollTo($(".gallery:first-child li:first-child"), speedSlider);		
	$('#mask-excerpt').scrollTo($(".excerpt:first-child li:first-child"), speedSlider);	

	//=========== Enregistrement des dimensions du slider (nombre de galleries et d'images par gallerie)'
	index = 0;
	$(".gallery").each(function(){
		sizeGallery[index] = $(this).find("li").length;
		index++;
	})  

	//Clique sur le bouton suivant
	$('#btn-next').click(function () {
		newsscoller(1, speedSlider);	
		return false;
	});	

	//Clique sur le bouton precedent
	$('#btn-prev').click(function () {
		newsscoller(0, speedSlider);	
		return false;
	});	

	// ========================================= ========================================= =========================================
	//*************** --------------  ___________  EVENEMENTS DE LA PAGE APROPOS
	// ========================================= ========================================= =========================================

	// =========== ------------- ____________________ ANIMATIONS AU SCROLLING ____________________ ------------- ===========
	$(window).scroll(function(){
		
		var posTop = $(window).scrollTop();
		
		//On limite la portee de declenchement des evenements pour eviter de consommer du proc inutilement
		if(posTop > $("#projets .wrapper_container").offset().top){ 					
			//*************** -------------- PREMIER PANNEAU (#loisirs)
			//*************** Limites de l'animation'		
			var posStart = $(" #apropos").offset().top;
			var posEnd = posStart + 150;	
			var spacePanel = getSpacePanel();
			
			//*************** Animation!
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
	
			//*************** -------------- PREMIER PANNEAU (#personnalite)
			//*************** Limites de l'animation'
			posStart = $(" #apropos").offset().top  -50;
			posEnd = posStart + 300;	
	
			//*************** Animation!
			$("#apropos .content_special .description_info:nth-child(2)").css({
				"height": anime_div(posTop, posStart, posEnd, 0, 212) + "px",
				"width": anime_div(posTop, posStart, posEnd, 0, 250) + "px",
				"padding": anime_div(posTop, posStart, posEnd, 0, 25) + "px",
				"opacity": anime_div(posTop, posStart, posEnd, 0, 1),
				"border-top-right-radius": anime_div(posTop, posStart, posEnd, 0, 25)  +  "px " + anime_div(posTop, posStart, posEnd, 0, 50)  +  "px",
				"border-bottom-left-radius": anime_div(posTop, posStart, posEnd, 0, 25)  +  "px " + anime_div(posTop, posStart, posEnd, 0, 50)  +  "px",
				"top": anime_div(posTop, posStart, posEnd, 0, spacePanel) + "px",
				"left": anime_div(posTop, posStart, posEnd, 0, 350) +  "px"
			});
			$("#apropos .content_special .description_info:nth-child(2) p, #apropos .content_special .description_info:nth-child(2) h4").css({
				"font-size": anime_div(posTop, posStart, posEnd, 0, 18) + "px"
			});
	
			//*************** -------------- PREMIER PANNEAU (#reves)
			//*************** Limites de l'animation'
			posStart = $(" #apropos").offset().top + 50;
			posEnd = posStart + 300;	
	
			//*************** Animation!
			$("#apropos .content_special .description_info:nth-child(3)").css({
				"height": anime_div(posTop, posStart, posEnd, 0, 212) + "px",
				"width": anime_div(posTop, posStart, posEnd, 0, 250) + "px",
				"padding": anime_div(posTop, posStart, posEnd, 0, 25) + "px",
				"opacity": anime_div(posTop, posStart, posEnd, 0, 1),
				"border-top-right-radius": anime_div(posTop, posStart, posEnd, 0, 25)  +  "px " + anime_div(posTop, posStart, posEnd, 0, 50)  +  "px",
				"border-bottom-left-radius": anime_div(posTop, posStart, posEnd, 0, 25)  +  "px " + anime_div(posTop, posStart, posEnd, 0, 50)  +  "px",
				"top": anime_div(posTop, posStart, posEnd, 0, (spacePanel*2)) + "px",
				"left": anime_div(posTop, posStart, posEnd, 0, 700) +  "px"
			});
			$("#apropos .content_special .description_info:nth-child(3) p, #apropos .content_special .description_info:nth-child(3) h4").css({
				"font-size": anime_div(posTop, posStart, posEnd, 0, 18) + "px"
			});
	
			//*************** -------------- Guillemets des panneau
			//*************** Limites de l'animation'
			posStart = posEnd;
			posEnd = posEnd + 2;	
	
			//*************** Animation!
			$("#apropos .content_special .description_info .wrapper_di .container_di::before").css({
				"opacity": anime_div(posTop, posStart, posEnd, 0, 1)
			});
			$("#apropos .content_special .description_info .wrapper_di .container_di::after").css({
				"opacity": anime_div(posTop, posStart, posEnd, 0, 1)
			});
			
		}// ==== Fin de la condition IF
	});// ===== FIN DES ANIMATIONS AU SCROLLING
	
	// Calcule l'espace necessaire a inserer entre les panneaux. 
	//Cet espace varie car lorsque l'on redimensionne l'ecran l'evenement resizeAPropos() est declenche
	function getSpacePanel()
	{
		var heightPanel = 270 	
		var numberPanels = 3;
		var heightPanelsGroup = $("#apropos .content_special").height();
		var spaceAvailable = heightPanelsGroup - heightPanel;
		return spaceAvailable/2;
	}
	
	// ========================================= ========================================= =========================================
	//*************** --------------  ___________  EVENEMENTS DE LA PAGE CONTACT
	// ========================================= ========================================= =========================================
	
	// =========== ------------- ____________________ ANIMATION DES ICONES ____________________ ------------- ===========

	// =========== -------------  Variables Generales
	
	var radiusCircle = (parseInt($('section#contact #icon_phone').css("top")) - parseInt($('section#contact #icon_letter').css("top")))/2
	var width_icon = parseInt($("section#contact #icon_phone").outerWidth());
	var height_pointer = parseInt($("section#contact #icon_pointer_black").height());
	var width_pointer = parseInt($("section#contact #icon_pointer_black").outerWidth());
	var height_panel =  parseInt($('section#contact .vcard_icons').height());
	var width_panel  = parseInt($('section#contact .vcard_icons').outerWidth());
	
	 // Bug parfois .. ===== > Mettre un setTimeout au debut car le css n;'est pas completement charge'
	 /*
	var topTop_icon = parseInt($('section#contact #icon_phone').css("top"));
	var topBot_icon = parseInt($('section#contact #icon_letter').css("top"));
	var left_icon = (width_panel - width_icon)/2;
	var topTop_pointer = 0;
	var topBot_pointer = height_panel - height_pointer/2;
	var left_Pointer = (width_panel - width_pointer)/2;
	*/
 
	var topTop_icon = 88;
	var topBot_icon = 158;
	var left_icon = 122;
	var topTop_pointer = 0;
	var topBot_pointer = 286;
	var left_Pointer = 95;	
	
	var animDuration = 1000;
	var delayAnimation = 1500;
	var animDurationReverse = 500;
	
	// =========== ------------- Variables d'animations du type'
	
	// ===========  Icone "fleche" noire
	var bezier_params_pointerBlack  = {
		start: { 
			x: left_Pointer, y: topBot_pointer, 
			angle: -45
		},  
		end: { 
			x: left_Pointer, y: topTop_pointer, 
			angle: 45, length: 1
		}
	}	
	// ===========  Icone "fleche" rouge
	var bezier_params_pointerRed = {
		start: { 
			x: left_Pointer, y: topTop_pointer, 
			angle: -45
		},  
		end: { 
			x: left_Pointer, y: topBot_pointer, 
			angle: 45, length: 1
		}
	}	
	// ===========  Icones phone 
	var bezier_params_phone  = {
		start: { 
			x: left_icon, y: topTop_icon, 
			angle: 45, length: 1
		},  
		end: { 
			x: left_icon, y: topBot_icon, 
			angle: -45, length: 1
		}
	}
	// ===========  Icones letter 
	var bezier_params_letter  = {
		start: { 
			x: left_icon, y: topBot_icon, 
			angle: 45, length: 1
		},  
		end: { 
			x: left_icon, y: topTop_icon, 
			angle: -45, length: 1
		}
	}
	
	
	
	// =========== ------------- Declenchement de l'animation'
	$('section#contact .wrapper_container').waypoint(function(event, direction) {
		if($("section#contact #icon_pointer_black").css("top") == "0px"){
			return;		// L'animation a deja etee declenchee'
		}
		if (direction === 'down') {
			
			setTimeout(function(){
				// ===========  Icone "fleche" rouge
				$("section#contact #icon_pointer_red").animate({
					path : new $.path.bezier(bezier_params_pointerRed)
				},animDuration);

				$('section#contact #icon_pointer_red').rotate({		
					angle: 0, 
					animateTo: 180,
					duration: animDuration
				});
				
				// ===========  Icone "fleche" noire
				$("section#contact #icon_pointer_black").animate({
					path : new $.path.bezier(bezier_params_pointerBlack)
				},animDuration);

				$('section#contact #icon_pointer_black').rotate({		
					angle: 180, 
					animateTo: 360,
					duration:  animDuration
				});
				
				// ===========  Icone phone
				$("section#contact #icon_phone").animate({
					path : new $.path.bezier(bezier_params_phone)
				},animDuration);
				
				// ===========  Icone letter
				$("section#contact #icon_letter").animate({
					path : new $.path.bezier(bezier_params_letter)
				},animDuration);		
			},delayAnimation)
		} 
	}, {offset : 100}
); 
	
	// =========== ------------- Retour en arriere de l'animation'
	$('section#contact .header_section').waypoint(function(event, direction) {
		if (direction === "down"){

			// =========== HightLight du bouton de menu
			$(selector + ".selected").removeClass("selected");
			$(selector + "[href=#contact]").removeAttr("style").addClass("selected");
		}
		else
		{
			// =========== HightLight du bouton de menu
			$(selector + ".selected").removeClass("selected");
			$(selector + "[href=#apropos]").removeAttr("style").addClass("selected");
			
			// =========== Animation des icones
			$("section#contact #icon_pointer_red").animate({
				path : new $.path.bezier(bezier_params_pointerBlack)
			},animDurationReverse);
				$('section#contact #icon_pointer_red').rotate({		
					angle: 180, 
					animateTo: 360,
					duration: animDurationReverse
				});

				$("section#contact #icon_pointer_black").animate({
					path : new $.path.bezier(bezier_params_pointerRed)
				},animDurationReverse);

				$('section#contact #icon_pointer_black').rotate({		
					angle: 0, 
					animateTo: 180,
					duration: animDurationReverse
				});

				$("section#contact #icon_phone").animate({
					path : new $.path.bezier(bezier_params_letter)
				},animDurationReverse);

				$("section#contact #icon_letter").animate({
					path : new $.path.bezier(bezier_params_phone)
				},animDurationReverse);
		}
	})	
})
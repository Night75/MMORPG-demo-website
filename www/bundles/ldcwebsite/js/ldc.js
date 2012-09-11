$(document).ready(function(){
	
//================ ================================================== ====================
//										GESTIONNAIRE D'EVENEMENTS GENERAUX
//================ ================================================== ====================


//__________________ ----------------- ************  LOGIN

	$("input[name=_submit]~a").click(function() {
		$(this).closest("form").submit();
	});

//__________________ ----------------- ************ CALENDRIER
	$('.cl-panel').css({"display" : "block"}); 							// On a laisse le temps au float de faire effet
	$('.cl-panel').removeClass('selected');							// On ne s'est servi de cette classe que pour permettre un affichage du premier element'
	var heightMask = $('.cl-panel').eq(0).height();
	$('#cl-mask').scrollTo(".cl-1", 400);  							// Remise a la position initiale du calendrier
    $('#cl-mask').css({'height':heightMask});   					// Initialisation de la hauteur du masque 
     panelSelected = 1;													// Initialisation du panel selectionne 
   	$('#cl-panel').width(parseInt($('#cl-mask').width() *($('#cl-panel').children("div").length+1))); // Initialisation de la largeur de l'espace de panneaux' 
     
    //__________________ EVENT HANDLER : EVENEMENT SUIVANT
    $('.bt-cl-right').click(function () {
        var $nextPanel = $(".cl-"+ (panelSelected+1));
        if($nextPanel.length>0){
        	 var panelheight = $nextPanel.height();
	        $('#cl-mask').animate({'height':panelheight},{queue:false, duration:500});   // Redimensionnement vertical
	        $('#cl-mask').scrollTo($nextPanel, 400);   											 // Defilement de l'evenement
	       	panelSelected +=1;  
	        return false;
        }	       
    });
    
    //__________________ EVENT HANDLER : EVENEMENT PRECEDENT
     $('.bt-cl-left').click(function () {    
        var $previousPanel = $(".cl-"+ (panelSelected-1));
        if($previousPanel.length>0){
        	 var panelheight = $previousPanel.height();
	        //Resize the height
	        $('#cl-mask').animate({'height':panelheight},{queue:false, duration:500});   // Redimensionnement vertical    
	        $('#cl-mask').scrollTo($previousPanel, 400);     										 // Defilement de l'evenement
	       	panelSelected -=1;  
	        return false;
	    }
    });

//__________________ ----------------- ************  FOOTER
 
//__________________ ----------------- Effet sur le survolement des icones
	
	$container = $('footer #footer-mid-part ul');
	var icons   = $('footer #footer-mid-part ul li');
	
	icons.on( 'mouseenter', function( event ) {
		var $article    = $(this);
		setTimeout( function() {
			if( $article.hasClass('active') ) return false;
			icons.not($article).removeClass('active').addClass('blur');		
			$article.removeClass('blur').addClass('active');	
		}, 75 );
	});
	
	$container.on( 'mouseleave', function( event ) {
	icons.removeClass('active blur');
	})
	
});



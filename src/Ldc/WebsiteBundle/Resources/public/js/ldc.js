$(document).ready(function(){
	
//================ ================================================== ====================
//										GESTIONNAIRE D'EVENEMENTS GENERAUX
//================ ================================================== ====================

//__________________ ----------------- ************  BODY

//__________________ ----------------- Bouton de Login

	$("input[name=_submit]~a").click(function() {
		$(this).closest("form").submit();
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



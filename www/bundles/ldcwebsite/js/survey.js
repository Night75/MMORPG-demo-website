$(document).ready(function(){

	//__________________ ----------------- ************  FORMULAIRE D'AJOUT (admin)
	 // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $container = $('#survey_type_answers');
    if($container.length > 0){  // On verifie que l'element existe <=> On se situe bien dans la page de formulaire d'ajout d'un sondage	
    	 
	    if($($container.children()).length == 0) {
	        add_answer($($container));   // On ajoute un premier champ directement s'il n'en existe pas déjà un.
	    }
		 //__________________ Bouton d'ajout de reponse
	    $('#add_answer').click(function() {
	        add_answer($($container));
	    });	    
    }
    
    
	//__________________ ----------------- ************ RESULTATS
	var $container = $(".num-votes");
	if($container.length > 0) //SI l'element existe, le code suivant s'executera
	{
		var totalVotes = 0;
	
		var widthMax = $("#survey-result").width() - 50;
		var votes = new Array();
		//________________
		for(var i=0; i < $container.length; i++){
			votes[i] = parseInt($($container[i]).text());
			totalVotes += votes[i];
		}	
		var ratio = widthMax/totalVotes;
		
		$(".img-answer").each(function(index){
			$(this).width(votes[index]*ratio + 1)
		})
	}
	
})


 // On définit une fonction qui va ajouter un champ.
function add_answer($container) {
    // On définit le numéro du champ (en comptant le nombre de champs déjà ajoutés).
    index = $container.children().length + 1;
    // On ajoute à la fin de la balise <div> le contenu de l'attribut « data-prototype »,
    // après avoir remplacé la variable __name__ qu'il contient par le numéro du champ.
    $container.append(
        $($container.attr('data-prototype').replace(/__name__/g, index))
    );
}

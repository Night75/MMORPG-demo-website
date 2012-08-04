$(document).ready(function(){
	
//================ ================================================== ====================
//										GESTIONNAIRE D'EVENEMENTS 
//================ ================================================== ====================

	//__________________ ----------------- Bouton de Submit

	$("input[name=_submit]~a").click(function() {
		$(this).closest("form").submit();
	});
	
//__________________ ----------------- ************  LISTE

	//__________________ ----------------- Bouton de Suppression

	$("input[name=delete_user]").click(function() {
		if(confirm("Souhaitez vous vraiment supprimer " + $(this).val() + " de la liste des membres?")){
			return; //Envoie le formulaire
		}
		return false;
	});
	
	
//__________________ ----------------- ************  SONDAGES	

//__________________ ----------------- Formulaire d'ajout
	 // On récupère la balise <div> en question qui contient l'attribut « data-prototype » qui nous intéresse.
    var $container = $('#survey_type_answers');
    
    // On verifie que l'element existe <=> On se situe bien dans la page de formulaire d'ajout d'un sondage	
    if($container.length > 0){ 
    	 
	    if($($container.children()).length == 0) {
	        add_answer($($container));   // On ajoute un premier champ directement s'il n'en existe pas déjà un.
	    }
	    
		 //__________________ Bouton d'ajout de reponse
	    $('#add_answer').click(function() {
	        add_answer($($container));
	    });
	    
    }
 
});

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

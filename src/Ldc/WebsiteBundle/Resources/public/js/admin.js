$(document).ready(function(){
	
//================ ================================================== ====================
//										GESTIONNAIRE D'EVENEMENTS DE LA PAGE USER
//================ ================================================== ====================

//__________________ ----------------- ************  LISTE

	//__________________ ----------------- Bouton de Suppression

	$("input[name=delete_user]").click(function() {
		if(confirm("Souhaitez vous vraiment supprimer " + $(this).val() + " de la liste des membres?")){
			return; //Envoie le formulaire
		}
		return false;
	});
	
});



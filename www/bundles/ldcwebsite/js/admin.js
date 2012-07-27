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
	
});



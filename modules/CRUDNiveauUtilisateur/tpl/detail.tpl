<div class="alert alert-info"><h2>Aperçu du Niveau d'Utilisateur "{$data->nomNiveauUtilisateur}"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idNiveauUtilisateur}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomNiveauUtilisateur}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDNiveauUtilisateur&action=supprimer&id={$data->idNiveauUtilisateur}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDNiveauUtilisateur&action=modifier&id={$data->idNiveauUtilisateur}' class='btn btn-default'>Modifier</a>
</div>
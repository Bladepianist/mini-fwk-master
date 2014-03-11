<div class="alert alert-info"><h2>Aperçu du Statut d'Utilisateur "{$data->nomStatutUtilisateur}"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idStatutUtilisateur}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomStatutUtilisateur}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDStatutUtilisateur&action=supprimer&id={$data->idStatutUtilisateur}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDStatutUtilisateur&action=modifier&id={$data->idStatutUtilisateur}' class='btn btn-default'>Modifier</a>
</div>
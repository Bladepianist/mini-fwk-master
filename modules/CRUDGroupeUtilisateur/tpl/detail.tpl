<div class="alert alert-info"><h2>Aperçu de {$data->nomGroupeUtilisateur}</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idGroupeUtilisateur}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomGroupeUtilisateur}</td>
			</tr>
			<tr>
				<td>Departement : </td><td>{$data->nomDepartement}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDGroupeUtilisateur&action=supprimer&id={$data->idGroupeUtilisateur}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDGroupeUtilisateur&action=modifier&id={$data->idGroupeUtilisateur}' class='btn btn-default'>Modifier</a>
</div>
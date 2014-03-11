<div class="alert alert-info"><h2>Aperçu du Département "{$data->nomDepartement}"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idDepartement}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomDepartement}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDDepartement&action=supprimer&id={$data->idDepartement}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDDepartement&action=modifier&id={$data->idDepartement}' class='btn btn-default'>Modifier</a>
</div>
<div class="alert alert-info"><h2>Aperçu du Poste Administratif "{$data->nomPosteAdministratif}"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idPosteAdministratif}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomPosteAdministratif}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDPosteAdministratif&action=supprimer&id={$data->idPosteAdministratif}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDPosteAdministratif&action=modifier&id={$data->idPosteAdministratif}' class='btn btn-default'>Modifier</a>
</div>
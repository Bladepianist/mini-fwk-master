<div class="alert alert-info"><h2>Aperçu du type de controle "{$data->typeControle}"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idControle}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->typeControle}</td>
			</tr>
			<tr>
				<td>Coefficient : </td><td>{$data->coeffControle}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDControle&action=supprimer&id={$data->idControle}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDControle&action=modifier&id={$data->idControle}' class='btn btn-default'>Modifier</a>
</div>
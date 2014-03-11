<div class="alert alert-info"><h2>Aperçu de la matière "{$data->nomMatiere}"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idMatiere}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomMatiere}</td>
			</tr>
			<tr>
				<td>Coefficient : </td><td>{$data->coeffMatiere}</td>
			</tr>
                        
			<tr>
				<td>UE de la matière : </td><td>{$data->nomUE}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDMatiere&action=supprimer&id={$data->idMatiere}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDMatiere&action=modifier&id={$data->idMatiere}' class='btn btn-default'>Modifier</a>
</div>
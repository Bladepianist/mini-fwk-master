<div class="alert alert-info"><h2>Aperçu du Semestre {$data->nomSemestre}</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idSemestre}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomSemestre}</td>
			</tr>
			<tr>
				<td>Statut du Semestre : </td><td>{$data->nomStatutSemestre}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDSemestre&action=supprimer&id={$data->idSemestre}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDSemestre&action=modifier&id={$data->idSemestre}' class='btn btn-default'>Modifier</a>
</div>
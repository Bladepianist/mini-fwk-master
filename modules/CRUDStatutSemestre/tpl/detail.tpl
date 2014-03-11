<div class="alert alert-info"><h2>Aperçu du Statut de Semestre "{$data->nomStatutSemestre}"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idStatutSemestre}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomStatutSemestre}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDStatutSemestre&action=supprimer&id={$data->idStatutSemestre}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDStatutSemestre&action=modifier&id={$data->idStatutSemestre}' class='btn btn-default'>Modifier</a>
</div>
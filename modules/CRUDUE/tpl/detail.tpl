<div class="alert alert-info"><h2>Aperçu de l'UE {$data->nomUE}</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idUE}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomUE}</td>
			</tr>
			<tr>
				<td>Semestre de l'UE : </td><td>{$data->nomSemestre}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDUE&action=supprimer&id={$data->idUE}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDUE&action=modifier&id={$data->idUE}' class='btn btn-default'>Modifier</a>
</div>
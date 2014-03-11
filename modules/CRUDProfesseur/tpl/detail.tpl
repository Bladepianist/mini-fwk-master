<div class="alert alert-info"><h2>Aperçu de {$data->nomProfesseur} {$data->prenomProfesseur}</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idProfesseur}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomProfesseur}</td>
			</tr>
			<tr>
				<td>Prénom : </td><td>{$data->prenomProfesseur}</td>
			</tr>
                        <tr>
				<td>Email : </td><td>{$data->emailProfesseur}</td>
			</tr>
			<tr>
				<td>Poste Administratif : </td><td>{$data->nomPosteAdministratif}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDProfesseur&action=supprimer&id={$data->idProfesseur}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDProfesseur&action=modifier&id={$data->idProfesseur}' class='btn btn-default'>Modifier</a>
</div>
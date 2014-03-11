<div class="alert alert-info"><h2>Détail de la note {$data->idNote}</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idNote}</td>
			</tr>
			<tr>
				<td>Note : </td><td>{$data->valeurNote}</td>
			</tr>
			<tr>
				<td>Date d'obtention : </td><td>{$data->dateNote}</td>
			</tr>
			<tr>
				<td>Type de Contrôle : </td><td>{$data->typeControle}</td>
			</tr>
			<tr>
				<td>Etudiant Concerné : </td><td>{$data->nomUtilisateur} {$data->prenomUtilisateur}</td></td>
			</tr>
			<tr>
				<td>Matiere : </td><td>{$data->nomMatiere}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDNote&action=supprimer&id={$data->idNote}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDNote&action=modifier&id={$data->idNote}' class='btn btn-default'>Modifier</a>
</div>
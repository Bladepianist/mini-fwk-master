<div class="alert alert-info"><h2>Aperçu de {$data->nomUtilisateur} {$data->prenomUtilisateur}</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idUtilisateur}</td>
			</tr>
			<tr>
				<td>Nom : </td><td>{$data->nomUtilisateur}</td>
			</tr>
			<tr>
				<td>Prénom : </td><td>{$data->prenomUtilisateur}</td>
			</tr>
			<tr>
				<td>Date de Naissance : </td><td>{$data->dateNaissanceUtilisateur}</td>
			</tr>
                        <tr>
				<td>Email : </td><td>{$data->emailUtilisateur}</td>
			</tr>
			<tr>
				<td>Date d'Inscription</td><td>{$data->dateInscription}</td></td>
			</tr>
			<tr>
				<td>Statut de l'Utilisateur : </td><td>{$data->nomStatutUtilisateur}</td>
			</tr>
			<tr>
				<td>Niveau d'Etude : </td><td>{$data->nomNiveauUtilisateur}</td>
			</tr>
			<tr>
				<td>Departement : </td><td>{$data->nomDepartement}</td>
			</tr>
			<tr>
				<td>Spécialisation : </td><td>{$data->nomGroupeUtilisateur}</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDUtilisateur&action=supprimer&id={$data->idUtilisateur}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDUtilisateur&action=modifier&id={$data->idUtilisateur}' class='btn btn-default'>Modifier</a>
</div>
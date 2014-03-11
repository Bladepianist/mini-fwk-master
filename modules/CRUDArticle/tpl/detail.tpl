<div class="alert alert-info"><h2>Détail de l'article "{$data->titreArticle}"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td>{$data->idArticle}</td>
			</tr>
			<tr>
				<td>Titre : </td><td>{$data->titreArticle}</td>
			</tr>
			<tr>
				<td>Date de publication : </td><td>{$data->dateArticle}</td>
			</tr>
                        <tr>
                            <td>Contenu : </td><td>{$data->contenuArticle}</td>
                        </tr>
			<tr>
				<td>Auteur : </td><td>{$data->nomUtilisateur} {$data->prenomUtilisateur}</td></td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDArticle&action=supprimer&id={$data->idArticle}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDArticle&action=modifier&id={$data->idArticle}' class='btn btn-default'>Modifier</a>
</div>
<div class="alert alert-info"><h2>Détail du commentaire N° {$data->idCommentaire} par {$data->prenomUtilisateur} {$data->nomUtilisateur} sur l'article "{$data->titreArticle}"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
                            <td>Identifiant : </td><td>{$data->idCommentaire}</td>
			</tr>
			<tr>
                            <td>Article Concerné : </td><td>{$data->titreArticle}</td>
			</tr>
			<tr>
                            <td>Date de publication : </td><td>{$data->dateCommentaire}</td>
			</tr>
			<tr>
                            <td>Auteur : </td><td>{$data->nomUtilisateur} {$data->prenomUtilisateur}</td></td>
			</tr>
                        <tr>
                            <td>Contenu : </td><td>{$data->commentaire}</td>
                        </tr>
		</table>
	</p>
	
	<a href='?module=CRUDArticle&action=supprimer&id={$data->idArticle}' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDArticle&action=modifier&id={$data->idArticle}' class='btn btn-default'>Modifier</a>
</div>
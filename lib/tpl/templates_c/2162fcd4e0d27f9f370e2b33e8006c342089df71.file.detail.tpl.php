<?php /* Smarty version Smarty-3.1.1, created on 2014-03-04 22:26:45
         compiled from "modules\CRUDCommentaire\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1213353162b6e0cadd3-79248983%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2162fcd4e0d27f9f370e2b33e8006c342089df71' => 
    array (
      0 => 'modules\\CRUDCommentaire\\tpl\\detail.tpl',
      1 => 1393968400,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1213353162b6e0cadd3-79248983',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_53162b6e1bad9',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53162b6e1bad9')) {function content_53162b6e1bad9($_smarty_tpl) {?><div class="alert alert-info"><h2>Détail du commentaire N° <?php echo $_smarty_tpl->tpl_vars['data']->value->idCommentaire;?>
 par <?php echo $_smarty_tpl->tpl_vars['data']->value->prenomUtilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->nomUtilisateur;?>
 sur l'article "<?php echo $_smarty_tpl->tpl_vars['data']->value->titreArticle;?>
"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
                            <td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idCommentaire;?>
</td>
			</tr>
			<tr>
                            <td>Article Concerné : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->titreArticle;?>
</td>
			</tr>
			<tr>
                            <td>Date de publication : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->dateCommentaire;?>
</td>
			</tr>
			<tr>
                            <td>Auteur : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomUtilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->prenomUtilisateur;?>
</td></td>
			</tr>
                        <tr>
                            <td>Contenu : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->commentaire;?>
</td>
                        </tr>
		</table>
	</p>
	
	<a href='?module=CRUDArticle&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idArticle;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDArticle&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idArticle;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
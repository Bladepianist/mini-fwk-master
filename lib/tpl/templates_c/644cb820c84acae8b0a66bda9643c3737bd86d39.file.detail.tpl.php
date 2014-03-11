<?php /* Smarty version Smarty-3.1.1, created on 2014-02-26 03:08:44
         compiled from "modules\CRUDArticle\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6682530d2dd39ac492-10987012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '644cb820c84acae8b0a66bda9643c3737bd86d39' => 
    array (
      0 => 'modules\\CRUDArticle\\tpl\\detail.tpl',
      1 => 1393380512,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6682530d2dd39ac492-10987012',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_530d2dd3af44e',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d2dd3af44e')) {function content_530d2dd3af44e($_smarty_tpl) {?><div class="alert alert-info"><h2>Détail de l'article "<?php echo $_smarty_tpl->tpl_vars['data']->value->titreArticle;?>
"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idArticle;?>
</td>
			</tr>
			<tr>
				<td>Titre : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->titreArticle;?>
</td>
			</tr>
			<tr>
				<td>Date de publication : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->dateArticle;?>
</td>
			</tr>
                        <tr>
                            <td>Contenu : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->contenuArticle;?>
</td>
                        </tr>
			<tr>
				<td>Auteur : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomUtilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->prenomUtilisateur;?>
</td></td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDArticle&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idArticle;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDArticle&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idArticle;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.1, created on 2014-03-08 02:00:09
         compiled from "modules\CRUDNiveauUtilisateur\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31780531a6b82b1b9b1-29210565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fe5a4958b3fcb7458b15e93d394d096a2faab4cc' => 
    array (
      0 => 'modules\\CRUDNiveauUtilisateur\\tpl\\detail.tpl',
      1 => 1394240403,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31780531a6b82b1b9b1-29210565',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531a6b82bbcdb',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531a6b82bbcdb')) {function content_531a6b82bbcdb($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu du Niveau d'Utilisateur "<?php echo $_smarty_tpl->tpl_vars['data']->value->nomNiveauUtilisateur;?>
"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idNiveauUtilisateur;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomNiveauUtilisateur;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDNiveauUtilisateur&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idNiveauUtilisateur;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDNiveauUtilisateur&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idNiveauUtilisateur;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
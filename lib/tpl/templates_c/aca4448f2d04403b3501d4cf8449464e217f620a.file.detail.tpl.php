<?php /* Smarty version Smarty-3.1.1, created on 2014-02-26 03:00:10
         compiled from "modules\CRUDUtilisateur\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1977452ad92bb324185-46243252%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aca4448f2d04403b3501d4cf8449464e217f620a' => 
    array (
      0 => 'modules\\CRUDUtilisateur\\tpl\\detail.tpl',
      1 => 1393380000,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1977452ad92bb324185-46243252',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52ad92bb35101',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ad92bb35101')) {function content_52ad92bb35101($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['data']->value->nomUtilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->prenomUtilisateur;?>
</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idUtilisateur;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomUtilisateur;?>
</td>
			</tr>
			<tr>
				<td>Prénom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->prenomUtilisateur;?>
</td>
			</tr>
			<tr>
				<td>Date de Naissance : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->dateNaissanceUtilisateur;?>
</td>
			</tr>
                        <tr>
				<td>Email : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->emailUtilisateur;?>
</td>
			</tr>
			<tr>
				<td>Date d'Inscription</td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->dateInscription;?>
</td></td>
			</tr>
			<tr>
				<td>Statut de l'Utilisateur : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomStatutUtilisateur;?>
</td>
			</tr>
			<tr>
				<td>Niveau d'Etude : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomNiveauUtilisateur;?>
</td>
			</tr>
			<tr>
				<td>Departement : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomDepartement;?>
</td>
			</tr>
			<tr>
				<td>Spécialisation : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomGroupeUtilisateur;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDUtilisateur&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idUtilisateur;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDUtilisateur&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idUtilisateur;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
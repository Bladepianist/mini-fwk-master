<?php /* Smarty version Smarty-3.1.1, created on 2014-03-08 01:49:40
         compiled from "modules\CRUDStatutUtilisateur\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31400531a6924b38e18-56237398%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '01678c15ac0255f7d50806d78080dbd5c753546b' => 
    array (
      0 => 'modules\\CRUDStatutUtilisateur\\tpl\\detail.tpl',
      1 => 1394239776,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31400531a6924b38e18-56237398',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531a6924bdb8d',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531a6924bdb8d')) {function content_531a6924bdb8d($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu du Statut d'Utilisateur "<?php echo $_smarty_tpl->tpl_vars['data']->value->nomStatutUtilisateur;?>
"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idStatutUtilisateur;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomStatutUtilisateur;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDStatutUtilisateur&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idStatutUtilisateur;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDStatutUtilisateur&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idStatutUtilisateur;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
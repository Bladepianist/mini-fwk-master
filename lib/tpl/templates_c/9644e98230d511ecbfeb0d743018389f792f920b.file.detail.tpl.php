<?php /* Smarty version Smarty-3.1.1, created on 2014-03-10 13:29:12
         compiled from "modules\CRUDGroupeUtilisateur\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28277531dafff6e6b98-68303407%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9644e98230d511ecbfeb0d743018389f792f920b' => 
    array (
      0 => 'modules\\CRUDGroupeUtilisateur\\tpl\\detail.tpl',
      1 => 1394454545,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28277531dafff6e6b98-68303407',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531dafff8e0bd',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531dafff8e0bd')) {function content_531dafff8e0bd($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['data']->value->nomGroupeUtilisateur;?>
</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idGroupeUtilisateur;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomGroupeUtilisateur;?>
</td>
			</tr>
			<tr>
				<td>Departement : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomDepartement;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDGroupeUtilisateur&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idGroupeUtilisateur;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDGroupeUtilisateur&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idGroupeUtilisateur;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
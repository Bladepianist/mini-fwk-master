<?php /* Smarty version Smarty-3.1.1, created on 2014-02-26 02:41:54
         compiled from "modules\CRUDNote\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:255852b57ca62e10b3-58952947%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e41aa4584836dcbd0e4c4f239ebfaf4f2ee0cb85' => 
    array (
      0 => 'modules\\CRUDNote\\tpl\\detail.tpl',
      1 => 1393378910,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255852b57ca62e10b3-58952947',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52b57ca63940c',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b57ca63940c')) {function content_52b57ca63940c($_smarty_tpl) {?><div class="alert alert-info"><h2>Détail de la note <?php echo $_smarty_tpl->tpl_vars['data']->value->idNote;?>
</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idNote;?>
</td>
			</tr>
			<tr>
				<td>Note : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->valeurNote;?>
</td>
			</tr>
			<tr>
				<td>Date d'obtention : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->dateNote;?>
</td>
			</tr>
			<tr>
				<td>Type de Contrôle : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->typeControle;?>
</td>
			</tr>
			<tr>
				<td>Etudiant Concerné : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomUtilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->prenomUtilisateur;?>
</td></td>
			</tr>
			<tr>
				<td>Matiere : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomMatiere;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDNote&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idNote;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDNote&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idNote;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.1, created on 2014-03-07 01:16:12
         compiled from "modules\CRUDSemestre\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:63153190e4f0793e3-63907880%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ba00c3f8ff67ab0ab8b0ccec9d5ae90b3a0c0e77' => 
    array (
      0 => 'modules\\CRUDSemestre\\tpl\\detail.tpl',
      1 => 1394151367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63153190e4f0793e3-63907880',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_53190e4f4d120',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53190e4f4d120')) {function content_53190e4f4d120($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu du Semestre <?php echo $_smarty_tpl->tpl_vars['data']->value->nomSemestre;?>
</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idSemestre;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomSemestre;?>
</td>
			</tr>
			<tr>
				<td>Statut du Semestre : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomStatutSemestre;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDSemestre&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idSemestre;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDSemestre&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idSemestre;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
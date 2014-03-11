<?php /* Smarty version Smarty-3.1.1, created on 2014-03-07 11:26:32
         compiled from "modules\CRUDStatutSemestre\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2493953199d6e2265f9-74382453%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '959065f44ea15034d466255f57ccdccd3e244e7e' => 
    array (
      0 => 'modules\\CRUDStatutSemestre\\tpl\\detail.tpl',
      1 => 1394187987,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2493953199d6e2265f9-74382453',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_53199d6e2d78e',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53199d6e2d78e')) {function content_53199d6e2d78e($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu du Statut de Semestre "<?php echo $_smarty_tpl->tpl_vars['data']->value->nomStatutSemestre;?>
"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idStatutSemestre;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomStatutSemestre;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDStatutSemestre&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idStatutSemestre;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDStatutSemestre&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idStatutSemestre;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
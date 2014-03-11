<?php /* Smarty version Smarty-3.1.1, created on 2014-03-08 02:22:21
         compiled from "modules\CRUDPosteAdministratif\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22600531a70cd8e7e96-20360601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '282af44225ca522c80361dc865ca8e2ef6ad2887' => 
    array (
      0 => 'modules\\CRUDPosteAdministratif\\tpl\\detail.tpl',
      1 => 1394240917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22600531a70cd8e7e96-20360601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531a70cd983b9',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531a70cd983b9')) {function content_531a70cd983b9($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu du Poste Administratif "<?php echo $_smarty_tpl->tpl_vars['data']->value->nomPosteAdministratif;?>
"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idPosteAdministratif;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomPosteAdministratif;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDPosteAdministratif&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idPosteAdministratif;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDPosteAdministratif&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idPosteAdministratif;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
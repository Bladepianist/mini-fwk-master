<?php /* Smarty version Smarty-3.1.1, created on 2014-03-07 10:41:59
         compiled from "modules\CRUDUE\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1149253191b585fbd85-48010644%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b42c95502b050e90ea493248c0af2f2ae54d7853' => 
    array (
      0 => 'modules\\CRUDUE\\tpl\\detail.tpl',
      1 => 1394154346,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1149253191b585fbd85-48010644',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_53191b586ae91',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53191b586ae91')) {function content_53191b586ae91($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu de l'UE <?php echo $_smarty_tpl->tpl_vars['data']->value->nomUE;?>
</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idUE;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomUE;?>
</td>
			</tr>
			<tr>
				<td>Semestre de l'UE : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomSemestre;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDUE&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idUE;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDUE&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idUE;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.1, created on 2014-03-08 02:26:43
         compiled from "modules\CRUDDepartement\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13968531a71d3cb1df8-43775335%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '757f1ea2cee24f48c3db4ace87f5cfe04763d2d8' => 
    array (
      0 => 'modules\\CRUDDepartement\\tpl\\detail.tpl',
      1 => 1394241737,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13968531a71d3cb1df8-43775335',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531a71d3d4bfb',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531a71d3d4bfb')) {function content_531a71d3d4bfb($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu du Département "<?php echo $_smarty_tpl->tpl_vars['data']->value->nomDepartement;?>
"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idDepartement;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomDepartement;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDDepartement&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idDepartement;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDDepartement&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idDepartement;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
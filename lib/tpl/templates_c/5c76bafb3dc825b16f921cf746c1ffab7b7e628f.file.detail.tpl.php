<?php /* Smarty version Smarty-3.1.1, created on 2014-03-09 17:47:29
         compiled from "modules\CRUDMatiere\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31765531c9b21b01f52-54871315%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c76bafb3dc825b16f921cf746c1ffab7b7e628f' => 
    array (
      0 => 'modules\\CRUDMatiere\\tpl\\detail.tpl',
      1 => 1394383284,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31765531c9b21b01f52-54871315',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531c9b21d09ed',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c9b21d09ed')) {function content_531c9b21d09ed($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu de la matière "<?php echo $_smarty_tpl->tpl_vars['data']->value->nomMatiere;?>
"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idMatiere;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomMatiere;?>
</td>
			</tr>
			<tr>
				<td>Coefficient : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->coeffMatiere;?>
</td>
			</tr>
                        
			<tr>
				<td>UE de la matière : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomUE;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDMatiere&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idMatiere;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDMatiere&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idMatiere;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
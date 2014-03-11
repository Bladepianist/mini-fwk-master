<?php /* Smarty version Smarty-3.1.1, created on 2014-03-10 13:09:24
         compiled from "modules\CRUDProfesseur\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6129531da87a9f1552-38357125%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9466263ad793a3010cf80f6128175051a54fd518' => 
    array (
      0 => 'modules\\CRUDProfesseur\\tpl\\detail.tpl',
      1 => 1394453353,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6129531da87a9f1552-38357125',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531da87ac5d34',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531da87ac5d34')) {function content_531da87ac5d34($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['data']->value->nomProfesseur;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->prenomProfesseur;?>
</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idProfesseur;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomProfesseur;?>
</td>
			</tr>
			<tr>
				<td>Prénom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->prenomProfesseur;?>
</td>
			</tr>
                        <tr>
				<td>Email : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->emailProfesseur;?>
</td>
			</tr>
			<tr>
				<td>Poste Administratif : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->nomPosteAdministratif;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDProfesseur&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idProfesseur;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDProfesseur&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idProfesseur;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
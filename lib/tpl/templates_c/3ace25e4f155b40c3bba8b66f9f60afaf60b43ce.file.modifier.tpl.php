<?php /* Smarty version Smarty-3.1.1, created on 2014-03-08 01:50:27
         compiled from "modules\CRUDStatutUtilisateur\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6593531a693e0c4c72-98357716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3ace25e4f155b40c3bba8b66f9f60afaf60b43ce' => 
    array (
      0 => 'modules\\CRUDStatutUtilisateur\\tpl\\modifier.tpl',
      1 => 1394239822,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6593531a693e0c4c72-98357716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531a693e118b5',
  'variables' => 
  array (
    'data' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531a693e118b5')) {function content_531a693e118b5($_smarty_tpl) {?><h2>Modification du Statut d'Utilisateur <?php echo $_smarty_tpl->tpl_vars['data']->value->nomStatutUtilisateur;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
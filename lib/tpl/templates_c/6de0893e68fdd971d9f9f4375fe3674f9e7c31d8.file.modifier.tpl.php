<?php /* Smarty version Smarty-3.1.1, created on 2014-03-08 02:01:33
         compiled from "modules\CRUDNiveauUtilisateur\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:10562531a6bed71f4d4-13954234%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6de0893e68fdd971d9f9f4375fe3674f9e7c31d8' => 
    array (
      0 => 'modules\\CRUDNiveauUtilisateur\\tpl\\modifier.tpl',
      1 => 1394240448,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10562531a6bed71f4d4-13954234',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531a6bed778c0',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531a6bed778c0')) {function content_531a6bed778c0($_smarty_tpl) {?><h2>Modification du Statut d'Utilisateur <?php echo $_smarty_tpl->tpl_vars['data']->value->nomNiveauUtilisateur;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
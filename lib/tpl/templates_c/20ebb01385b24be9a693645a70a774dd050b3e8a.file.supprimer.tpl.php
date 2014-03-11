<?php /* Smarty version Smarty-3.1.1, created on 2013-12-15 21:40:45
         compiled from "modules\CRUDUtilisateur\tpl\supprimer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:7252ad93f2904d12-46551290%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '20ebb01385b24be9a693645a70a774dd050b3e8a' => 
    array (
      0 => 'modules\\CRUDUtilisateur\\tpl\\supprimer.tpl',
      1 => 1387140037,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '7252ad93f2904d12-46551290',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52ad93f293033',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ad93f293033')) {function content_52ad93f293033($_smarty_tpl) {?>
<div class="alert alert-warning"><h2>Suppression de <?php echo $_smarty_tpl->tpl_vars['data']->value->nomUtilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->prenomUtilisateur;?>
</h2></div>

<div class='jumbotron'>
	<p>Suppression à exécuter dans le module...</p>
	<p>Normalement on n'atterrit pas sur cette page, une redirection doit être faite</p>
	<p>Sauf si on désire proposer une confirmation à cet endroit (en plus ou en remplacement de la boite de dialogue)</p>
	
	<p class='text-right'>
		<a href="#" class='btn btn-danger'>Supprimer</a>
		<a href="#" class='btn btn-default'>Annuler</a>
	</p>	
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.1, created on 2013-12-15 12:34:11
         compiled from "modules\CRUD\tpl\supprimer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1468652ad93b33d1f16-01878618%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd9e3238562b6bb833de4fc0f5737c707401defd0' => 
    array (
      0 => 'modules\\CRUD\\tpl\\supprimer.tpl',
      1 => 1386840101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1468652ad93b33d1f16-01878618',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52ad93b33fd47',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ad93b33fd47')) {function content_52ad93b33fd47($_smarty_tpl) {?>
<div class="alert alert-warning"><h2>Suppression de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
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
<?php /* Smarty version Smarty-3.1.1, created on 2014-03-10 13:33:37
         compiled from "modules\CRUDGroupeUtilisateur\tpl\ajouter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9263531db121405b86-92827073%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f041a43565041a2928d1c124dc7d26a4fad6accf' => 
    array (
      0 => 'modules\\CRUDGroupeUtilisateur\\tpl\\ajouter.tpl',
      1 => 1394454404,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9263531db121405b86-92827073',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531db121445f6',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531db121445f6')) {function content_531db121445f6($_smarty_tpl) {?><h2>Ajout d'un nouveau groupe (spécialisation)</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
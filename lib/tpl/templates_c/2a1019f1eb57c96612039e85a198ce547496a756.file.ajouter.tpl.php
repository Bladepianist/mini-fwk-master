<?php /* Smarty version Smarty-3.1.1, created on 2013-12-21 14:23:42
         compiled from "modules\CRUDUtilisateur\tpl\ajouter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2510052b595fdb1f300-98494127%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2a1019f1eb57c96612039e85a198ce547496a756' => 
    array (
      0 => 'modules\\CRUDUtilisateur\\tpl\\ajouter.tpl',
      1 => 1387632215,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2510052b595fdb1f300-98494127',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52b595fdb4797',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b595fdb4797')) {function content_52b595fdb4797($_smarty_tpl) {?><h2>Ajout d'un nouvel utilisateur</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
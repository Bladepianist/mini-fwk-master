<?php /* Smarty version Smarty-3.1.1, created on 2014-02-26 01:30:58
         compiled from "modules\CRUDArticle\tpl\ajouter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20677530d2d6275fc63-03425486%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ded38715cbc8d39c84ad8660407db9ea168640a' => 
    array (
      0 => 'modules\\CRUDArticle\\tpl\\ajouter.tpl',
      1 => 1393374653,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20677530d2d6275fc63-03425486',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_530d2d6278901',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d2d6278901')) {function content_530d2d6278901($_smarty_tpl) {?><h2>Ajout d'un nouvel article</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
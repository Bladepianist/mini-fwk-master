<?php /* Smarty version Smarty-3.1.1, created on 2014-03-07 02:08:25
         compiled from "modules\CRUDSemestre\tpl\ajouter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1774153191c0922cf05-97734601%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '395878483f2a1e72a7e4c3f752bbea61de3f15d8' => 
    array (
      0 => 'modules\\CRUDSemestre\\tpl\\ajouter.tpl',
      1 => 1394148620,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1774153191c0922cf05-97734601',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_53191c09270f7',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53191c09270f7')) {function content_53191c09270f7($_smarty_tpl) {?><h2>Ajout d'un nouvel utilisateur</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
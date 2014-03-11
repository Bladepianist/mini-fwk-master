<?php /* Smarty version Smarty-3.1.1, created on 2014-03-08 01:50:52
         compiled from "modules\CRUDStatutUtilisateur\tpl\ajouter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16551531a696c99ff20-94327386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a31250b975fec6fc3e92d9503962ad2130afe4dd' => 
    array (
      0 => 'modules\\CRUDStatutUtilisateur\\tpl\\ajouter.tpl',
      1 => 1394238992,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16551531a696c99ff20-94327386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531a696c9e300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531a696c9e300')) {function content_531a696c9e300($_smarty_tpl) {?><h2>Ajout d'un nouvel UE</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
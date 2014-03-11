<?php /* Smarty version Smarty-3.1.1, created on 2014-03-08 02:10:12
         compiled from "modules\CRUDPosteAdministratif\tpl\ajouter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29276531a6df4088e95-40488112%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf3ad5bb8e333fd5d07ab750cad667f661e6f4cd' => 
    array (
      0 => 'modules\\CRUDPosteAdministratif\\tpl\\ajouter.tpl',
      1 => 1394240897,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29276531a6df4088e95-40488112',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531a6df40d3ab',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531a6df40d3ab')) {function content_531a6df40d3ab($_smarty_tpl) {?><h2>Ajout d'un nouveau Poste Administratif</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
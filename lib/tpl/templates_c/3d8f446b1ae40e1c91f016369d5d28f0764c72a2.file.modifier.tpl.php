<?php /* Smarty version Smarty-3.1.1, created on 2014-03-07 01:39:34
         compiled from "modules\CRUDSemestre\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1894653191546f01db7-92828026%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3d8f446b1ae40e1c91f016369d5d28f0764c72a2' => 
    array (
      0 => 'modules\\CRUDSemestre\\tpl\\modifier.tpl',
      1 => 1394152242,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1894653191546f01db7-92828026',
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
  'unifunc' => 'content_5319154700f96',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5319154700f96')) {function content_5319154700f96($_smarty_tpl) {?><h2>Modification du Semestre <?php echo $_smarty_tpl->tpl_vars['data']->value->nomSemestre;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
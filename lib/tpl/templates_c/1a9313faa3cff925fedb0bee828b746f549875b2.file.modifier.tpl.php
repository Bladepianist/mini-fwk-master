<?php /* Smarty version Smarty-3.1.1, created on 2014-03-07 11:30:50
         compiled from "modules\CRUDStatutSemestre\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1760853199d7390bf20-05630050%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a9313faa3cff925fedb0bee828b746f549875b2' => 
    array (
      0 => 'modules\\CRUDStatutSemestre\\tpl\\modifier.tpl',
      1 => 1394188214,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1760853199d7390bf20-05630050',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_53199d7395c02',
  'variables' => 
  array (
    'data' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53199d7395c02')) {function content_53199d7395c02($_smarty_tpl) {?><h2>Modification du Statut de Semestre <?php echo $_smarty_tpl->tpl_vars['data']->value->nomStatutSemestre;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
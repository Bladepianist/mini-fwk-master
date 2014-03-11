<?php /* Smarty version Smarty-3.1.1, created on 2014-03-09 17:49:55
         compiled from "modules\CRUDMatiere\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27434531c9bb3414c08-41194044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f18202a4102371d0e08d6fc3efea1e88dd1c8e66' => 
    array (
      0 => 'modules\\CRUDMatiere\\tpl\\modifier.tpl',
      1 => 1394383768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27434531c9bb3414c08-41194044',
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
  'unifunc' => 'content_531c9bb34e091',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c9bb34e091')) {function content_531c9bb34e091($_smarty_tpl) {?><h2>Modification du Type de Matiere <?php echo $_smarty_tpl->tpl_vars['data']->value->nomMatiere;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
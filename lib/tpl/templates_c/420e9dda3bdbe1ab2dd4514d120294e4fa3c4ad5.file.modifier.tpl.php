<?php /* Smarty version Smarty-3.1.1, created on 2013-12-15 16:52:33
         compiled from "modules\CRUDUtilisateur\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103052ad9481c95fa9-51305555%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '420e9dda3bdbe1ab2dd4514d120294e4fa3c4ad5' => 
    array (
      0 => 'modules\\CRUDUtilisateur\\tpl\\modifier.tpl',
      1 => 1387122750,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103052ad9481c95fa9-51305555',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52ad9481cd6a2',
  'variables' => 
  array (
    'data' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ad9481cd6a2')) {function content_52ad9481cd6a2($_smarty_tpl) {?><h2>Modification de <?php echo $_smarty_tpl->tpl_vars['data']->value->nomUtilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->prenomUtilisateur;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
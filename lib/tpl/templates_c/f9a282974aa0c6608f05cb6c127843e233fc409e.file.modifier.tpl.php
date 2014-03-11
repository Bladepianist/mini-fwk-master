<?php /* Smarty version Smarty-3.1.1, created on 2014-03-08 02:11:23
         compiled from "modules\CRUDPosteAdministratif\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26981531a6e075804e3-85097084%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f9a282974aa0c6608f05cb6c127843e233fc409e' => 
    array (
      0 => 'modules\\CRUDPosteAdministratif\\tpl\\modifier.tpl',
      1 => 1394241053,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26981531a6e075804e3-85097084',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531a6e075d406',
  'variables' => 
  array (
    'data' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531a6e075d406')) {function content_531a6e075d406($_smarty_tpl) {?><h2>Modification du Poste Administratif <?php echo $_smarty_tpl->tpl_vars['data']->value->nomPosteAdministratif;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
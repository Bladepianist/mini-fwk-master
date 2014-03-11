<?php /* Smarty version Smarty-3.1.1, created on 2014-03-10 13:37:46
         compiled from "modules\CRUDGroupeUtilisateur\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28747531db21a887f29-73523526%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd46fe568abe843f0f743be0beefce46ab6918c00' => 
    array (
      0 => 'modules\\CRUDGroupeUtilisateur\\tpl\\modifier.tpl',
      1 => 1394454502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28747531db21a887f29-73523526',
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
  'unifunc' => 'content_531db21a951b1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531db21a951b1')) {function content_531db21a951b1($_smarty_tpl) {?><h2>Modification de <?php echo $_smarty_tpl->tpl_vars['data']->value->nomGroupeUtilisateur;?>
</h2>


<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
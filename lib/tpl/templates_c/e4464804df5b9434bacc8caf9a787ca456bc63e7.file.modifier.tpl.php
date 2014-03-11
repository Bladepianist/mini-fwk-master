<?php /* Smarty version Smarty-3.1.1, created on 2014-03-10 12:57:04
         compiled from "modules\CRUDProfesseur\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20438531da8907ad404-09776726%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e4464804df5b9434bacc8caf9a787ca456bc63e7' => 
    array (
      0 => 'modules\\CRUDProfesseur\\tpl\\modifier.tpl',
      1 => 1394452576,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20438531da8907ad404-09776726',
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
  'unifunc' => 'content_531da8908a901',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531da8908a901')) {function content_531da8908a901($_smarty_tpl) {?><h2>Modification de <?php echo $_smarty_tpl->tpl_vars['data']->value->nomProfesseur;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->prenomProfesseur;?>
</h2>


<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
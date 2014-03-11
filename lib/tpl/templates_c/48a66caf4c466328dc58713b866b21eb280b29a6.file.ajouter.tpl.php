<?php /* Smarty version Smarty-3.1.1, created on 2014-03-10 12:59:17
         compiled from "modules\CRUDProfesseur\tpl\ajouter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29428531da91531ee83-72826817%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48a66caf4c466328dc58713b866b21eb280b29a6' => 
    array (
      0 => 'modules\\CRUDProfesseur\\tpl\\ajouter.tpl',
      1 => 1394452465,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29428531da91531ee83-72826817',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531da9153d6ea',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531da9153d6ea')) {function content_531da9153d6ea($_smarty_tpl) {?><h2>Ajout d'un nouveau professeur</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
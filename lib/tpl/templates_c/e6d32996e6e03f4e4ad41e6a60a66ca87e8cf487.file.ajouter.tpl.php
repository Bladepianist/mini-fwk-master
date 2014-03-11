<?php /* Smarty version Smarty-3.1.1, created on 2014-03-04 20:35:59
         compiled from "modules\CRUDCommentaire\tpl\ajouter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:303255316260e98e304-77188551%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e6d32996e6e03f4e4ad41e6a60a66ca87e8cf487' => 
    array (
      0 => 'modules\\CRUDCommentaire\\tpl\\ajouter.tpl',
      1 => 1393961755,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '303255316260e98e304-77188551',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_5316260e9dc91',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5316260e9dc91')) {function content_5316260e9dc91($_smarty_tpl) {?><h2>Ajout d'un nouveau commentaire</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
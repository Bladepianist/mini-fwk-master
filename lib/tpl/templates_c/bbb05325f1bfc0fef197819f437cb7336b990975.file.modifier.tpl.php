<?php /* Smarty version Smarty-3.1.1, created on 2013-12-22 03:40:56
         compiled from "modules\CRUDNote\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2663152b5801435b8c0-49618164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bbb05325f1bfc0fef197819f437cb7336b990975' => 
    array (
      0 => 'modules\\CRUDNote\\tpl\\modifier.tpl',
      1 => 1387680051,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2663152b5801435b8c0-49618164',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52b580143ce65',
  'variables' => 
  array (
    'data' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b580143ce65')) {function content_52b580143ce65($_smarty_tpl) {?><h2>Modification de <?php echo $_smarty_tpl->tpl_vars['data']->value->idNote;?>
 du <?php echo $_smarty_tpl->tpl_vars['data']->value->dateNote;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
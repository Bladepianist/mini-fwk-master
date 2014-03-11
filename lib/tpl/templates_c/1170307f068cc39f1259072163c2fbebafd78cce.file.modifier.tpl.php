<?php /* Smarty version Smarty-3.1.1, created on 2014-03-07 11:19:28
         compiled from "modules\CRUDUE\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21779531994bf561298-78692118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1170307f068cc39f1259072163c2fbebafd78cce' => 
    array (
      0 => 'modules\\CRUDUE\\tpl\\modifier.tpl',
      1 => 1394186505,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21779531994bf561298-78692118',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531994bf6a18b',
  'variables' => 
  array (
    'data' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531994bf6a18b')) {function content_531994bf6a18b($_smarty_tpl) {?><h2>Modification de l'UE <?php echo $_smarty_tpl->tpl_vars['data']->value->nomUE;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
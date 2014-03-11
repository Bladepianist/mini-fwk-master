<?php /* Smarty version Smarty-3.1.1, created on 2014-03-11 19:27:00
         compiled from "modules\CRUDDepartement\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14049531a72a8ce7155-31460117%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52a8c31246be5404b7fee65e8297fce8f0848068' => 
    array (
      0 => 'modules\\CRUDDepartement\\tpl\\modifier.tpl',
      1 => 1394242277,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14049531a72a8ce7155-31460117',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531a72a8d3973',
  'variables' => 
  array (
    'data' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531a72a8d3973')) {function content_531a72a8d3973($_smarty_tpl) {?><h2>Modification du Département "<?php echo $_smarty_tpl->tpl_vars['data']->value->nomDepartement;?>
"</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
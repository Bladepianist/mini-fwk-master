<?php /* Smarty version Smarty-3.1.1, created on 2014-03-09 17:18:58
         compiled from "modules\CRUDControle\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8620531c94725cc782-79910156%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17533145ef48fdddb0722d7f11fada35113e6249' => 
    array (
      0 => 'modules\\CRUDControle\\tpl\\modifier.tpl',
      1 => 1394381208,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8620531c94725cc782-79910156',
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
  'unifunc' => 'content_531c947269a98',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c947269a98')) {function content_531c947269a98($_smarty_tpl) {?><h2>Modification du Type de Controle <?php echo $_smarty_tpl->tpl_vars['data']->value->nomControle;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
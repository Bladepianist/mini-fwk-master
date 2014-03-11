<?php /* Smarty version Smarty-3.1.1, created on 2014-03-11 19:19:42
         compiled from "modules\CRUDNote\tpl\ajouter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21474530d366fce0904-83716852%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '847760580e622b4d821b7b18a3586acdf4a4046f' => 
    array (
      0 => 'modules\\CRUDNote\\tpl\\ajouter.tpl',
      1 => 1394380914,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21474530d366fce0904-83716852',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_530d366fd0995',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d366fd0995')) {function content_530d366fd0995($_smarty_tpl) {?><h2>Ajout d'un nouveau type de controle</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
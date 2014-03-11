<?php /* Smarty version Smarty-3.1.1, created on 2014-03-07 10:53:19
         compiled from "modules\CRUDUE\tpl\ajouter.tpl" */ ?>
<?php /*%%SmartyHeaderCode:131365319970f83a326-96353917%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '17dcbb01c182b50de7f5151452254d92f3a38644' => 
    array (
      0 => 'modules\\CRUDUE\\tpl\\ajouter.tpl',
      1 => 1394153578,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131365319970f83a326-96353917',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_5319970f985b8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5319970f985b8')) {function content_5319970f985b8($_smarty_tpl) {?><h2>Ajout d'un nouvel utilisateur</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.1, created on 2013-12-12 10:37:35
         compiled from "modules\CRUD\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2183652a983dfb71b18-46459018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5f043512596bdb0c8761ebf79aa6ead9810cc610' => 
    array (
      0 => 'modules\\CRUD\\tpl\\detail.tpl',
      1 => 1386840101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2183652a983dfb71b18-46459018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'reference' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52a983dfb9983',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52a983dfb9983')) {function content_52a983dfb9983($_smarty_tpl) {?>
<div class="alert alert-info"><h2>Aperçu de <?php echo $_smarty_tpl->tpl_vars['reference']->value;?>
</h2></div>

<div class='jumbotron'>
	<p>Afficher les détails de l'enregistrement...</p>
	<a href="#" class='btn btn-danger'>Supprimer</a>
	<a href="#" class='btn btn-default'>Modifier</a>
</div><?php }} ?>
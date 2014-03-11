<?php /* Smarty version Smarty-3.1.1, created on 2014-03-04 20:04:11
         compiled from "modules\CRUDCommentaire\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:144025316232fe55cc3-87230243%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd166b6b87932d2c5fdc2bb0e6b4b211435a8b358' => 
    array (
      0 => 'modules\\CRUDCommentaire\\tpl\\modifier.tpl',
      1 => 1393959847,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '144025316232fe55cc3-87230243',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_53162330045f5',
  'variables' => 
  array (
    'data' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53162330045f5')) {function content_53162330045f5($_smarty_tpl) {?><h2>Modification du commentaire "<?php echo $_smarty_tpl->tpl_vars['data']->value->idCommentaire;?>
" de <?php echo $_smarty_tpl->tpl_vars['data']->value->prenomUtilisateur;?>
 <?php echo $_smarty_tpl->tpl_vars['data']->value->nomUtilisateur;?>
, article "<?php echo $_smarty_tpl->tpl_vars['data']->value->titreArticle;?>
"</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
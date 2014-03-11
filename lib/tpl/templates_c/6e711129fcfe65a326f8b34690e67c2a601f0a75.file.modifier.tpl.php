<?php /* Smarty version Smarty-3.1.1, created on 2014-02-26 01:19:43
         compiled from "modules\CRUDArticle\tpl\modifier.tpl" */ ?>
<?php /*%%SmartyHeaderCode:25620530d32a980bd82-24719357%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6e711129fcfe65a326f8b34690e67c2a601f0a75' => 
    array (
      0 => 'modules\\CRUDArticle\\tpl\\modifier.tpl',
      1 => 1393373961,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25620530d32a980bd82-24719357',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_530d32a986c39',
  'variables' => 
  array (
    'data' => 0,
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_530d32a986c39')) {function content_530d32a986c39($_smarty_tpl) {?><h2>Modification de "<?php echo $_smarty_tpl->tpl_vars['data']->value->titreArticle;?>
" de <?php echo $_smarty_tpl->tpl_vars['data']->value->idUtilisateur;?>
</h2>

<div class='jumbotron'>
	<p>
	Tous les champs marqués d'une * sont obligatoires.
	</p>
	<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

	<div style='clear:both'></div>
</div><?php }} ?>
<?php /* Smarty version Smarty-3.1.1, created on 2014-03-09 17:16:54
         compiled from "modules\CRUDControle\tpl\detail.tpl" */ ?>
<?php /*%%SmartyHeaderCode:21343531c93f66587f3-80030057%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '14beed7802dd95c30c2fc1123a2460c3e1407ad8' => 
    array (
      0 => 'modules\\CRUDControle\\tpl\\detail.tpl',
      1 => 1394380983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21343531c93f66587f3-80030057',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_531c93f6820f8',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_531c93f6820f8')) {function content_531c93f6820f8($_smarty_tpl) {?><div class="alert alert-info"><h2>Aperçu du type de controle "<?php echo $_smarty_tpl->tpl_vars['data']->value->typeControle;?>
"</h2></div>

<div class='jumbotron'>
	<p>
		<table>
			<tr>
				<td>Identifiant : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->idControle;?>
</td>
			</tr>
			<tr>
				<td>Nom : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->typeControle;?>
</td>
			</tr>
			<tr>
				<td>Coefficient : </td><td><?php echo $_smarty_tpl->tpl_vars['data']->value->coeffControle;?>
</td>
			</tr>
		</table>
	</p>
	
	<a href='?module=CRUDControle&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idControle;?>
' class='btn btn-danger'>Supprimer</a>
	<a href='?module=CRUDControle&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['data']->value->idControle;?>
' class='btn btn-default'>Modifier</a>
</div><?php }} ?>
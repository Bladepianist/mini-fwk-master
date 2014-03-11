<?php /* Smarty version Smarty-3.1.1, created on 2013-12-15 12:13:11
         compiled from "modules\TestChk\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1043252ad8ec7e6b9c9-21215211%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '72f4a58639f89bbbae2824a0d8d1abb2de6e912b' => 
    array (
      0 => 'modules\\TestChk\\tpl\\index.tpl',
      1 => 1386840102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1043252ad8ec7e6b9c9-21215211',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'donnees' => 0,
    'l' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52ad8ec81d84a',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52ad8ec81d84a')) {function content_52ad8ec81d84a($_smarty_tpl) {?><form method='POST' action='?module=TestChk&action=valide'>
<table>
<?php  $_smarty_tpl->tpl_vars['l'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['l']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['donnees']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['l']->key => $_smarty_tpl->tpl_vars['l']->value){
$_smarty_tpl->tpl_vars['l']->_loop = true;
?>

<tr>	
	<td><?php echo $_smarty_tpl->tpl_vars['l']->value['Civ'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['l']->value['Nom'];?>
</td>
	<td><?php echo $_smarty_tpl->tpl_vars['l']->value['Actif'];?>
</td>
	<td><input type='checkbox' name='selec[]' value='<?php echo $_smarty_tpl->tpl_vars['l']->value['id'];?>
'></td>
</tr>

<?php } ?>
</table>
<input type='submit' name="do" value="Supprimer"/>
<input type='submit' name="do" value="Bannir"/>
<input type='submit' name="do" value="Activer"/>
</form>
<div style='clear:both' />
<?php }} ?>
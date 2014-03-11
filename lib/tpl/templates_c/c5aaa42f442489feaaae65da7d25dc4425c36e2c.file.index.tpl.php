<?php /* Smarty version Smarty-3.1.1, created on 2013-12-23 11:29:40
         compiled from "modules\Ajax\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28775285ecf443ef29-62970620%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c5aaa42f442489feaaae65da7d25dc4425c36e2c' => 
    array (
      0 => 'modules\\Ajax\\tpl\\index.tpl',
      1 => 1386840101,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28775285ecf443ef29-62970620',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_5285ecf446cb8',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5285ecf446cb8')) {function content_5285ecf446cb8($_smarty_tpl) {?>Exemple d'utilisation d'une action de module pour générer du contenu JSON
<code>
<pre>

$(function(){
	$('#ajax').autocomplete({source: "?module=Ajax&action=ajax"})}
)


</pre>
</code>

<p>
Tapez un nombre en lettres [un,deux,trois...]
</p>
<p>
Formulaire:  
</p>
<script>

$(function(){
	$('#ajax').autocomplete({source: "?module=Ajax&action=ajax"})}
)

</script>
<input type='text' id='ajax' />
<div style='clear:both'></div><?php }} ?>
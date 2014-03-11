<?php /* Smarty version Smarty-3.1.1, created on 2013-11-19 10:56:57
         compiled from "modules\DownloadFile\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:163805285e985dd7be2-71966744%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '18a553953763594afae11820fbabda9ffec3f3bd' => 
    array (
      0 => 'modules\\DownloadFile\\tpl\\index.tpl',
      1 => 1384246022,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163805285e985dd7be2-71966744',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_5285e985dff34',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5285e985dff34')) {function content_5285e985dff34($_smarty_tpl) {?><p>
Utilisation des headers php pour générer du contenu autre que HTML vers le navigateur
</p>
<code>
<pre>
		header("Content-type: text/plain; charset=utf8");
		header('Content-Disposition: attachment; filename="exemple.txt"');
		echo "du texte";
		exit;

</pre>
</code>


<ul>
	<li><a href="?module=DownloadFile&action=textbrut">Text Brut</a></li>
	<li><a href="?module=DownloadFile&action=csv">CSV</a></li>
	<li><a href="?module=DownloadFile&action=imagegd">Image générée</a></li>
	<li><a href="?module=DownloadFile&action=imagechargee">Image chargée du disque</a></li>	
</ul><?php }} ?>
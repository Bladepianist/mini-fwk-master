<?php /* Smarty version Smarty-3.1.1, created on 2013-12-12 10:34:21
         compiled from "modules\index\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:29431527cd135bee5b6-02751663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '170d1c2e2555d27575aa068243c2c37ab99f299b' => 
    array (
      0 => 'modules\\index\\tpl\\index.tpl',
      1 => 1386840102,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29431527cd135bee5b6-02751663',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_527cd135c173f',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_527cd135c173f')) {function content_527cd135c173f($_smarty_tpl) {?><script>
$(function(){
	
$("a[href='?module=Redirect']").click(function(){
$('h2').prepend("<p id='load' style=';height:40pt;border:3px gray solid;border-radius:10px;text-align:center'>Patientez quelques secondes</p>");
	})	
	
})
</script>
<h2>Page index du site.</h2>

<h3>Install</h3>
<ul style='margin:30px'>
	<li>éditer conf/Params.ini.php pour paramétrer l'accès à la base de données</li>
</ul>

<h3>Exemples de modules</h3>
<ol style='margin:30px'>
	<li>affichage d'un simple template</li>
	<li>affiche et "valide" un formulaire</li>
	<li>effectue un traitement silencieux et redirige vers la page d'accueil</li>
	<li>génère du contenu et l'envoie sous forme de fichier</li>
	<li>exemple ajax/jquery</li>	
</ol><?php }} ?>
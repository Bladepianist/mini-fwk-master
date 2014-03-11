<?php /* Smarty version Smarty-3.1.1, created on 2013-12-23 11:44:50
         compiled from "modules\Inscription\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:31782528f6ffdc0c4e7-33266909%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b5e12546ee2a362149bbba24c73afc19cb157ee2' => 
    array (
      0 => 'modules\\Inscription\\tpl\\index.tpl',
      1 => 1387795337,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31782528f6ffdc0c4e7-33266909',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_528f6ffdd644c',
  'variables' => 
  array (
    'form' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_528f6ffdd644c')) {function content_528f6ffdd644c($_smarty_tpl) {?><script>

    
        $(function() {
            $("#idDepartement").blur(function(){
                $.getJSON('?module=Inscription&action=ajax', {idDepartement:$(this).val()}, function(data) {

                        var options = "";
                        if(data != null) {
                                for(var i in data) {

                                        options += '<option value="' + data[i] + '">' + data[i] + '</option>';
                                }
                        }

                        if(options != "") {
                                $("#idGroupeUtilisateur").html(options);
                                $("#idGroupeUtilisateur").attr("disabled", false);
                        }
                });
        });
    });

</script>

<p>
Tous les champs marqués d'une * sont obligatoires.
</p>
<?php echo $_smarty_tpl->tpl_vars['form']->value;?>

<div style='clear:both'></div><?php }} ?>
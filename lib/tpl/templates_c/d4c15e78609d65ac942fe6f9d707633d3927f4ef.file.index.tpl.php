<?php /* Smarty version Smarty-3.1.1, created on 2013-12-21 14:22:00
         compiled from "modules\CRUDUtilisateur\tpl\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2118752b595f8131f84-72643018%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4c15e78609d65ac942fe6f9d707633d3927f4ef' => 
    array (
      0 => 'modules\\CRUDUtilisateur\\tpl\\index.tpl',
      1 => 1387632104,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2118752b595f8131f84-72643018',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'donnees' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.1',
  'unifunc' => 'content_52b595f8190b1',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52b595f8190b1')) {function content_52b595f8190b1($_smarty_tpl) {?>
<script>
//demande confirmation sur click d'un bouton supprimer
$(function() {
	//sur click d'un bouton de suppression
	$('a.glyphicon-remove').click(function(ev){
		//récupérer le href du lien
		//et l'utiliser pour le bouton de confirmation
		$('#go').attr("href",$(this).attr('href'))	

		//afficher la boite de dialogue
		$('#myModal').modal();
	
		//supprimer le comportement par défaut du lien d'origine
		ev.preventDefault();				
	})


//efface les données de la boite de dialogue après affichage
	$('body').on('hidden.bs.modal', '.modal', function () {
    	$(this).removeData('bs.modal');
    });	
	
	
});
</script>


<h2>Liste des Utilisateurs</h2>
	<p class="text-right">
		<a href='?module=CRUDUtilisateur&action=ajouter' class='btn btn-success glyphicon glyphicon-plus'> Ajouter</a>
	</p>
	<table class='table table-striped'>
		<thead>
			<th>Identifiant</th><th>Nom</th><th>Prénom</th><th>Actions</th>
		</thead>
		<tbody>
		<?php  $_smarty_tpl->tpl_vars['donnees'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['donnees']->_loop = false;
 $_smarty_tpl->tpl_vars['ligne'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['data']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['donnees']->key => $_smarty_tpl->tpl_vars['donnees']->value){
$_smarty_tpl->tpl_vars['donnees']->_loop = true;
 $_smarty_tpl->tpl_vars['ligne']->value = $_smarty_tpl->tpl_vars['donnees']->key;
?>
			<tr class='table-striped'>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['idUtilisateur'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['nomUtilisateur'];?>
</td>
				<td><?php echo $_smarty_tpl->tpl_vars['donnees']->value['prenomUtilisateur'];?>
</td>
				<td>
					<!--voir le détail-->
					<a class='glyphicon glyphicon-search' 
						data-toggle="modal" 
						data-target="#inclusion" 
						href='?module=CRUDUtilisateur&action=detail&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['idUtilisateur'];?>
&displayModuleInDialog=1'>
					</a> 				

					<!--modifier-->
					<a class='glyphicon glyphicon-pencil' 
						data-toggle="modal" 
						data-target="#inclusion"
						href='?module=CRUDUtilisateur&action=modifier&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['idUtilisateur'];?>
&displayModuleInDialog=1'>
					</a>

					<!--supprimer-->
					<a class='glyphicon glyphicon-remove' title='Supprimer <?php echo $_smarty_tpl->tpl_vars['donnees']->value['nomUtilisateur'];?>
 <?php echo $_smarty_tpl->tpl_vars['donnees']->value['prenomUtilisateur'];?>
' 
						href='?module=CRUDUtilisateur&action=supprimer&id=<?php echo $_smarty_tpl->tpl_vars['donnees']->value['idUtilisateur'];?>
'></a>				
				</td>
			</tr>
		<?php }
if (!$_smarty_tpl->tpl_vars['donnees']->_loop) {
?>	
			<tr><td colspan='3'>Aucune donnée</td></tr>
		<?php } ?>
		</tbody>
	</table>
	
	
	
	
	
	
<!-- boite de dialogue confirmation -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Confirmation</h4>
      </div>
      <div class="modal-body">
        Êtes vous sûr de vouloir supprimer cet utilisateur ? 
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-default" data-dismiss="modal">Fermer</a>
        <a href="#" class="btn btn-primary" id='go'>Confirmer</a>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

	
	
<!-- boite de dialogue inclusion-->
<div class="modal fade" id="inclusion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true"></div><?php }} ?>
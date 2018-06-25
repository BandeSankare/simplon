<?php
/* Smarty version 3.1.30, created on 2018-05-24 16:13:27
  from "/var/www/html/projetSimplon/monsamane/view/test/liste.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b06e4a7021ae3_93228683',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '76860d3f8c592281ed431a79b638fa5cb8466229' => 
    array (
      0 => '/var/www/html/projetSimplon/monsamane/view/test/liste.html',
      1 => 1527178404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b06e4a7021ae3_93228683 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page liste</title>
		<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/bootstrap.min.css"/>
		<link type="text/css" rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/css/samane.css"/>
		<style>
			h1{ 
				color: #40007d;
			}
		</style>
	</head>
	<body>
		<img src="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
public/image/logo.jpg" class="resize" />
		<div class="nav navbar navbar-default navbar-fixed-top">
			<ul class="nav navbar-nav">
				<!-- l'appel de <?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
 vous permet de recupérer le chemin de votre site web  -->
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/index">Accueil</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/getID/1">Test</a></li>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Liste des produits</a></li>
			</ul>
		</div>
		<div class="col-md-8 col-xs-12 col-md-offset-2" style="margin-top:150px;">
			<div class="panel panel-info">
				<div class="panel-heading">BIENVENUE A VOTRE MODELE MVC</div>
				<div class="panel-body">
					<div class="alert alert-success" style="font-size:18px; text-align:justify;">
						<h1>Listes des produits et catégories</h1>
					</div>
					<?php if (isset($_smarty_tpl->tpl_vars['tests']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['tests']->value != null) {?>
							<table class="table table-bordered table-stripped">
								<tr>
									<th>Identifiant</th>
									<th>reference Produit</th>
									<th>Libellé Produit</th>
									<th>Quantité stock</th>	
									<th>Catégorie</th>
									<th>Action</th>
									<th>Action</th>
								</tr>
								<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tests']->value, 'Produit');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['Produit']->value) {
?>
									<tr>
										<td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['idP'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['refP'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['libProd'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['qtStock'];?>
</td>
										<td><?php echo $_smarty_tpl->tpl_vars['Produit']->value['libC'];?>
</td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/delete/<?php echo $_smarty_tpl->tpl_vars['Produit']->value['idP'];?>
">Supprimer</a></td>
										<td><a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/edit/<?php echo $_smarty_tpl->tpl_vars['Produit']->value['idP'];?>
">Modifier</a></td>
									</tr>
								<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

							</table>
						<?php } else { ?>
							Liste vide
						<?php }?>
					<?php }?>
				</div>
				<a href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/add" id="addProd">Ajout produit</a>
			</div>
		</div>
		
	</body>
</html>
<?php }
}

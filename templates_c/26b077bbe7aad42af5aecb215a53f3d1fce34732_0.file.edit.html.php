<?php
/* Smarty version 3.1.30, created on 2018-05-24 16:13:29
  from "/var/www/html/projetSimplon/monsamane/view/test/edit.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b06e4a93e3e01_92798711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26b077bbe7aad42af5aecb215a53f3d1fce34732' => 
    array (
      0 => '/var/www/html/projetSimplon/monsamane/view/test/edit.html',
      1 => 1527178369,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b06e4a93e3e01_92798711 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
	<head>
		<meta charset="UTF-8">
		<title>page get id</title>
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
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/update">
						<div class="form-group">
							<label class="control-label">Identifiant du produit</label>
							<input class="form-control" type="text" name="id" id="id" value="<?php if (isset($_smarty_tpl->tpl_vars['Produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['Produit']->value['idP'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Reference du Produit</label>
							<input class="form-control" type="text" name="refP" id="refP" value="<?php if (isset($_smarty_tpl->tpl_vars['Produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['Produit']->value['refP'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Libellé du Produit</label>
							<input class="form-control" type="text" name="libProd" id="libProd" value="<?php if (isset($_smarty_tpl->tpl_vars['Produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['Produit']->value['libProd'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Quantité</label>
							<input class="form-control" type="text" name="qtStock" id="qtStock" value="<?php if (isset($_smarty_tpl->tpl_vars['Produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['Produit']->value['qtStock'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<label class="control-label">Catégorie</label>
							<input class="form-control" type="text" name="libC" id="libC" value="<?php if (isset($_smarty_tpl->tpl_vars['Produit']->value)) {?> <?php echo $_smarty_tpl->tpl_vars['Produit']->value['libC'];?>
 <?php }?>"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="modifier" value="Modifier"/>
							<a class="btn btn-primary" href="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/liste">Retour</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}

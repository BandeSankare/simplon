<?php
/* Smarty version 3.1.30, created on 2018-05-24 16:13:40
  from "/var/www/html/projetSimplon/monsamane/view/test/add.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b06e4b4753f09_50626066',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a59a1daec0f3ac843aae16034229139145b6de79' => 
    array (
      0 => '/var/www/html/projetSimplon/monsamane/view/test/add.html',
      1 => 1527178301,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b06e4b4753f09_50626066 (Smarty_Internal_Template $_smarty_tpl) {
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
					<?php if (isset($_smarty_tpl->tpl_vars['ok']->value)) {?>
						<?php if ($_smarty_tpl->tpl_vars['ok']->value != 0) {?>
							<div class="alert alert-success">Données ajoutées!</div>
						<?php } else { ?>
							<div class="alert alert-danger">Erreur!</div>
						<?php }?>
					<?php }?>
					<form method="post" action="<?php echo $_smarty_tpl->tpl_vars['url_base']->value;?>
Test/add">
						<div class="form-group">
							<label class="control-label">Reference produit</label>
							<input class="form-control" type="text" name="refP" id="refP"/>
						</div>
						<div class="form-group">
							<label class="control-label">Libellé produit</label>
							<input class="form-control" type="text" name="libProd" id="libProd"/>
						</div>
						<div class="form-group">
							<label class="control-label">Quantité</label>
							<input class="form-control" type="text" name="qtStock" id="qtStock"/>
						</div>
						<div class="form-group">
							<label class="control-label">Catégorie</label>
							<input class="form-control" type="text" name="libC" id="libC"/>
						</div>
						<div class="form-group">
							<input class="btn btn-success" type="submit" name="valider" value="Envoyer"/>
							<input class="btn btn-danger" type="reset" name="annuler" value="Annuler"/>
						</div>
					</form>
				</div>
			</div>
		</div>
	</body>
</html><?php }
}

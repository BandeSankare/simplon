<?php
/* Smarty version 3.1.30, created on 2018-05-24 11:14:22
  from "/var/www/html/projetSimplon/monsamane/view/test/get_id.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5b069e8e01c512_95143856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'baa53d47256a543f2f31ac567042cf0ba5fd0ca5' => 
    array (
      0 => '/var/www/html/projetSimplon/monsamane/view/test/get_id.html',
      1 => 1527160456,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b069e8e01c512_95143856 (Smarty_Internal_Template $_smarty_tpl) {
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
					<div class="alert alert-success" style="font-size:18px; text-align:justify;">
						Merci, l'équipe samanemvc vous remercie :) : 
						je vous ai préparé un CRUD qui marche, il suffit tout simplement d'importer
						la base de données qui se trouve dans le dossier view puis test (view/test);
						cette base s'appelle samane_test.sql et elle comporte une seule table nommée test.
						ça vous sera très utile j'espère.
						<br/>Et surtout noubliez pas de configurer votre base de données : ou? Dans le dossier config
						puis éditez le fichier database.php. Mettez à on l'etat de la base! Bon code!!!!  :)
					</div>
					MODELE DEVELOPPE PAR Ngor SECK !
					<br/>
					<h1>Valeur de l'identifiant revoyée par le controller : <?php echo $_smarty_tpl->tpl_vars['idP']->value;?>
</h1>
				</div>
			</div>
		</div>
		
	</body>
</html><?php }
}

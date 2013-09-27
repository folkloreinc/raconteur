<?php

	$title = !isset($title) ? 'Administration':$title;

?>
<!doctype html>
<!--[if IE ]> <html class="ie" lang="<?=$language?>"> <![endif]-->
<!--[if !(IE) ]><!--> <html lang="<?=$language?>"> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="content-language" content="<?=$language?>-ca">

	<title><?=$title?></title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-ico">
	<link rel="icon" href="/favicon.gif" type="image/gif">

	<!-- CSS -->
	<?=Asset::container('head')->styles()?>

	<!-- Head Javascript -->
	<script type="text/javascript">
		var LANGUAGE = "<?=$language?>";
		var WINDOW_LOADED = false;
		var CKEDITOR_BASEPATH = '/js/components/ckeditor/';
	</script>
	<?=Asset::container('head')->scripts()?>

</head>
<body class="<?=str_replace('.','_',$route)?>" onload="WINDOW_LOADED = true;">

	<header id="header">
		<nav class="top-bar" data-options="back_text:Retour">
			<ul class="title-area">
				<li class="name">
					<h1><a href="<?=URL::route('admin')?>">Administration</a></h1>
				</li>
				<li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>

			<?php if(Auth::check()) { ?>
			<section class="top-bar-section">
				<ul class="right">
					<li class="has-dropdown">
						<a href="<?=URL::route('admin.pages.index')?>">Pages</a>

						<ul class="dropdown">
							<li><a href="<?=URL::route('admin.pages.edit',array('accueil'))?>">Accueil</a></li>
							<li><a href="<?=URL::route('admin.pages.edit',array('a-propos'))?>">À propos</a></li>
							<li class="divider"></li>
							<li><a href="<?=URL::route('admin.pages.index')?>">Voir toutes les pages →</a></li>
						</ul>
					</li>
					<li class="divider"></li>
					<li class="has-dropdown">
						<a href="<?=URL::route('admin.users.index')?>">Utilisateurs</a>

						<ul class="dropdown">
							<li><a href="<?=URL::route('admin.users.create')?>">Ajouter un utilisateur</a></li>
							<li class="divider"></li>
							<li><a href="<?=URL::route('admin.users.index')?>">Voir tous les utilisateurs →</a></li>
						</ul>
					</li>
					<li class="divider"></li>
					<li><a href="<?=URL::action('AdminLoginController@getLogout')?>">Déconnexion</a></li>
				</ul>
			</section>
			<?php } ?>
		</nav>

	</header>
	
	<section id="content">
		<div class="container">
			<div class="row">
				<div class="small-12 columns">
					<?=!isset($content) ? '':$content?>
				</div>
			</div>
		</div>
	</section>

	<!-- Footer javascript -->
	<?=Asset::container('footer')->scripts()?>

</body>
</html>
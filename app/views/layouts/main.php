<?php

	$title = !isset($title) ? trans('meta.title'):$title;
	$description = !isset($description) ? trans('meta.description'):$description;
	$thumbnail = !isset($thumbnail) ? ('http://'.$_SERVER['HTTP_HOST'].'/img/facebook.jpg'):$thumbnail;

?><!--


MMMMMMMMMN  :hNMMMMMNd/  yMM       `MMMo .hMMNs. dMM        +dNMMMMMNh-  mMMMMMMMmy`  dMMMMMMMMM
MMMd        mMMm+++dMMM` yMM       `MMMs NMNy.   dMM       .MMMh+++NMMd  mMMm  oMMMo  dMMN
MMMdsssso   NMMh   sMMM` yMM       `MMMMMMMh.    dMM       .MMM+   dMMd  mMMmoosMMM+  dMMNdddds 
MMMNddddh   NMMh   sMMM` yMM       `MMMMh MMNy   dMM       .MMM+   dMMd  mMMNmNMMM+   dMMNsssss 
MMMy`````   mMMNsosmMMN` yMMoooooo `MMMs  -mMMh  dMMoooooo .MMMdoosNMMh  mMMd`.yMMN/  dMMM
NNNs        -ymNNNNNmh:  yNNNNNNNN `NNNo   hNNh  hNNNNNNNN  /hmNNNNNmy.  dNNh  `NNNo  hNNNNNNNNN


Atelierfolklore.ca
Author: Folklore (http://atelierfolklore.ca)
Email: info@atelierfolklore.ca
Version: 2.0
Source Code: https://github.com/Folkloreatlier/atelierfolklore.ca

** Technologies used **
Laravel 4 (http://laravel.com/)
Yeoman (http://yeoman.io/)
Require.js (http://requirejs.org/)
Backbone (http://backbonejs.org/)
Sass (http://requirejs.org/)

*** Tools ****
Sublime Text 3 (http://www.sublimetext.com/3)
iTerm
zsh 

-->
<!doctype html>
<!--[if IE ]> <html class="ie" lang="<?=$language?>"> <![endif]-->
<!--[if !(IE) ]><!--> <html lang="<?=$language?>"> <!--<![endif]-->
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta http-equiv="content-language" content="<?=$language?>-ca">

	<title><?=$title?></title>
	<meta name="description" content="<?=$description?>">

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="shortcut icon" href="/favicon.ico" type="image/x-ico">
	<link rel="icon" href="/favicon.gif" type="image/gif">

	<!-- Open Graph meta -->
	<meta property="og:locale" content="<?=$language?>_CA"> 
	<meta property="og:image" content="<?=$thumbnail?>">
	<meta property="og:title" content="<?=$title?>">
	<meta property="og:type" content="website">
	<meta property="og:description" content="<?=$description?>">
	<meta property="og:url" content="<?=Request::url()?>">

	<!-- CSS -->
	<?=Asset::container('head')->styles()?>

	<!-- Head Javascript -->
	<script type="text/javascript">
		var LANGUAGE = "<?=$language?>";
		var WINDOW_LOADED = false;
	</script>
	<?=Asset::container('head')->scripts()?>

</head>
<body class="<?=str_replace('.','_',$route)?>" onload="WINDOW_LOADED = true;">

	<script>

		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		ga('create', '');
		ga('send', 'pageview');

	</script>

	<header id="header">


	</header>
	
	<section id="content">
		<?=!isset($content) ? '':$content?>
	</section>

	<!-- Footer javascript -->
	<?=Asset::container('footer')->scripts()?>

</body>
</html>
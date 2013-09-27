<?php

View::share('language', Config::get('app.locale'));
View::share('otherLanguage', Config::get('app.locale') == 'fr' ? 'en':'fr');

View::composer(array('layouts.main'), function($view) {

	$headContainer = Asset::container('head');
	$headContainer->add('modernizr','js/components/modernizr/modernizr.js');
	$headContainer->add('styles','css/main.css');

	//Footer Assets
	$footerContainer = Asset::container('footer');
	$footerContainer->add('utils','js/utils.js');
	if(App::environment() == 'local') {
		$footerContainer->add('main','js/components/requirejs/require.js',array(),array('data-main'=>'/js/main'));
	} else {
		$footerContainer->add('main','js/main-build.js');
	}

	$view->with(array(
		'route' => Route::currentRouteName()
	));

});

View::composer(array('layouts.admin'), function($view) {

	$headContainer = Asset::container('head');
	$headContainer->add('modernizr','js/components/modernizr/modernizr.js');
	$headContainer->add('styles','css/admin.css');

	//Footer Assets
	$footerContainer = Asset::container('footer');
	$footerContainer->add('utils','js/utils.js');
	if(App::environment() == 'local') {
		$footerContainer->add('admin','js/components/requirejs/require.js',array(),array('data-main'=>'/js/admin'));
	} else {
		$footerContainer->add('admin','js/admin-build.js');
	}

	$view->with(array(
		'route' => Route::currentRouteName()
	));

});
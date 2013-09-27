require.config({

    paths: {
        'jquery': 'components/jquery/jquery.min',
        'text': 'components/requirejs-text/text',
        'underscore': 'components/underscore/underscore-min',
        'backbone': 'components/backbone/backbone',

        'app' : 'app/app',
        'controllers' : 'app/controllers',
        'views' : 'app/views',
        'models' : 'app/models',
        'collections' : 'app/collections',
        'templates' : 'app/templates'

    },
    shim: {

        'underscore': {exports: '_'},
        'backbone': {exports: 'Backbone',deps: ['jquery','underscore']}

    }
});

require(
[
	'jquery','underscore','backbone',

    'app'

], function ($,_,Backbone,App) {

    'use strict';

    $(function() {
        App.init();
    });
});
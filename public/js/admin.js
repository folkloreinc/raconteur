require.config({

    paths: {
        'jquery': 'components/jquery/jquery.min',
        'text': 'components/requirejs-text/text',
        'underscore': 'components/underscore/underscore-min',
        'backbone': 'components/backbone/backbone',

        'ckeditor' : 'components/ckeditor/ckeditor',
        'jquery-fineuploader': 'vendor/fineuploader/jquery.fineuploader-3.7.1',
        'croppa' : '../packages/bkwld/croppa/js/croppa',

        'jquery-ui-core': 'components/jquery-ui/ui/jquery.ui.core',
        'jquery-ui-widget': 'components/jquery-ui/ui/jquery.ui.widget',
        'jquery-ui-mouse': 'components/jquery-ui/ui/jquery.ui.mouse',
        'jquery-ui-position': 'components/jquery-ui/ui/jquery.ui.position',
        'jquery-ui-draggable': 'components/jquery-ui/ui/jquery.ui.draggable',
        'jquery-ui-sortable': 'components/jquery-ui/ui/jquery.ui.sortable',
        'jquery-ui-datepicker': 'components/jquery-ui/ui/jquery.ui.datepicker',
        'jquery-ui-datepicker-fr': 'components/jquery-ui/ui/i18n/jquery.ui.datepicker-fr-CA',

        'foundation' : 'components/foundation/js/foundation/foundation',
        'foundation.alerts' : 'components/foundation/js/foundation/foundation.alerts',
        'foundation.clearing' : 'components/foundation/js/foundation/foundation.clearing',
        'foundation.cookie' : 'components/foundation/js/foundation/foundation.cookie',
        'foundation.dropdown' : 'components/foundation/js/foundation/foundation.dropdown',
        'foundation.forms' : 'components/foundation/js/foundation/foundation.forms',
        'foundation.interchange' : 'components/foundation/js/foundation/foundation.interchange',
        'foundation.joyride' : 'components/foundation/js/foundation/foundation.joyride',
        'foundation.magellan' : 'components/foundation/js/foundation/foundation.magellan',
        'foundation.orbit' : 'components/foundation/js/foundation/foundation.orbit',
        'foundation.placeholder' : 'components/foundation/js/foundation/foundation.placeholder',
        'foundation.reveal' : 'components/foundation/js/foundation/foundation.reveal',
        'foundation.section' : 'components/foundation/js/foundation/foundation.section',
        'foundation.tooltips' : 'components/foundation/js/foundation/foundation.tooltips',
        'foundation.topbar' : 'components/foundation/js/foundation/foundation.topbar',
        
        'app' : 'admin/app',
        'controllers' : 'admin/controllers',
        'views' : 'admin/views',
        'models' : 'admin/models',
        'collections' : 'admin/collections',
        'templates' : 'admin/templates'

    },
    shim: {

        'underscore': {exports: '_'},
        'backbone': {exports: 'Backbone',deps: ['jquery','underscore']},

        'ckeditor' : {exports: 'CKEDITOR'},
        'jquery-fineuploader' : {deps: ['jquery']},

        'foundation' : {deps: ['jquery']},
        'foundation.alerts' : {deps: ['foundation']},
        'foundation.clearing' : {deps: ['foundation']},
        'foundation.cookie' : {deps: ['foundation']},
        'foundation.dropdown' : {deps: ['foundation']},
        'foundation.forms' : {deps: ['foundation']},
        'foundation.interchange' : {deps: ['foundation']},
        'foundation.joyride' : {deps: ['foundation']},
        'foundation.magellan' : {deps: ['foundation']},
        'foundation.orbit' : {deps: ['foundation']},
        'foundation.placeholder' : {deps: ['foundation']},
        'foundation.reveal' : {deps: ['foundation']},
        'foundation.section' : {deps: ['foundation']},
        'foundation.tooltips' : {deps: ['foundation']},
        'foundation.topbar' : {deps: ['foundation']},
        
        'jquery-ui-core': {deps: ['jquery']},
        'jquery-ui-position': {deps: ['jquery-ui-core']},
        'jquery-ui-widget': {deps: ['jquery-ui-core']},
        'jquery-ui-datepicker': {deps: ['jquery-ui-core','jquery-ui-widget']},
        'jquery-ui-datepicker-fr': {deps: ['jquery-ui-datepicker']},
        'jquery-ui-mouse': {deps: ['jquery-ui-core','jquery-ui-widget']},
        'jquery-ui-draggable': {deps: ['jquery-ui-core','jquery-ui-widget','jquery-ui-position','jquery-ui-mouse']},
        'jquery-ui-sortable': {deps: ['jquery-ui-core','jquery-ui-widget','jquery-ui-position','jquery-ui-mouse']}

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
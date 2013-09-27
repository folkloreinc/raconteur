define(
[
	'jquery','underscore','backbone'

],

function(

	$,_,Backbone

) {

	'use strict';

	var App = {

		'router' : null,

		'init' : function() {

			App.initRouter();

			App.initEvents();

			App.initLayout();

			Backbone.history.start({pushState: true});

		},

		'initRouter' : function() {

			var router = App.router = new Backbone.Router();

			//All pages
			router.route('*path', 'home', function(path){

				

			});

		},

		'initEvents' : function() {

			$(window).resize(function() {
				App.trigger('resize');
			});

			if(Modernizr.touch) {

				$(document).on('touchmove',function(e) {
					e.pageX = e.originalEvent.touches[0].pageX;
					e.pageY = e.originalEvent.touches[0].pageY;
					App.trigger('mousemove',e);
				});

			} else {

				$(document).on('mousemove',function(e) {
					App.trigger('mousemove',e);
				});

				$(document).on('mousedown',function(e) {
					App.trigger('mousedown',e);
				});

				$(document).on('mouseup',function(e) {
					App.trigger('mouseup',e);
				});

			}

		},

		initLayout: function() {

			

		}

	};
	_.extend(App, Backbone.Events);
	window.App = App;

	return App;

});
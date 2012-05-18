seajs.config({
	alias: {
		'es5-safe': 'es5-safe-0.9.0/es5-safe',
		'json': 'json-1.0.0/json',
		'cookie': 'cookie-1.0.2/cookie',
		'querystring': 'querystring-1.0.1/querystring',
		'jquery': 'jquery-1.7.2/jquery'
	},
	preload: [
		Function.prototype.bind ? '' : 'es5-safe',
		this.JSON ? '' : 'json'
	],
	debug: true,
	base: '/static/js/lib/',
	charset: 'utf-8'
});

define(function(require, exports, module) {
	var $ = require('jquery');
	var Binding = require('./binding');

	$(document).ready(function() {	
		Binding.bindevent();	
	});
});

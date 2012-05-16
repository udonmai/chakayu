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
	base: 'http://210.30.107.84/php/chakayu/static/js/lib/',
	charset: 'utf-8'
});

define(function(require, exports, module) {
	var $ = require('jquery');
	var Cookie = require('cookie');
	var Comet = require('./comet.js');

	$(document).ready(function() {
		//绑定按钮的发送事件
		$('#sendbtn').click(function(event) {
			var msg = $('#msgtext').val();
			Comet.send(msg);
			});

		//建立长链接
		Comet.polling();
	});	
});

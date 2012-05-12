define(function(require) {
	var $ = require('jquery');
	var Cookie = require('cookie');

	return {
		_sleepTime: 1000,
		_timeout: undefined,
		_baseurl: 'shitsu/chat/',
		
		_refresh: function() {
			setTimeout(function() {
				this.run()
			}, this.sleepTime);
		},
	
		_getCurrentTimestamp: function() {
			return Math.round(new Date().getTime() / 1000);
		},
	
		run: function() {},
	
		send: function(msg) {
			var username = "udonmai";//Cookie.get("username");
			var roomid = $('#roomid').text();
			var stamp = this._getCurrentTimestamp();
	
			$.post(this._baseurl, {
				username: username,
				roomid: roomid,
				message: msg,
				stamp: stamp
			}, function(data) {
				if (data.state == 'success') 
					$('msgtext').val() = '';
			});
		} 
	};

});

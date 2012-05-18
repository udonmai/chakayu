define(function(require) {
	var $ = require('jquery');
	var Cookie = require('cookie');

	return {
		_sleepTime: 1200,
		_timeout: undefined,
		_baseurl: 'shitsu/',
	
		_padleft: function(str) {
			str = str - 0 + '';
			if (str.length == 3) 
				return str; 
			else if (str.length == 2)
				return '0' + str;
			else if (str.length == 1)
				return '00' + str;
		},

		_refresh: function() {
			Comet = this;
			setTimeout(function() {
				Comet.polling();
			}, this._sleepTime)
		},
	
		_getCurrentTimestamp: function() {
			var mseconds = new Date().getMilliseconds();
			var mtime = {
				datetime: Math.round(new Date().getTime() / 1000),
				mseconds: this._padleft(mseconds)
				}
			return mtime;
		},
	
		polling: function() {
			var stamp = this._getCurrentTimestamp();
			var roomid = $('#roomid').text();
			var Comet = this;
			
			$.post(this._baseurl + 'checkupdate/', {
				roomid: roomid,
				stamp: stamp
				}, function(data) {
					var data = JSON.parse(data);
					if (data['s'] == 'none') {
						Comet._refresh();
						return;
					} 
					else {
						//将后端数据render到页面	
						$('#chatcontent').append(data['m'][0]);
						Comet._refresh();
						return;
					}
				});
		},

		send: function(msg) {
			var username = $('#username').text();
			var roomid = $('#roomid').text();
			var stamp = this._getCurrentTimestamp();
	
			$.post(this._baseurl + 'chat/', {
				username: username,
				roomid: roomid,
				message: msg,
				stamp: stamp
			}, function(data) {
				var sdata = JSON.parse(data);
				if (sdata['state'] == 'success') { 
					$('#msgtext').val('');
					}
			});
		} 
	};

});

define(function(require) {
	var $ = require('jquery');
	var Cookie = require('cookie');

	return {
		_sleepTime: 1000,
		_timeout: undefined,
		_baseurl: 'shitsu/',
		
		_refresh: function() {
			Comet = this;
			setTimeout(function() {
				Comet.polling()
			}, this.sleepTime);
		},
	
		_getCurrentTimestamp: function() {
			var mtime = {
				datetime: Math.round(new Date().getTime() / 1000),
				mseconds: new Date().getMilliseconds()
				}
			return mtime;
		},
	
		polling: function() {
			var stamp = this._getCurrentTimestamp();
			var roomid = 'room1';//$('#roomid').text();
			var Comet = this;
			
			$.post(this._baseurl + 'checkupdate/', {
				roomid: roomid,
				stamp: stamp
				}, function(data) {
					var data = JSON.parse(data);
					if (data['s'] == 'none') {
						Comet._refresh();
					} 
					else {
						//将后端数据render到页面	
						$('#chatcontent').append(data['m'][0]);
						Comet._refresh();
					}
				});
		},

		send: function(msg) {
			var username = "udonmai";//Cookie.get("username");
			var roomid = 'room1';//$('#roomid').text();
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

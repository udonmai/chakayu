define(function(require) {
	var $ = require('jquery');
	var Cookie = require('cookie');

	return {
		_sleepTime: 1200,
		_timeout: undefined,
		_baseurl: 'shitsu/',
		
		_html_encode: function(str) {   
			var s = "";   
			if (str.length == 0) return "";   
			s = str.replace(/&/g, "&gt;");   
			s = s.replace(/</g, "&lt;");   
			s = s.replace(/>/g, "&gt;");   
			s = s.replace(/ /g, "&nbsp;");   
			s = s.replace(/\'/g, "&#39;");   
			s = s.replace(/\"/g, "&quot;");   
			s = s.replace(/\n/g, "<br>");   
			return s;   
		},   

		_html_decode: function(str) {   
			var s = "";   
			if (str.length == 0) return "";   
			s = str.replace(/&gt;/g, "&");   
			s = s.replace(/&lt;/g, "<");   
			s = s.replace(/&gt;/g, ">");   
			s = s.replace(/&nbsp;/g, " ");   
			s = s.replace(/&#39;/g, "\'");   
			s = s.replace(/&quot;/g, "\"");   
			s = s.replace(/<br>/g, "\n");   
			return s;   
		},  

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
						var length = data['m'].length;
						var msg = new Array();
						for (var i = 0; i < length; i ++) {
							msg[i] = data['m'][i].split('+');
							$('#chatcontent').append('<div class="msg"><p class="msginfo">' + msg[i][0] + '</p><p class="msgcon">' + msg[i][1] + '</p></div>');
							var y = $('#chatcontent').scrollTop();
							$('#chatcontent').scrollTop(y + 100);
						}	
						Comet._refresh();
						return;
					}
				});
		},

		send: function(msg) {
			var username = $('#username').text();
			var roomid = $('#roomid').text();
			var stamp = this._getCurrentTimestamp();
			Comet = this;
	
			$.post(this._baseurl + 'chat/', {
				username: username,
				roomid: roomid,
				message: Comet._html_encode(msg),
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

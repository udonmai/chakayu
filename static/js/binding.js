define(function(require) {
	var $ = require('jquery');
	var Cookie = require('cookie');

	return {
		_baseurl: 'shitsu/',
	
		bindevent: function() {
			var baseurl = this._baseurl;

			$('#create a').click({baseurl: baseurl}, function(e) {
				var userid = $('#userId').text();	
				var roomname = $('#createroom').val();
				var baseurl = e.data.baseurl;

				$.post(baseurl + 'create', {
					userId: userid,
					roomname: roomname
					}, function(data) {
						var data = JSON.parse(data);
						if (data['s'] == 'success') {
							var roomid = data['roomid'];
							$('.sbroomsection').clone(true).appendTo('#self-built-inner');
						} 
						else {
						
						}
					});

				});
		}

	};

});

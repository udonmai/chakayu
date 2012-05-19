define(function(require) {
	var $ = require('jquery');
	var Cookie = require('cookie');

	return {
		_baseurl: 'shitsu/',
	
		bindevent: function() {
			var baseurl = this._baseurl;

			$('.relative').hover(function() {
				$(this).find('.rs-low').show();
			}, function() {
				$(this).find('.rs-low').hide();
			});
		
			//创建
			$('#createbtn').click({baseurl: baseurl}, function(e) {
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
							$('.relative:last').clone(true).appendTo('#self-built-inner');
							$('.relative:last input').val(roomid);
							$('.relative:last .info').text(roomname);
							$('.textinput').hide();

						} 
						else {
							alert('网络繁忙，请稍后再试试 :(');	
						}
					});

				});

			//注销
			$('#destroybtn').click({baseurl: baseurl}, function(e) {
				
				var userid = $('#userId').text();	
				var roomid = $(this).next().text();
				var baseurl = e.data.baseurl;

				$.post(baseurl + 'destroy', {
					userId: userid,
					roomid: roomid
					}, function(data) {
						var data = JSON.parse(data);
						if (data['state'] == 'fail') {
							alert(data['msg']);	
						} 
						else {
							$('#room'+ roomid).remove();	
							$('.destroyinput').hide();
						}
					});

				});

			//修改
			$('#modifybtn').click({baseurl: baseurl}, function(e) {
				
				var userid = $('#userId').text();	
				var roomid = $(this).next().text();
				var newroomname = $('#modifyroom').val();
				var baseurl = e.data.baseurl;

				$.post(baseurl + 'modify', {
					userId: userid,
					roomid: roomid,
					newroomname: newroomname
					}, function(data) {
						var data = JSON.parse(data);
						if (data['state'] == 'fail') {
							alert(data['msg']);	
						} 
						else {
							$('#room' + roomid).find('.info').text(newroomname);	
							$('.modifyinput').hide();
						}
					});

				});

			//加入
			$('.section a').click({baseurl: baseurl}, function() {
				$(this).find('form').submit();
			});
			
			$('#msectionbtn').click(function() {
				$('.createinput').fadeIn();
			});
		
			$('.rsl-l').click(function() {
				var roomid = $(this).find('.rid').text();
				$('.modifyinput p').text(roomid);
				$('.modifyinput').fadeIn();	
			});
		
			$('.rsl-r').click(function() {
				var roomid = $(this).find('.rid').text();
				$('.destroyinput p').text(roomid);
				$('.destroyinput').fadeIn();
			});

			$('.textinput span').click(function() {
				$('.textinput').fadeOut();
			});

		}

	};

});

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

				var roomnum = $('.relative').length;
				if (roomnum >= 3) {
					alert('很抱歉，每个用户可以搭建3个茶室');
					return;
				}

				$.post(baseurl + 'create', {
					userId: userid,
					roomname: roomname
					}, function(data) {
						var data = JSON.parse(data);
						if (data['s'] == 'success') {
							//第一次创建则刷新
							if ($('.relative').length == 0)
								window.location.reload();

							var roomid = data['roomid'];
							$('.relative:last').clone(true).appendTo('#self-built-inner');
							var that = $('.relative:last');
							that.attr('id', 'room' + roomid);
							that.find('.roomsection').attr('name', roomname);
							that.find('.rs-above input').attr('value', roomid); //不知道为什么用val()不行...
							that.find('.rs-low .rid').text(roomid);
							that.find('.info').text(roomname);
							$('.textinput').hide();
							$('.textinput input').attr('value', '');

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
							$('.modifyinput input').attr('value', '');
						}
					});

				});

			//最近进入过的茶室的加入，需要判断是否存在
			$('#latest-join a').click({baseurl: baseurl}, function() {
				//先检测是否存在，不在则清除
				var roomid = $(this).find('input').val();
				var that = $(this);

				$.post(baseurl + 'exist', {
					roomid: roomid
					}, function(data) {
						var data = JSON.parse(data);
						if (data['state'] == 'fail') {
							alert('很抱歉它已经被销毁了 :(');
							that.remove();
						}
						else that.find('form').submit();
					});
	
			});
		
			$('#global-create a').click({baseurl: baseurl}, function() {
				//先检测是否存在，不在则清除
				var roomid = $(this).find('input').val();
				var that = $(this);

				$.post(baseurl + 'exist', {
					roomid: roomid
					}, function(data) {
						var data = JSON.parse(data);
						if (data['state'] == 'fail') {
							alert('很抱歉它已经被销毁了 :(');
							that.remove();
						}
						else that.find('form').submit();
					});
	
			});
		
			//自建的茶室的加入
			$('#self-built a').click({baseurl: baseurl}, function() {
				$(this).find('form').submit();
			});
		

			$('#msectionbtn').click(function() {
				$('.createinput').fadeIn();
				$('.createinput input').focus();
			});
		
			$('.rsl-l').click(function() {
				var roomid = $(this).find('.rid').text();
				$('.modifyinput p').text(roomid);
				$('.modifyinput').fadeIn();
				$('.modifyinput input').focus();
			});
		
			$('.rsl-r').click(function() {
				var roomid = $(this).find('.rid').text();
				$('.destroyinput p').text(roomid);
				$('.destroyinput').fadeIn();	
			});

			$('.textinput span').click(function() {
				$('.textinput').fadeOut();
			});

			$('.textinput').keydown(function(e){
		       if (e.keyCode == 13) {
		            $(this).find('button').click();
		            return false;
		        }
		    });


		}

	};

});

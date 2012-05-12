<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 和聊天有关的model
 * 处理msg等在redis的存取
 * ...
 */

class Chat extends U_Model {

	//构造函数，在直接初始化$redis对象
	public function __construct() {
		parent::__construct();
	}

	/* 列出聊天室列表 */
	public function index() {
		
		//$member = R::dispense('room');
		//$member->rname = $roomname;
		//R::store($room);
	}

	//在redis中存储某room中新出现的消息及相关信息
	public function storemsg($data) {
		
		//$stamp = time(); //时间由前端生成
		$datetime = date("Y-m-d H:i:s ", $data['stamp']);
		$msg = $datetime.$data['username'].' : '.$data['msg'];

		$redis = new Predis\Client();
		$redis->sadd($data['roomid'], $data['stamp'], $msg);

		return TRUE;
	}

	//从redis中获取的参数为一个时间戳，由此返回比该时间戳更新的msg
	public function getmsg($roomid, $stamp) {
		
	}

}

/* End of file chat.php */
/* Location: ./application/models/chat.php */

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Testmodel extends U_Model {

	/* 创建聊天室 */
	public function add($roomname) {
		$member = R::dispense('room');
		$member->rname = $roomname;
		R::store($room);
	}
	
	/* 删除聊天室 */
	public function destroy($rid) {
		
	}
	/* 更新聊天室信息 */
	public function update($rid) {
	
	}

	/* 获取聊天室信息 */
	public function get($rid) {
	
	}

	/* 加入聊天室名单 */
	public function join() {
	
	}

	/* 离开聊天室名单 */
	public function leave() {
	
	}

	public function test() {
		$redis = new Predis\Client();
		$callback = $redis->sadd('rootset', array('udonmai7', 'udonmai2', 'udonmai3'));
		if($callback) {
			$value = $redis->smembers('rootset');
			return $value;
		} 
		else return '重复了 :(';
	}

	public function publish($msg1, $msg2, $msg3) {
		$redis = new Predis\Client();
		$redis->publish('room1', $msg1);	
		$redis->publish('room2', $msg2);	
		$redis->publish('room3', $msg3);	
	}

	public function subscribe() {
		$redis = new Predis\Client();
		/*
		$callback = $redis->subscribe(array('room1', 'room2', 'room3'));
		$value = $callback;

		for ($i = 0; $i <= 9; $i ++) {
		//if ($callback[0] == 'message') {
			//return $value;
			var_dump($value);
			//} 
		}
		 */

		$subscriptions = array('room1', 'room2', 'room3');
		foreach ($redis->subscribe($subscriptions) as $message) {
			var_dump($message);
		}
	}

	public function sendmsg($data) {
		$stamp = time();
		$datetime = date("Y-m-d H:i:s ", $stamp);
		$msg = $datetime.$data['username'].' : '.$data['msg'];

		$redis = new Predis\Client();
		$redis->sadd($data['roomid'], $stamp, $msg);
	}

}

/* End of file testmodel.php */
/* Location: ./application/models/testmodel.php */

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 在mysql存取room的基本信息
 * 增删人员于redis的特定room的名单
 * 修改redis中特定room的在线人数
 */

class Room extends U_Model {

	/* 创建聊天室 */
	public function add($userId, $roomname) {
		
		$room = R::dispense('room');
		$room->roomname = $roomname;
		$room->creater = $userId;
		$roomid = R::store($room);

		$redis = new Predis\Client();
		$redis->sadd($userId.'created', $roomid);

		return $roomid;
	}
	
	/* 删除聊天室 */
	public function destroy($userId, $roomid) {

		$room = R::findOne('room', 'id = ?', array($roomid));
		if ($userId != $room->creater) {
			return FALSE;
		}
		R::trash($room);

		$redis = new Predis\Client();
		$redis->srem($userId.'created', $roomid);

		return TRUE;
	}

	/* 更新聊天室信息 */
	public function modify($newroomname, $roomid, $userId) {
		$room = R::findOne('room', 'id = ?', array($roomid));
		if ($userId != $room->creater) {
			return FALSE;
		}
		$room->roomname = $newroomname;
		R::store($room);

		return TRUE;
	}

	/* 获取聊天室信息 */
	public function get($roomid) {
		$room = R::findOne('room', 'id = ?', array($roomid));
		if (! $room) return FALSE;
		$data = array(
			'roomid' => $room->id,
			'roomname' => $room->roomname,
			'creater' => $room->creater
		);	

		return $data;
	}

	/* 加入聊天室名单 */
	public function join($roomid, $userId) {

		//聊天室名单
		$redis = new Predis\Client();
		$redis->sadd('room'.$roomid.'mblist', $userId);

		//该聊天室在线人数
		$redis->incr('room'.$roomid.'onlines');
		$redis->incr('globalonlines');

		//最近加入的7个聊天室
		$redis->lpush($userId.'latestjoin', $roomid);
		$len = $redis->llen($userId.'latestjoin');
		if ($len > 7) 
			$redis->rpop($userId.'latestjoin');
	}

	/* 离开聊天室名单 */
	public function leave($roomid, $userId) {

		$redis = new Predis\Client();
		$redis->srem('room'.$roomid.'mblist', $userId);

		$redis->incr('room'.$roomid.'onlines');
		$redis->incr('globalonlines');
	}

}

/* End of file room.php */
/* Location: ./application/models/room.php */

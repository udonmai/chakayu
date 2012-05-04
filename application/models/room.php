<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Room extends U_Model {

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

}

/* End of file Room.php */
/* Location: ./application/models/Room.php */

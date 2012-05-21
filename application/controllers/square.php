<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Square extends CI_Controller {

	/**
	 * The square controller which manages the room-relative action.
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('room');
		$this->load->model('member');
		$this->redis = new Predis\Client();
		$this->ses = $this->session->all_userdata();
		if (! $this->ses['userId']) {
			redirect('login');
		}	
	}

	private function _getglobalbuilt($userId) {

		//返回全局创建中不是自己创建的8个以内的元素
		$data = $this->redis->sdiff('globalbuilt', $userId.'created');
		$num = count($data);
		if ($num > 12) 
			return array_rand($data, 12);
		else 
			return $data;
	}

	private function _getlatestjion($userId) {

		return $this->redis->zrevrange($userId.'latestjoin', 0, -1);
	}

	private function _getselfbuilt($userId) {
		return $this->redis->smembers($userId.'created');
	}

	public function index() {
		$userId = $this->ses['userId'];
		$selfbuilts = $this->_getselfbuilt($userId);
		$latestjoins = $this->_getlatestjion($userId);
		$globalbuilts = $this->_getglobalbuilt($userId);

		foreach ($selfbuilts as $selfbuilt) {
			$room = $this->room->get($selfbuilt);
			if (! $room) continue;
			$data['selfbuilt'][$room['roomid']] = $room;
		}
		foreach ($latestjoins as $latestjoin) {
			$room = $this->room->get($latestjoin);
			if (! $room) continue;
			$data['latestjoin'][$room['roomid']] = $room;
		}
		foreach ($globalbuilts as $globalbuilt) {
			$room = $this->room->get($globalbuilt);
			if (! $room) continue;
			$data['globalbuilt'][$room['roomid']] = $room;
		}

		$data['user'] = $this->member->get($userId);

		$this->twig->display('square.html', $data);
	}

	public function logout() {

		$sessiondata = array('userId' => '');
		$this->session->unset_userdata($sessiondata);

		redirect('');
	}
}

/* End of file square.php */
/* Location: ./application/controllers/square.php */

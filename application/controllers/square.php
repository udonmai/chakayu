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

	private function _getlatestjion($userId) {

		$key = $userId.'latestjoin';
		$len = $this->redis->llen($key);
		return $this->redis->lrange($key, 0, --$len);
	}

	private function _getselfbuilt($userId) {
		return $this->redis->smembers($userId.'created');
	}

	public function index() {
		$userId = $this->ses['userId'];
		$selfbuilts = $this->_getselfbuilt($userId);
		$latestjoins = $this->_getlatestjion($userId);

		foreach ($selfbuilts as $selfbuilt) {
			$room = $this->room->get($selfbuilt);
			$data['selfbuilt'][$room['roomid']] = $room;
		}
		foreach ($latestjoins as $latestjoin) {
			$room = $this->room->get($latestjoin);
			$data['latestjoin'][$room['roomid']] = $room;
		}
		$data['user'] = $this->member->get($userId);

		$this->twig->display('square.html', $data);
	}

}

/* End of file square.php */
/* Location: ./application/controllers/square.php */

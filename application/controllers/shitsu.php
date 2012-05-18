<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shitsu extends CI_Controller {

	/**
	 * The shitsu controller which manages the room-relative action.
	 */
	
	private $_sleepTime = 2;
	private $_tries = 20;

	public function __construct() {
		parent::__construct();
		$this->load->model('room');
		$this->load->model('chat');
		$data['baseurl'] = base_url();

		$this->ses = $this->session->all_userdata();
		if (! $this->ses['userId']) {
			redirect('login');
		}
	}

	//参数暂定为POST的roomid
	//
	//新加的时候将返回该room中之前10分钟的内容
	public function index() { 

		$data['words'] = ':)';
		$this->twig->display('shitsu.html', $data);
	}

	/* 创建聊天室 */
	public function create() {

		$userId = $this->input->post('userId');
		$roomname = $this->input->post('roomname');
		$roomid = $this->room->add($userId, $roomname);
		if ($roomid)
			echo json_encode(array('s' => 'success', 'roomid' => $roomid));
	}

	/* 销毁聊天室 */
	public function destroy() {
	
		$userId = $this->$ses['userId'];
		$roomname = $this->input->post('roomid');
		if (! $this->room->destroy($userId, $roomid)) {
			$s = array(
				'state' => 'fail',
				'meg' => '不是您的聊天室，抱歉无法销毁'
			);
			echo json_encode($s);
		}
	}

	/* 修改聊天室信息 */
	public function modify() {
		$newroomname = $this->input->post('newroomname');
		$roomid = $this->input->post('roomid');
		$userId = $this->$ses['userId'];
		if (! $this->room->modify($newroomname, $roomid, $userId)) {
			$s = array(
				'state' => 'fail',
				'meg' => '不是您的聊天室，抱歉无法修改'
			);
			echo json_encode($s);
		}
	}

	/* 加入聊天室 */
	public function join() {

		$roomid = $this->input->post('roomid');
		$userId = $this->$ses['userId'];
		$this->room->jion($roomid, $userId);

		//加入列表后跳转到shitsu
		redirect('shitsu');
	}

	/* 离开该聊天室 */
	public function leave() {

		$roomid = $this->input->post('roomid');
		$userId = $this->$ses['userId'];
		$this->room->leave($roomid, $userId);

		redirect('square');
	}


	//前端Ajax发送新消息给后端
	public function chat() {
		
		$data['username'] = $this->input->post('username');
		$data['roomid'] = $this->input->post('roomid');
		$data['msg'] = $this->input->post('message');
		$data['stamp'] = $this->input->post('stamp');
		if ($this->chat->storemsg($data))
			echo json_encode(array('state' => 'success'));
		else 
			echo json_encode(array('state' => 'fail'));
	}

	// 进入room后前段会马上建立一个Ajax长链接，指向该函数，
	// 参数是当时的时间戳，一旦返回马上再次建立链接
	// 该函数将长期*阻塞*
	public function checkupdate() {
		$roomid = $this->input->post('roomid');
		$stamp = $this->input->post('stamp');

		//var_dump($update);
		for ($i = 0; $i < $this->_tries; $i++) {
			$update = $this->chat->getmsg($roomid, $stamp);	
			if (count($update) > 0) {
				echo json_encode(array('s' => 'exist', 'm' => $update));
				flush();
				return;
			}
			sleep($this->_sleepTime);
		}
		echo json_encode(array('s' => 'none'));
		flush();
	}
}

/* End of file shitsu.php */
/* Location: ./application/controllers/shitsu.php */

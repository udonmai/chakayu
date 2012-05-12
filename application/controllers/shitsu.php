<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Shitsu extends CI_Controller {

	/**
	 * The shitsu controller which manages the room-relative action.
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('room');
		$this->load->model('chat');
		$data['baseurl'] = base_url();
	}

	//进入某聊天室后呈现，'example.com/chat/room',
	//参数暂定为POST的roomid
	//
	//新加的时候将返回该room中之前10分钟的内容
	public function index()
	{
		$data['words'] = ':)';
		$this->twig->display('shitsu.html', $data);
	}

	/* 创建聊天室 */
	public function creat()
	{
		
	}

	/* 注销聊天室 */
	public function destroy()
	{
		
	}

	/* 加入聊天室 */
	public function join()
	{
	
	}

	/* 离开该聊天室 */
	public function leave()
	{
	
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
	public function checkupdate($roomid, $stamp) {
		$update = $this->chat->getmsg($roomid, $stamp);	

		while (!$update) {
			
		}
	}
}

/* End of file shitsu.php */
/* Location: ./application/controllers/shitsu.php */

<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Room extends CI_Controller {

	/**
	 * The room controller which manages the room-relative action.
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('room');
		$this->load->model('chat');
	}

	//进入某聊天室后呈现，'example.com/chat/room',
	//参数暂定为POST的roomid
	//
	//新加的时候将返回该room中之前10分钟的内容
	public function index()
	{
		$data['words'] = ':)';
		$this->twig->display('room.html', $data);
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
	public function chat($username, $roomid, $message， $stamp) {
		
		$data['username'] = $username;
		$data['roomid'] = $roomid;
		$data['msg'] = $message;
		$data['stamp'] = $stamp;
		$this->chat->sendmsg($data);
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

/* End of file room.php */
/* Location: ./application/controllers/room.php */

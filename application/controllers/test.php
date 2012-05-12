<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	/**
	 * The test controller which manages the room-relative action.
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('testmodel');
	}

	public function index()
	{
		$data['baseurl'] = base_url();
		$data['name'] = 'udonmai';
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


	/* 实时在这里启动，但是URL为 /room/roomid 映射到 /room/chat */
	public function chat($u , $r , $m) {

		$data['username'] = $u;
		$data['roomid'] = $r;
		$data['msg'] = $m;
		$this->testmodel->sendmsg($data);
		//echo $datetime;
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */

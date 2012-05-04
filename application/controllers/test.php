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
		$data['words'] = $this->testmodel->test();
		$this->twig->display('test.html', $data);
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
	public function chat() {
		
	}
}

/* End of file room.php */
/* Location: ./application/controllers/room.php */

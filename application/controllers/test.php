<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$this->load->model('member', 'm');
		$this->m->register('udonmai2', '123456');

		$data['words'] = ':)';
		$this->twig->display('room.html', $data);
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */

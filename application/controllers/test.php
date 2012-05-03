<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$m = new Member;
		$m->username = 'udonmai';
		$m->password = '123456';
		$m->save();
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */

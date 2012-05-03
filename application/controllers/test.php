<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Test extends CI_Controller {

	public function index()
	{
		$m = new Entities\Member;
		$m->setUsername('udonmai2');
		$m->setPassword('123456');
		$this->doctrine->em->persist($m);
		$this->doctrine->em->flush();
	}
}

/* End of file test.php */
/* Location: ./application/controllers/test.php */

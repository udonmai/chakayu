<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('member');
	}

	public function index() {
		$data['words'] = ':)';
		$this->twig->display('member.html', $data);
	}

	public function addMember() {
		$this->member->
	}
}

/* End of file member.php */
/* Location: ./application/controllers/member.php */

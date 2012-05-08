<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Square extends CI_Controller {

	/**
	 * The square controller which manages the room-relative action.
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('square');
	}

	public function index()
	{
		$data['words'] = ':)';
		$this->twig->display('room.html', $data);
	}
}

/* End of file square.php */
/* Location: ./application/controllers/square.php */

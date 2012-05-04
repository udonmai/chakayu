<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class U_Model extends CI_Model {
	public function __construct() {
		parent::__construct();

		require_once(APPPATH.'libraries/Redbean.php');
		require_once(APPPATH.'third_party/Predis/Autoloader.php');
		
		Predis\Autoloader::register();
		R::setup('mysql:host=localhost;dbname=chakayu','root','123456');
	}
}

/* End of file U_Model.php */
/* Location: ./application/core/U_Model.php */

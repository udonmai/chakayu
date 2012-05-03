<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends U_Model {

	public function register($username, $password)
	{
		$member = R::dispense('member');
		$member->username = $username;
		$member->password = $password;
		//var_dump($member);
		R::store($member);
	}
}

/* End of file Member.php */
/* Location: ./application/models/Member.php */

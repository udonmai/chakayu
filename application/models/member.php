<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends U_Model {

	/* 增加用户，后期以OAuth或者OpenID登陆 */
	public function add($username) {
		$member = R::dispense('member');
		$member->username = $username;
		//var_dump($member);
		R::store($member);
	}

	/* 注销用户 */
	public function delete($uid) {
	
	}

	/* 更新用户信息 */
	public function update($uid) {
	
	}

	/* 获得用户信息 */
	public function get($uid) {
		
	}

}

/* End of file Member.php */
/* Location: ./application/models/Member.php */

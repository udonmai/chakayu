<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * 处理用户相关的内容
 * 
 * 用户信息存储在mysql
 * 某room内的在线人员名单存在redis
 */


class Member extends U_Model {

	/* 增加用户，后期以OAuth或者OpenID登陆 */
	public function add($uid, $uname, $tu, $at, $ei, $rt, $now) {
		$data = array($uid, $uname, $tu, $at, $ei, $rt, $now);
		//$member = R::load($membertb, $id);
		
		//通过userid找到那行，返回的是一个bean	
		$member = R::findOne('member', 'userid = ?', array($uid));
		if (!isset($member)) {
			$member = R::dispense('member');
			list($member->userid, $member->username, $member->tinyurl, $member->access_token, $member->expires_in, $member->refresh_token, $member->timegettoken) = $data;
			R::store($member);
		}
		else return; 
	}

	/* 注销用户 */
	public function delete($uid) {
	
	}

	/* 更新用户信息 */
	public function update($uid) {
	
	}

	/* 获得用户信息 */
	public function get($uid) {
		$member = R::findOne('member', "userid = ?", array($uid));
		$data = array(
			'userId' => $member->userid,
			'username' => $member->username,
			'picurl' => $member->tinyurl
		);
		
		return $data;
	}

	public function updatetoken($uid, $access_info, $datetime) {
		$member = R::findOne('member', "userid = ?", array($uid));

		$data['access_token'] = $access_info["access_token"];
		$data['expires_in'] = $access_info["expires_in"];
		$data['refresh_token'] = $access_info["refresh_token"];
		$data['timegettoken'] =  $datetime;

		if (isset($member)) {
			list($member->access_token, $member->expires_in, $member->refresh_token, $member->timegettoken) = $data;
			R::store($member);
		}
	}

	public function timegettoken($uid) {
		$member = R::findOne('member', "userid = ?", array($uid));
		if (isset($member)) {
			return $member->timegettoken;
		}
	}
}

/* End of file Member.php */
/* Location: ./application/models/Member.php */

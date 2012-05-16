<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * The Login controller which manages the room-relative action.
	 */

	public function __construct() {
		parent::__construct();
		$this->load->model('member');
		$data['baseuel'] = base_url();
	}

	public function index() {
	
		require_once(APPPATH.'third_party/Renren/config.inc.php');
	
		$data['post_parems'] = array(
			'client_appid' => $config->APPID,
			'client_scope' => $config->scope,
			'redirect_uri' => $config->redirecturi
		);

		$this->twig->display('login.html', $data);
	}

	public function accesstoken() {
		
		global $config;
		require_once(APPPATH.'third_party/Renren/config.inc.php');
		require_once(APPPATH.'third_party/Renren/RenrenOAuthApiService.class.php');
		require_once(APPPATH.'third_party/Renren/RenrenRestApiService.class.php');
		
		$oauthApi = new RenrenOAuthApiService;
		$code = $this->input->get();
		$post_params = array(
			'client_id' => $config->APIKey,
			'client_secret' => $config->SecretKey,
			'redirect_uri' => $config->redirecturi,
			'grant_type' => 'authorization_code',
			'code' => $code['code']
		);

		$token_url = 'http://graph.renren.com/oauth/token';
		$access_info = $oauthApi->rr_post_curl($token_url, $post_params);
		$access_token = $access_info['access_token'];
		$expires_in = $access_info['expires_in'];
		$refresh_token = $access_info['refresh_token'];

		//获取账户信息
		$restApi = new RenrenRestApiService;
		$params = array(
			'fields' => 'uid,name,sex,birthday,mainurl,hometown_location,university_history,tinyurl,headurl',
			'access_token' => $access_token
		);
		$res = $restApi->rr_post_curl('users.getInfo', $params);

		$userId = $res[0]['uid'];
		$username = $res[0]['name'];
		$tinyurl = $res[0]['tinyurl'];

		//updatetoken
		$ut = $this->_updatetoken($config, $access_info, $userId);

		//注册
		$datetime = date("Y-m-d H:i:s", time());
		$this->member->add($userId, $username, $tinyurl, $access_token, $expires_in, $refresh_token, $datetime);	

		//session
		$sessiondata = array(
			'userId' => $userId,
			'username' => $username,
			'access_token' => $access_token
		);
		$this->session->set_userdata($sessiondata);


		//跳转到/square
		//$this->twig->display('test.html', $sessiondata);
		redirect('/square');
	}

	private function _updatetoken($config, $access_info, $userId) {
		
		$post_params = array(
			'client_id' => $config->APIKey,
			'client_secret' => $config->SecretKey,
			'refresh_token' => $access_info['refresh_token'],
			'grant_type' => 'refresh_token'
		);

		$tokentime = $this->member->timegettoken($userId);
		$datetime = date("Y-m-d H:i:s", time());
		//计算是否过期
		if (($datetime - $tokentime) > $access_info['expires_in']) {
			$access_info = $oauthApi->rr_post_curl($token_url,$post_params);//使用code换取token
			//更新数据库
			$this->member->updatetoken($userId, $access_info);
			return $access_info;
		}
		else return FALSE;
	}
}

/* End of file login.php */
/* Location: ./application/controllers/login.php */

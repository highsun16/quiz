<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->helper('cookie');
		$this->load->model('user_model');
	}

	function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;
		$view_html = $this->load->view($view, $this->viewdata, $render);
		if (!$render) return $view_html;
	}

	public function info()
	{
		$this->data['title'] = 'User Info';
		$cookie = get_cookie('quiz_cookie');

		$cookie = substr($cookie,1,-1);
		$str = explode(',', $cookie);
		$temp = explode(':', $str[1]);
		$uid = substr($temp[1],1,-1);

		$info = $this->user_model->get_info($uid);
		$this->data['info'] = json_encode($info);

		$this->_render_page('user/info',$this->data);
	}

	public function score()
	{
		$this->data['title'] = 'User Info';
		$cookie = get_cookie('quiz_cookie');

		$cookie = substr($cookie,1,-1);
		$str = explode(',', $cookie);
		$temp = explode(':', $str[1]);
		$uid = substr($temp[1],1,-1);

		$score = $this->user_model->get_score($uid);
		$this->data['score'] = json_encode($score);

		$this->_render_page('user/score',$this->data);
	}
}
?>
<?php defined('BASEPATH') OR exit('No direct script access allowed');

include_once('admin.php');

class Exam extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->model('question_model');
		$this->load->model('quiz_model');
		$this->admin = new admin();
	}

	function _render_page($view, $data=null, $render=false)
	{
		$this->viewdata = (empty($data)) ? $this->data: $data;
		$view_html = $this->load->view($view, $this->viewdata, $render);
		if (!$render) return $view_html;
	}

	public function one_exam()
	{
		$qid_array = $this->quiz_model->create_exam();

		if($qid_array)
		{
			$result = $this->question_model->search_question_withqid($qid_array);
			// print_r('<pre>');
			// print_r($result);
			// die();
			$this->admin->list_quiz($result);
		}
		else
		{	
			$this->_render_page('exam/one_exam',$this->data);
		}
	}

	public function result()
	{
		$this->data['title'] = 'Result';

		for($i=1;$i<=constant('quiz_number');$i++)
		{
			$str1 = 'q'.$i;
			$str2 = 'Question'.$i;
			$this->form_validation->set_rules($str1,$str2,'required');
		}

		if($this->form_validation->run() == TRUE)
		{
			$score = 0;
			for($i=1;$i<=constant('quiz_number');$i++)
			{
				$qStr = 'q'.$i;
				$ansStr = 'ans'.$i;
				if($this->input->post($qStr) == $this->input->post($ansStr))
				{
					$score++;
				}
			}
			// echo 'You score is:'.$score;
			$this->data['result'] = $score;
			$this->quiz_model->add_quiz_result($score);
			$this->_render_page('exam/result',$this->data);
		}
		else
		{
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			redirect('exam/one_exam','refresh');
		}
		
	}
}
?>
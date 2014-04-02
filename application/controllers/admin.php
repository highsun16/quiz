<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->database();
		$this->load->model('question_model');
		$this->load->model('quiz_model');
		$this->load->helper('url');
	}

	function _render_page($view, $data=null, $render=false)
	{

		$this->viewdata = (empty($data)) ? $this->data: $data;
		$view_html = $this->load->view($view, $this->viewdata, $render);
		if (!$render) return $view_html;
	}

	public function add_question()
	{
		$this->data['title'] = 'Add Question';

		$this->form_validation->set_rules('question','Question','required');
		$this->form_validation->set_rules('answer_A','Answer_A','required');
		$this->form_validation->set_rules('answer_B','Answer_B','required');
		$this->form_validation->set_rules('answer_C','Answer_C','required');
		$this->form_validation->set_rules('answer_D','Answer_D','required');
		$this->form_validation->set_rules('correct_answer','Correct_answer','required');

		if($this->form_validation->run() == TRUE)
		{
			$question_data = array(
				'question' => $this->input->post('question'),
				'answer_A' => $this->input->post('answer_A'),
				'answer_B' => $this->input->post('answer_B'),
				'answer_C' => $this->input->post('answer_C'),
				'answer_D' => $this->input->post('answer_D'),
				'correct_answer' => $this->input->post('correct_answer')
				);
			if( !$this->db->table_exists('question_lib') )
			{
				$this->question_model->create_question_lib();
			}
			$this->question_model->add_question($question_data);
			$this->session->set_flashdata('message','添加成功');
			redirect('/admin/add_question','refresh');
		}
		else
		{
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		}
		$this->_render_page('admin/add_question',$this->data);
	}

	public function update_question($qid = null)
	{
		$this->data['title'] = 'Update Question';
		$this->data['qid'] = $this->input->post('qid');
		$qid = $this->data['qid'];

		//读出一个qid问题下的数据
		$this->db->where('qid',$qid);
		$this->db->from('question_lib');
		$result = $this->db->get()->result();
		// print_r('<pre>');
		// die(print_r($result[0]));
		$fieldArray = array();
		foreach ($result[0] as $key => $value) {
			$fieldArray[$key] = $value;
		}
		$this->data['question'] = $fieldArray['question'];
		$this->data['answer_A'] = $fieldArray['answer_A'];
		$this->data['answer_B'] = $fieldArray['answer_B'];
		$this->data['answer_C'] = $fieldArray['answer_C'];
		$this->data['answer_D'] = $fieldArray['answer_D'];
		$this->data['correct_answer'] = $fieldArray['correct_answer'];

		if($qid)
		{
			$this->form_validation->set_rules('question','Question','required');
			$this->form_validation->set_rules('answer_A','Answer_A','required');
			$this->form_validation->set_rules('answer_B','Answer_B','required');
			$this->form_validation->set_rules('answer_C','Answer_C','required');
			$this->form_validation->set_rules('answer_D','Answer_D','required');
			$this->form_validation->set_rules('correct_answer','Correct_answer','required');

			if($this->form_validation->run() == TRUE)
			{
				$question_data = array(
					'question' => $this->input->post('question'),
					'answer_A' => $this->input->post('answer_A'),
					'answer_B' => $this->input->post('answer_B'),
					'answer_C' => $this->input->post('answer_C'),
					'answer_D' => $this->input->post('answer_D'),
					'correct_answer' => $this->input->post('correct_answer')
					);
				$this->question_model->update_question($question_data,$qid);
				redirect('admin/search_question','refresh');
			}
			else
			{
				$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
			}
		}
		$this->_render_page('admin/update_question',$this->data);
	}

	public function list_questions($listdata=null)
	{
		$this->data['title'] = 'List Questions';
		if(!$listdata)
		{
			$result = $this->question_model->list_questions();
			$this->data['list'] = json_encode($result);
			// print_r('<pre>');
			// print_r($result);
		}
		else
		{
			$this->data['list'] = json_encode($listdata);
			// print_r('<pre>');
			// print_r($listdata);
		}
		$this->_render_page('admin/list_questions',$this->data);
	}

	public function list_quiz($listdata)
	{
		$this->data['title'] = 'Exam';
		$this->data['list'] = json_encode($listdata);
		$this->data['message'] = $this->session->flashdata('message');
		$this->_render_page('exam/one_exam',$this->data);
	}

	public function search_question()
	{
		$this->data['title'] = 'Search Questions';

		$this->form_validation->set_rules('keywords','Keywords','required');
		if($this->form_validation->run() == TRUE)
		{
			$keywords = $this->input->post('keywords');
			$keyarray = explode(" ",$keywords);
			$result = $this->question_model->search_question($keyarray);

			$this->list_questions($result);
		}
		else
		{
			$this->_render_page('admin/search_question',$this->data);
		}
	}

	public function add_quiz()
	{
		$this->data['title'] = 'Add Quiz';

		if( !$this->db->table_exists('quiz_lib') )
		{
			$this->quiz_model->create_quiz_lib();
		}

		//每个qid都不能相同，表单验证时能否实现
		$this->form_validation->set_rules('q1','Q1','required');
		$this->form_validation->set_rules('q2','Q2','required');
		$this->form_validation->set_rules('q3','Q3','required');
		$this->form_validation->set_rules('q4','Q4','required');
		$this->form_validation->set_rules('q5','Q5','required');
		$this->form_validation->set_rules('q6','Q6','required');
		$this->form_validation->set_rules('q7','Q7','required');
		$this->form_validation->set_rules('q8','Q8','required');
		$this->form_validation->set_rules('q9','Q9','required');
		$this->form_validation->set_rules('q10','Q10','required');

		if($this->form_validation->run() == TRUE)
		{
			$quiz_data = array(
				'question_1' => $this->input->post('q1'),
				'question_2' => $this->input->post('q2'),
				'question_3' => $this->input->post('q3'),
				'question_4' => $this->input->post('q4'),
				'question_5' => $this->input->post('q5'),
				'question_6' => $this->input->post('q6'),
				'question_7' => $this->input->post('q7'),
				'question_8' => $this->input->post('q8'),
				'question_9' => $this->input->post('q9'),
				'question_10' => $this->input->post('q10'),
				);
				//calculate the maximum qid
				$query = $this->db->query('select count(*) from question_lib');
				$result = $query->result();
				foreach($result[0] as $value)
				{
					$count = $value;
				}
				//compare each input qid with the maximum qid
				$error = 0;
				foreach($quiz_data as $value)
				{
					if($value > $count)
					{
						$error = 1;
					}
				}
				if(!$error)
				{
					$this->quiz_model->add_quiz($quiz_data);
					$this->session->set_flashdata('message','添加成功');
					redirect('/admin/add_quiz','refresh');
				}
				else
				{
					//input qid > maximum qid, pop a error.
				}
		}
		else
		{
			$this->data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
		}
		$this->_render_page('admin/add_quiz',$this->data);
	}

	public function add_random_quiz()
	{
		$return_value = $this->quiz_model->add_random_quiz();
		$this->session->set_flashdata('message','添加成功');
		redirect('/admin/add_quiz','refresh');
	}

	public function admin_main()
	{
		$this->data['title'] = 'Admin Main';
		$this->_render_page('admin/admin_main',$this->data);
	}
}

?>
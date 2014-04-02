<?php
	define('quiz_number',10);

	class Quiz_model extends CI_Model
	{
		function __construct()
		{
			$this->load->database();
			$this->load->helper('array');
		}

		public function create_quiz_lib()
		{
			$quest = "
				CREATE TABLE quiz_lib (
				quizid int(11) unsigned NOT NULL AUTO_INCREMENT,
				question_1 int(10) NOT NULL,
				question_2 int(10) NOT NULL,
				question_3 int(10) NOT NULL,
				question_4 int(10) NOT NULL,
				question_5 int(10) NOT NULL,
				question_6 int(10) NOT NULL,
				question_7 int(10) NOT NULL,
				question_8 int(10) NOT NULL,
				question_9 int(10) NOT NULL,
				question_10 int(10) NOT NULL,

				PRIMARY KEY (quizid)
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			";
			$this->db->query($quest);
		}

		public function create_userscore_lib()
		{
			$quest = "
				CREATE TABLE userscore_lib (
				uid int(11) unsigned NOT NULL,
				score int(11) unsigned NOT NULL,
				time  varchar(30) NOT NULL
				) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			";
			$this->db->query($quest);
		}

		public function add_random_quiz()
		{
			$query = $this->db->query('select count(*) from question_lib');
			$result = $query->result();
			foreach($result[0] as $value)
			{
				$count = $value;
			}
			$q_number = range(1,$count);
			shuffle($q_number);
			$sequence = array_slice($q_number,0,constant('quiz_number'));
			$quiz_data = array();
			for($i = 0;$i<constant('quiz_number');$i++)
			{
				$j = $i+1;
				$str = 'question_'.$j;
				$quiz_data[$str] = $sequence[$i];
			}
			$return_value = $this->db->insert('quiz_lib',$quiz_data);
			return $return_value;
			// print_r('<pre>');
			// print_r($quiz_data);
			// die();
		}

		public function add_quiz($quiz_data)
		{
			$return_value = $this->db->insert('quiz_lib',$quiz_data);
			return $return_value;
		}

		//创建一个试题给用户测验
		public function create_exam()  
		{
			$query = $this->db->query('select count(*) from quiz_lib');
			$result = $query->result();
			foreach($result[0] as $value)
			{
				$count = $value;
			}
			$q_number = range(1,$count);
			$quizid = random_element($q_number);
			
			$this->db->where('quizid',$quizid);
			$this->db->from('quiz_lib');
			$query = $this->db->get();
			$result = $query->result();

			foreach($result[0] as $key => $value)
			{
				$tmp[$key] = $value;
			}
			$exam = array_slice($tmp,1,constant('quiz_number'));

			// print_r('<pre>');
			// print_r($exam);
			// die();
			return $exam;
		}

		public function add_quiz_result($score)
		{
			$data = array(
				'uid' => '2',
				'score' => $score,
				'time' => date('Y-m-d H:i:s')
				);
			if( !$this->db->table_exists('userscore_lib') )
			{
				$this->create_userscore_lib();
			}
			$this->db->insert('userscore_lib',$data);
		}
	}
?>
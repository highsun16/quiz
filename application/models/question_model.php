<?php
	class Question_model extends CI_Model
	{
		public function __construct()
		{
			$this->load->database();
		}

		function create_question_lib()
		{
			$quest = "
				CREATE TABLE question_lib (
					qid int(11) unsigned NOT NULL AUTO_INCREMENT,
					question varchar(200) NOT NULL,
					answer_A varchar(200) NOT NULL,
					answer_B varchar(200) NOT NULL,
					answer_C varchar(200) NOT NULL,
					answer_D varchar(200) NOT NULL,
					correct_answer varchar(5) NOT NULL,
					PRIMARY KEY (qid)
					) ENGINE=InnoDB DEFAULT CHARSET=utf8;
			";
			$this->db->query($quest);
		}

		public function add_question($question_data)
		{
			$this->db->insert('question_lib',$question_data);
		}

		public function update_question($question_data,$qid)
		{
			$this->db->where('qid',$qid);
			$this->db->update('question_lib',$question_data);
		}

		public function list_questions()
		{
			$query = $this->db->get('question_lib');
			return $query->result();
		}

		public function search_question($keyarray=null)
		{
			//会在题干和答案中搜索所有关键词，效率?
			$this->db->from('question_lib');
			foreach($keyarray as $row)
			{	
				$this->db->or_like('question',$row);
				$this->db->or_like('answer_A',$row);
				$this->db->or_like('answer_B',$row);
				$this->db->or_like('answer_C',$row);
				$this->db->or_like('answer_D',$row);
			}
			$result = $this->db->get()->result();
			return $result;
			// print_r('<pre>');
			// var_dump($result);
		}

		public function search_question_withqid($keyarray=null)
		{
			//会在题干和答案中搜索所有关键词，效率?
			$this->db->from('question_lib');
			foreach($keyarray as $row)
			{	
				$this->db->or_where('qid',$row);
			}
			$result = $this->db->get()->result();
			return $result;
			// print_r('<pre>');
			// var_dump($result);
		}

		// public function delete_question($qid)
		// {
		// 	if(!$qid)
		// 	{
		// 		$this->db->where('qid',$qid);
		// 		$this->db->delete('question_lib');		//如果做完题后，已经在用户做题档案里生成数据了，再删除岂不是出问题，是不是考虑不要删除功能
		// 	}
		// }
	}
?>
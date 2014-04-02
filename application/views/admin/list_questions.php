<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	<div class="masthead">
        <h3 class="text-muted">题目列表</h3>
    </div>
	<div class = 'frame'>
		<div id = 'question_list'>
			<table id = 'q_table' class = 'table table-bordered'>

			</table>
		<div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		var listData = eval(<?php echo $list?>);
		for(i=0;i<listData.length;i++)
		{
			qid = listData[i]['qid'];
			question = '<tr class = "success"><td>'+listData[i]['question']+'</td></tr>';
			ans_a = '<tr><td>A. '+listData[i]['answer_A']+'</td></tr>';
			ans_b = '<tr><td>B. '+listData[i]['answer_B']+'</td></tr>';
			ans_c = '<tr><td>C. '+listData[i]['answer_C']+'</td></tr>';
			ans_d = '<tr><td>D. '+listData[i]['answer_D']+'</td></tr>';
			corr_ans = '<tr class = "danger"><td>'+listData[i]['correct_answer']+'</td></tr><tr><td>';
			//delete_btn = '<input type = "button" value = "delete" class = "delete_button" name = "delete_'+qid+'">';
			edit_btn = '<input type ="button" value = "编辑" class = "edit_button btn btn-primary" name = "edit_'+qid+'"></td></tr>';
			blank = '<tr><td>&nbsp;</td></tr>';
			$('#q_table').append(question+ans_a+ans_b+ans_c+ans_d+corr_ans+edit_btn+blank);
		}

		$('.edit_button').on('click',function(event){
			str = event.currentTarget.name;
			qid = str.substr(5,str.length);
			$(this).redirect('update_question',{qid:qid});
		});

	});
</script>

<style type="text/css">
h3{
	margin-left: 35px;
	margin-top: 30px;
}

.frame
{
	margin: 10px;
	padding: 20px;
}

td{
	font-size: 18px;
}
</style>

<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	<div id = 'exam' class = 'frame'>
		<form method = 'post' action = 'result'>
			<table id = 'exam_table' class = 'table table-bordered'>

			</table>
			<input type = 'submit' value = '提 交' class = 'btn btn-primary'>
		</form>
	<div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		var listData = eval(<?php echo $list?>);
		for(i=0;i<listData.length;i++)
		{
			j=i+1;
			qid = listData[i]['qid'];
			correct_answer = listData[i]['correct_answer'];
			question = '<tr class = "success"><td>'+j+'. '+listData[i]['question']+'</td></tr>';
			ans_a = '<tr><td> A:'+listData[i]['answer_A']+'</td></tr>';
			ans_b = '<tr><td> B:'+listData[i]['answer_B']+'</td></tr>';
			ans_c = '<tr><td> C:'+listData[i]['answer_C']+'</td></tr>';
			ans_d = '<tr><td> D:'+listData[i]['answer_D']+'</td></tr>';
			ans = "<tr><td><input type = 'radio' name = 'q"+j+"' value = 'A'>A <input type = 'radio' name = 'q"+j+"' value = 'B'>B <input type = 'radio' name = 'q"+j+"' value = 'C'>C <input type = 'radio' name = 'q"+j+"' value = 'D'>D </td></tr>";
			hidden_ans = '<tr><td><input type = "hidden" name = "ans'+j+'" value = "'+correct_answer+'"</td></tr>';
			$('#exam_table').append(question+ans_a+ans_b+ans_c+ans_d+ans+hidden_ans);
		}
	});
</script>

<style type="text/css">

.frame
{
	margin: 5px;
	padding: 20px;
}

td{
	font-size: 18px;
}

input[type = 'radio']
{
	width: 30px;
}

</style>

<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?> 
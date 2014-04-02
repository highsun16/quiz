<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	<div class = 'frame'>
		<form id = 'question_form' action = 'update_question' method = 'post' role = 'form'>
			<div class = 'form-group'>
				<label for = ''>QID</label>
				<input class = 'form-control' type = 'text' id = 'qid' name = 'qid' value = '<?php echo $qid; ?>' readonly = 'readonly'>
			</div>
			<div class = 'form-group'>
				<label for = ''>QUESTION</label>
				<input class = 'form-control' type = 'text' id = 'question' name = 'question' value = '<?php echo $question;?>'>
			</div>
			<div class = 'form-group'>
				<label for = 'answer_A'>ANSWER A</label>
				<input class = 'form-control' type = 'text' id = 'answer_A' name = 'answer_A' value = '<?php echo $answer_A ?>'>
			</div>
			<div class = 'form-group'>
				<label for = 'answer_B'>ANSWER B</label>
				<input class = 'form-control' type = 'text' id = 'answer_B' name = 'answer_B' value = '<?php echo $answer_B ?>' >
			</div>
			<div class = 'form-group'>
				<label for = 'answer_C'>ANSWER C</label>
				<input class = 'form-control' type = 'text' id = 'answer_C' name = 'answer_C' value = '<?php echo $answer_C ?>' >
			</div>
			<div class = 'form-group'>
				<label for = 'answer_D'>ANSWER D</label>
				<input class = 'form-control' type = 'text' id = 'answer_D' name = 'answer_D' value = '<?php echo $answer_D ?>' >
			</div>
			<div class = 'form-group'>
				<label for = 'correct_answer'>CORRECT ANSWER</label>
				<input type = 'radio' name = 'correct_answer' id = 'radio_a' value = 'A'>A
				<input type = 'radio' name = 'correct_answer' id = 'radio_b' value = 'B'>B
				<input type = 'radio' name = 'correct_answer' id = 'radio_c' value = 'C'>C
				<input type = 'radio' name = 'correct_answer' id = 'radio_d' value = 'D'>D
			</div>
			<div class = 'form-group'>
				<input type = 'submit' value = '提交' class = 'btn btn-primary'>
				<input type = 'button' value = '清除' class = 'btn btn-danger' id = 'clear'>
			</div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#clear').click(function(){
			$('.form-control').val('');
			$('#qid').val('<?php echo $qid; ?>');
			$('input[type = "radio"').removeAttr('checked');		
		});
	});
</script>

<style type="text/css">
label{
	width: 100%;
	font-size: 16px;
	font-family: Arial;
	font-weight: 500;
	padding: 5px;
}

p{
	width: 100%;
	font-size: 16px;
	font-family: Arial;
	font-weight: 500;
	padding: 5px;
}

.frame
{
	margin: 30px;
	border: 1px solid #c0c0c0;
	padding: 20px;
	background-color: #eeeeee;
}

input[type = 'radio']
{
	width: 30px;
}</style>

<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>
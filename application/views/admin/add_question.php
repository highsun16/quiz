<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	 <div class="masthead">
        <h3 class="text-muted">添加题目</h3>
      </div>
	<div class = 'frame'>
		<div>
			<p><?php echo $message?></p>
		</div>
		<div class = 'form-table'>
			<form role = 'form' id = 'question_form' action = 'add_question' method = 'post'>
				<div class = 'form-group'>
					<label for = 'question'>QUESTION</label>
					<input type = 'text' id = 'question' name = 'question' class = 'form-control' placeholder = 'Enter Question'>
				</div>
				<div class = 'form-group'>
					<label for = 'answer_A'>ANSWER A</label>
					<input type = 'text' id = 'answer_A' name = 'answer_A' class = 'form-control' placeholder = 'Enter Answer_A'>
				</div>
				<div class = 'form-group'>
					<label for = 'answer_A'>ANSWER B</label>
					<input type = 'text' id = 'answer_B' name = 'answer_B' class = 'form-control' placeholder = 'Enter Answer_B'>
				</div>
				<div class = 'form-group'>
					<label for = 'answer_A'>ANSWER C</label>
					<input type = 'text' id = 'answer_C' name = 'answer_C' class = 'form-control' placeholder = 'Enter Answer_C'>
				</div>
				<div class = 'form-group'>
					<label for = 'answer_A' class = 'answer'>ANSWER D</label>
					<input type = 'text' id = 'answer_D' name = 'answer_D' class = 'form-control' placeholder = 'Enter Answer_D'>
				</div>
				<div class = 'form-group'>
					<p>CORRECT ANSWER:</p>
					<input type = 'radio' name = 'correct_answer' id = 'radio_a' value = 'A'>A
					<input type = 'radio' name = 'correct_answer' id = 'radio_b' value = 'B'>B
					<input type = 'radio' name = 'correct_answer' id = 'radio_c' value = 'C'>C
					<input type = 'radio' name = 'correct_answer' id = 'radio_d' value = 'D'>D
				</div>
				<div class = 'form-group'>
					<input type = 'submit' value = '提 交' class = 'btn btn-primary' >
					<input type = 'button' value = '清 除' class = 'btn btn-danger' id = 'clear'>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$('#clear').click(function(){
			$('.form-control').val('');
			$('input[type = "radio"').removeAttr('checked');
		});
	});
</script>


<style type="text/css">
h3{
	margin-left: 35px;
	margin-top: 30px;
}

.btn
{
	margin: 10px 10px 0px 0px;
}

.frame
{
	margin: 30px;
	border: 1px solid #c0c0c0;
	padding: 20px;
	background-color: #eeeeee;
}

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

input[type = 'radio']
{
	width: 30px;
}

</style>

<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>
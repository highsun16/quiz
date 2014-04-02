<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	<div class="masthead">
        <h3 class="text-muted">添加试题</h3>
    </div>
	<div class = 'frame'>
		<div>
			<p><?php echo $message?></p>
		</div>
		<form method = 'post' action = 'add_quiz' role = 'form'>
		<div class = 'form-group'>
			<label for = 'q1'>Please input the qid of question 1</label>
			<input type = 'text' name = 'q1' class = 'form-control'>
		</div>
		<div class = 'form-group'>
			<label for = 'q2'>Please input the qid of question 2</label>
			<input type = 'text' name = 'q2' class = 'form-control'>
		</div>
		<div class = 'form-group'>
			<label for = 'q3'>Please input the qid of question 3</label>
			<input type = 'text' name = 'q3' class = 'form-control'>
		</div>
		<div class = 'form-group'>
			<label for = 'q4'>Please input the qid of question 4</label>
			<input type = 'text' name = 'q4' class = 'form-control'>
		</div>
		<div class = 'form-group'>
			<label for = 'q5'>Please input the qid of question 5</label>
			<input type = 'text' name = 'q5' class = 'form-control'>
		</div>
		<div class = 'form-group'>
			<label for = 'q6'>Please input the qid of question 6</label>
			<input type = 'text' name = 'q6' class = 'form-control'>
		</div>
		<div class = 'form-group'>
			<label for = 'q7'>Please input the qid of question 7</label>
			<input type = 'text' name = 'q7' class = 'form-control'>
		</div>
		<div class = 'form-group'>
			<label for = 'q8'>Please input the qid of question 8</label>
			<input type = 'text' name = 'q8' class = 'form-control'>
		</div>
		<div class = 'form-group'>
			<label for = 'q9'>Please input the qid of question 9</label>
			<input type = 'text' name = 'q9' class = 'form-control'>
		</div>
		<div class = 'form-group'>
			<label for = 'q10'>Please input the qid of question 10</label>
			<input type = 'text' name = 'q10' class = 'form-control'>
		</div>
		<div class = 'form-group'->
			<input type = 'submit' value = '提   交' class = 'btn btn-primary' id = 'ok'>
		</div>
		</form>
		<form method = 'post' action = 'add_random_quiz' role = 'form'>
			<input type = 'submit' value = '随机生成' id = 'rndQuiz' class = 'btn btn-success'>
		</form>
	</div>
</div>


<style type="text/css">

#ok{
	width: 118px;
}

h3{
	margin-left: 35px;
	margin-top: 30px;
}

.btn
{
	margin: 10px 10px 0px 0px;
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

.frame
{
	margin: 30px;
	border: 1px solid #c0c0c0;
	padding: 30px;
	background-color: #eeeeee;
}

</style>

<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>
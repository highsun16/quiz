<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	<div class="masthead">
        <h3 class="text-muted">查  找</h3>
    </div>
	<div class = 'frame'>
		<form method = 'post' action = 'search_question' role = 'form'>
			<div class = 'form-group'>
				<label for = 'keywords'>Keywords</label>
				<input type = 'text' name = 'keywords' class = 'form-control'>
			</div>
			<div class = 'form-group'>
				<input type = 'submit' value = 'Search' class = 'btn btn-primary'>
			</div>
		</form>
	</div>
</div>

<style type="text/css">
h3{
	margin-left: 35px;
	margin-top: 30px;
}

.frame
{
	margin: 30px;
	border: 1px solid #c0c0c0;
	padding: 20px;
	background-color: #eeeeee;
}
input[type='text']
{
	width: 300px;
}
label{
	width: 100%;
	font-size: 16px;
	font-family: Arial;
	font-weight: 500;
	padding: 5px 0px 0px 0px;
}
</style>

<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>
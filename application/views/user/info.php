<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	
		<div>
			<h3 class = "text-muted">User Info</h3>
		</div>
	<div class = 'frame'>
		<table class = 'table table-bordered table-striped' id = 'info-table'>

		</table>
	</div>
	<div>
		<form role = 'form' action = '<?php echo $this->config->base_url();?>exam/one_exam' method = 'post'>
			<input type = 'submit' class = 'btn btn-success' value = '开始测验'>
		</form>
	</div>
</div>

<script>
	$(document).ready(function(){
		var info = eval(<?php echo $info?>);
		var lastname = info[0]['last_name'];
		var firstname = info[0]['first_name'];
		var phone = info[0]['phone'];
		var email = info[0]['email'];
		var company = info[0]['company'];

		lastname_str = '<tr><td>Lastname</td><td>'+lastname+'</td></tr>';
		firstname_str = '<tr><td>Firstname</td><td>'+firstname+'</td></tr>';
		email_str = '<tr><td>Email</td><td>'+email+'</td></tr>';
		phone_str = '<tr><td>Phone</td><td>'+phone+'</td></tr>';
		company_str = '<tr><td>Company</td><td>'+company+'</td></tr>';
		$('#info-table').append(lastname_str+firstname_str+email_str+phone_str+company_str);
	});
</script>

<style type="text/css">

table{
	margin-top: 20px;
}

tr{
	font-size: 18px;
}
</style>

<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?> 
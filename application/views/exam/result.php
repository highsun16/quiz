<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	<div class = 'frame'>
		<h3 class = "text-muted">您本次测验成绩为：<?php echo $result?>分</h3>
		<div>
			<form method = 'post' action = '<?php echo $this->config->base_url();?>user/info'>
				<input type = 'submit' class = 'btn btn-primary' value = '返回'>
			</form>
		</div>
	</div>
</div>

<style type="text/css">
.frame
{
	padding: 20px;
}
input
{
	margin-top: 20px;
}

</style>


<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?> 
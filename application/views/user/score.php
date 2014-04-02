<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
	
		<div>
			<h3 class = "text-muted">Score</h3>
		</div>
	<div class = 'frame'>
		<table class = 'table table-bordered table-striped' id = 'score-table'>
			<tr>
				<th>测试时间</th>
				<th>测试成绩</th>
			</tr>
		</table>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function(){
		var scoreArr = eval(<?php echo $score?>);
		for(i=0;i<scoreArr.length;i++)
		{
			time = scoreArr[i]['time'];
			aScore = scoreArr[i]['score'];
			str = '<tr><td>'+time+'</td><td>'+aScore+'</td></tr>';
			$('#score-table').append(str);
		}
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
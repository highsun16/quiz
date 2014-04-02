<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(__FILE__) . '/common/page_header.php';
if($sPath) { require_once $sPath; }
?>
<style>
	.bs-callout h4 {
		margin-top: 0;
		margin-bottom: 5px;
	}

	.bs-callout-info h4 {
		color: #5bc0de;
	}

	.bs-callout {
		margin: 20px 0;
		padding: 20px;
		border-left: 3px solid #eee;
	}

	.bs-callout-info {
		background-color: #f4f8fa;
		border-color: #5bc0de;
	}

	p {
		font-size: 15px;
	}
</style>
<div class="container">
	<h3>FPA乐嘉性格色彩测试</h3>
	<div class="bs-callout bs-callout-info">
		<h4>1. 面对他人对自己的赞美，我的本能反应是：</h4>
		<div class="radio">
			<label>
				<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
				<p>A. 没有也无所谓，欣喜也不至于。</p>
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2" >
				<p>B. 我不需那些赞美，宁可他们欣赏我的能力。</p>
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" >
				<p>C. 有点怀疑对方是否认真或立即回避众人的关注。</p>
			</label>
		</div>
		<div class="radio">
			<label>
				<input type="radio" name="optionsRadios" id="optionsRadios4" value="option4" >
				<p>D. 赞美是一件多么令人愉悦的事。</p>
			</label>
		</div>
	</div>
</div>
<?php
$sPath =  dirname(__FILE__) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>
<script type="text/javascript">
	$(document).ready(function() {
	});
</script>

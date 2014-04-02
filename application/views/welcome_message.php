<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(__FILE__) . '/common/page_header.php';
if($sPath) { require_once $sPath; }
?>

<style>
	body{
		background: url('assets/img/cover_blur.jpg') fixed;
	    background-size: cover;
	    padding: 0;
	    margin: 0;
	}

	#body{
		margin-top: 80px;
	}

	.wrap
	{
	    width: 100%;
	    height: 100%;
	    min-height: 100%;
	    position: absolute;
	    top: 0;
	    left: 0;
	    z-index: 99;
	}

	p.form-title
	{
	    font-family: 'Open Sans' , sans-serif;
	    font-size: 20px;
	    font-weight: 600;
	    text-align: center;
	    color: #FFFFFF;
	    margin-top: 5%;
	    text-transform: uppercase;
	    letter-spacing: 4px;
	    margin-top: 60px;
	}

	form
	{
	    width: 250px;
	    margin: 0 auto;
	}

	form.login input[type="text"], form.login input[type="password"]
	{
	    width: 100%;
	    margin: 0;
	    padding: 5px 10px;
	    background: 0;
	    border: 0;
	    border-bottom: 1px solid #FFFFFF;
	    outline: 0;
	    font-style: italic;
	    font-size: 12px;
	    font-weight: 400;
	    letter-spacing: 1px;
	    margin-bottom: 5px;
	    color: #FFFFFF;
	    outline: 0;
	}

	form.login input[type="submit"]
	{
	    width: 100%;
	    font-size: 14px;
	    text-transform: uppercase;
	    font-weight: 500;
	    margin-top: 16px;
	    outline: 0;
	    cursor: pointer;
	    letter-spacing: 1px;
	}

	form.login input[type="submit"]:hover
	{
	    transition: background-color 0.5s ease;
	}

	form.login .remember-forgot
	{
	    float: left;
	    width: 100%;
	    margin: 10px 0 0 0;
	}
	form.login .forgot-pass-content
	{
	    min-height: 20px;
	    margin-top: 5px;
	    margin-bottom: 10px;
	}
	form.login label, form.login a
	{
	    font-size: 12px;
	    font-weight: 400;
	    color: #FFFFFF;
	}

	form.login a
	{
	    transition: color 0.5s ease;
	}

	form.login a:hover
	{
	    color: #2ecc71;
	}

	.pr-wrap
	{
	    width: 100%;
	    height: 100%;
	    min-height: 100%;
	    position: absolute;
	    top: 0;
	    left: 0;
	    z-index: 999;
	    display: none;
	}

	.show-pass-reset
	{
	    display: block !important;
	}

	.pass-reset
	{
	    margin: 0 auto;
	    width: 250px;
	    position: relative;
	    margin-top: 45%;
	    z-index: 999;
	    background: #FFFFFF;
	    padding: 20px 15px;
	}

	.pass-reset label
	{
	    font-size: 12px;
	    font-weight: 400;
	    margin-bottom: 15px;
	}

	.pass-reset input[type="email"]
	{
	    width: 100%;
	    margin: 5px 0 0 0;
	    padding: 5px 10px;
	    background: 0;
	    border: 0;
	    border-bottom: 1px solid #000000;
	    outline: 0;
	    font-style: italic;
	    font-size: 12px;
	    font-weight: 400;
	    letter-spacing: 1px;
	    margin-bottom: 5px;
	    color: #000000;
	    outline: 0;
	}

	.pass-reset input[type="submit"]
	{
	    width: 100%;
	    border: 0;
	    font-size: 14px;
	    text-transform: uppercase;
	    font-weight: 500;
	    margin-top: 10px;
	    outline: 0;
	    cursor: pointer;
	    letter-spacing: 1px;
	}

	.pass-reset input[type="submit"]:hover
	{
	    transition: background-color 0.5s ease;
	}

	.intro{
		margin-top: 20px;
		width: 550px;
		height: 600px;
		background-color: #222222;
		background: rgba(30,30,30,0.65);
	    border-radius: 10px; color: #FFFFFF;
	}
	.context{
		padding: 15px;
		margin-left: 20px;
		font-family: 'Open Sans' , sans-serif;
	    font-size: 18px;
	    text-transform: uppercase;
	    letter-spacing: 4px;
	}
	h4{
		margin-top: 50px;
	}

</style>

<div class="container" id = 'body'>
    <div class="row">
    	<div class = 'col-md-6'>
    		<div class = 'intro'>
    			<div class = 'context'>
	    			<h1>WELCOME to QUIZ<h3>
					<h4>Test your english level</h4>
				</div>
    		</div>
    	</div>
        <div class="col-md-6" id = 'welcomepage'>
            <div class="pr-wrap">
                <div class="pass-reset">
                    <label>
                        请输入您的邮箱，密码重置邮件会发送到您的邮箱中</label>
                    <input type="email" placeholder="Email" />
                    <input type="submit" value="发送" class="pass-reset-submit btn btn-success btn-sm" />
                </div>
            </div>
            <div class="wrap">
                <p class="form-title">
                    Sign In</p>
                <form class="login" action="<?php echo base_url();?>auth/login" method="post">
	                <input id="identity" name="identity" type="text" placeholder="邮箱" />
	                <input id="password" name="password" type="password" placeholder="密码" />
	                <input type="submit" value="登录" class="btn btn-success btn-sm" />
	                <div class="remember-forgot">
	                    <div class="row">
	                        <div class="col-md-8">
	                            <div class="checkbox">
	                                <label>
	                                    <input type="checkbox" checked="check" />
	                                    记住我
	                                </label>
	                            </div>
	                        </div>
	                        <div class="col-md-4 forgot-pass-content">
	                            <a href="javascription:void(0)" class="forgot-pass">忘记密码</a>
	                        </div>
	                    </div>
	                </div>
                </form>
            </div>
        </div>
    </div>
</div>


<?php
$sPath =  dirname(__FILE__) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>

<script type="text/javascript">
	$(document).ready(function() {
		$('.forgot-pass').click(function(event) {
			$(".pr-wrap").toggleClass("show-pass-reset");
		}); 

		$('.pass-reset-submit').click(function(event) {
			$(".pr-wrap").removeClass("show-pass-reset");
		}); 
	});
</script>

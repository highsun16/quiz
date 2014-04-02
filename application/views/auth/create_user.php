<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

<div class = 'container'>
      <div class="masthead">
            <h1 class="text-muted"><?php echo lang('create_user_heading');?></h1>
            <p class = 'text-muted'><?php echo lang('create_user_subheading');?></p>
      </div>
      <div class = 'frame'>
            <div class = 'form-table'>
                  <div id="infoMessage"><?php echo $message;?></div>
                  <form role = 'form' action = 'create_user' method = 'post'>
                        <div class = 'form-group'>
                              <label for = 'first_name'>First Name</label>
                              <input type = 'text' name = 'first_name' class = 'form-control'>
                        </div>
                        <div class = 'form-group'>
                              <label for = 'last_name'>Last Name</label>
                              <input type = 'text' name = 'last_name' class = 'form-control'>
                        </div>
                        <div class = 'form-group'>
                              <label for = 'company'>Company</label>
                              <input type = 'text' name = 'company' class = 'form-control'>
                        </div>
                        <div class = 'form-group'>
                              <label for = 'email'>Email</label>
                              <input type = 'text' name = 'email' class = 'form-control'>
                        </div>
                        <div class = 'form-group'>
                              <label for = 'phone'>Phone</label>
                              <input type = 'text' name = 'phone' class = 'form-control'>
                        </div>
                        <div class = 'form-group'>
                              <label for = 'password'>Password</label>
                              <input type = 'password' name = 'password' class = 'form-control'>
                        </div>
                        <div class = 'form-group'>
                              <label for = 'password_confirm'>Confirm Password</label>
                              <input type = 'password' name = 'password_confirm' class = 'form-control'>
                        </div>
                        <div class = 'form-group'>
                              <input type = 'submit' value = 'Creat User' class = 'btn btn-success'>
                        </div>
                  </form>
            </div>
      </div>
</div>

<style type="text/css">

h1{
      margin-left: 35px;
      margin-top: 30px;
}

.btn
{
      margin: 10px 10px 0px 0px;
}

.frame
{
      width:800px;
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
      margin-left: 35px;
      width: 100%;
      font-size: 16px;
      font-family: Arial;
      font-weight: 500;
      /*padding: 5px;*/
}
</style>


<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>
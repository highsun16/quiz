<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$sPath =  dirname(dirname(__FILE__)). '/common/page_header.php';
if($sPath) { require_once $sPath;}
?>

    <div class="container">

      <div class="masthead">
        <h2 class="text-muted">WELCOME TO ADMIN SYSTEM</h2>
        
      </div>

      
    </div> <!-- /container -->


<style type="text/css">
h2{
	margin-top: 40px;
}
</style>


<?php
$sPath =  dirname(dirname(__FILE__)) . '/common/page_footer.php';
if($sPath) { require_once $sPath; }
?>
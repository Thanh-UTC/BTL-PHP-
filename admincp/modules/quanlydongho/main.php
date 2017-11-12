<div class="left">
	<?php 
        if(isset($_GET['ac'])){
            	$tam=$_GET['ac'];
            }else{
            	$tam='';
            }if($tam=='them'){
               include('modules/quanlydongho/them.php');
            }if($tam=='sua'){
               include('modules/quanlydongho/sua.php');
            }
	 ?>
</div>
<div class="right">
	<?php 
         include('modules/quanlydongho/lietke.php');
	 ?>
</div>
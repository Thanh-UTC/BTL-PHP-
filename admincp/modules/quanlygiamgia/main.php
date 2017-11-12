<div class="left">
	<?php 
        if(isset($_GET['ac'])){
            	$tam=$_GET['ac'];
            }else{
            	$tam='';
            }if($tam=='them'){
               include('modules/quanlygiamgia/them.php');
            }if($tam=='sua'){
               include('modules/quanlygiamgia/sua.php');
            }
	 ?>
</div>
<div class="right">
	<?php 
         include('modules/quanlygiamgia/lietke.php');
	 ?>
</div>
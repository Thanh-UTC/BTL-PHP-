<div class="left">
	<?php 
        if(isset($_GET['ac'])){
            	$tam=$_GET['ac'];
            }else{
            	$tam='';
            }if($tam=='them'){
               include('modules/quanlyHDNhap/them.php');
            }if($tam=='sua'){
               include('modules/quanlyHDNhap/sua.php');
            }
	 ?>
</div>
<div class="right">
	<?php 
         include('modules/quanlyHDNhap/lietke.php');
	 ?>
</div>
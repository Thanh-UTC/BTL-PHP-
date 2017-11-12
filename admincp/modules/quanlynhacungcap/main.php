<div class="left">
	<?php 
        if(isset($_GET['ac'])){
            	$tam=$_GET['ac'];
            }else{
            	$tam='';
            }if($tam=='them'){
               include('modules/quanlynhacungcap/them.php');
            }if($tam=='sua'){
               include('modules/quanlynhacungcap/sua.php');
            }
	 ?>
</div>
<div class="right">
	<?php 
         include('modules/quanlynhacungcap/lietke.php');
	 ?>
</div>
<div class="left">
	<?php 
        if(isset($_GET['ac'])){
            	$tam=$_GET['ac'];
            }else{
            	$tam='';
            }if($tam=='them'){
               include('modules/quanlyphongcach/them.php');
            }if($tam=='sua'){
               include('modules/quanlyphongcach/sua.php');
            }
	 ?>
</div>
<div class="right">
	<?php 
         include('modules/quanlyphongcach/lietke.php');
	 ?>
</div>
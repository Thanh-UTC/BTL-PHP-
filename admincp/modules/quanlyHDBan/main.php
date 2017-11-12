<div class="left">
	<?php 
        if(isset($_GET['ac'])){
            	$tam=$_GET['ac'];
            }else{
            	$tam='';
            }if($tam=='chitiet'){
               include('modules/quanlyHDBan/danhsach.php');
            }
	 ?>
</div>
<div class="right">
	<?php 
    if(isset($_GET['id'])!=""){
               include('modules/quanlyHDBan/chitiet.php');
            }
         
	 ?>
</div>
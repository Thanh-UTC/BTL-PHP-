<div class="content">
	
	<div class="left">
		<?php include('modules/left/danhsach.php'); ?>
	</div>
	<div class="right">
        <?php 
             if(isset($_GET['xem'])){
                  $tam=$_GET['xem'];
             }else{
                  $tam='';
             }if($tam=='chitietloaisanpham'){
                  include('modules/right/chitietloaisanpham.php');
             }elseif($tam=='chitietsanpham'){
                  include('modules/right/chitietsanpham.php');
             }elseif($tam=='dangky'){
                  include('modules/right/dangky.php');
             }elseif ($tam=='dangnhap') {
                 include('modules/right/dangnhap.php');
              }elseif ($tam=='login_thanhtoan') {
                 include('modules/right/login_thanhtoan.php');
              }elseif($tam =='camon'){
                 include('modules/right/camon.php');
              }elseif($tam =='dangxuat'){
                 include('modules/right/dangxuat.php');
              }elseif($tam=='thanhtoan') {
                 include('modules/right/thanhtoan.php');
              }elseif($tam=='giohang'){
                  include('modules/right/giohang.php');
             }else
                  include('modules/right/tatcasanpham.php');
             ?>     
      </div>
	   
	</div>
	<div class="clear"></div>
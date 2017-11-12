<div class="content">
       <?php 
          if (isset($_GET['quanly'])) {
           	   $tam=$_GET['quanly'];
           }else{
           	$tam='';
           }if ($tam=='quanlythuonghieu') {
           	   include("modules/quanlythuonghieu/main.php");
           }if ($tam=='quanlyphongcach') {
               include("modules/quanlyphongcach/main.php");
           }if ($tam=='quanlynhacungcap') {
               include("modules/quanlynhacungcap/main.php");
           }if ($tam=='quanlygiamgia') {
               include("modules/quanlygiamgia/main.php");
           }if ($tam=='quanlynhanvien') {
               include("modules/quanlynhanvien/main.php");
           }if ($tam=='quanlydongho') {
               include("modules/quanlydongho/main.php");
           }if ($tam=='quanlyHDNhap') {
               include("modules/quanlyHDNhap/main.php");
           }if ($tam=='quanlyHDBan') {
               include("modules/quanlyHDBan/main.php");
           }
        ?>
    </div>
    <div class="clear"></div>

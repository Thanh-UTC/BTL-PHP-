<?php 
@session_start();
/*session_destroy();*/
 ?>   
<h1 style="color: white;">Giỏ hàng</h1>
<h3 style="color: white;float: left;">
  <?php
  /*if(isset($_SESSION['product'])){*/
     /* if(isset($_SESSION["dangnhap"])){
         echo 'Xin chào : '.$_SESSION["dangnhap"].'  ';
         $email=$_SESSION["dangnhap"];
         $sql1 = " select * from khachhang where email='$email'";
         if(!($result=$conn->query($sql1))){
            die("Cannot excute query $sql1");
         }
         $row=$result->fetch_assoc();
          echo $row['makhachhang'];
        }*/
       /* if(isset($_GET['ac'])&& $_GET['ac']=='logout'){
           unset($_SESSION["dangnhap"]));
           //header("location:index.php");
           session_destroy();

  }*/
   ?>
</h3>
<div style="color: white;float: left;">
 
<?php

  if(isset($_SESSION["dangnhap"])){
         //echo '<h3 style="color: white;float: right;">Xin chào : '.$_SESSION["dangnhap"].'</h3>';
         echo '<div class="tieude">Giỏ hàng của bạn | <span>Xin chào bạn:<strong><em> '.$_SESSION['dangnhap'].'</em></strong><a href="index.php?xem=dangxuat" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a></span></div>';
         $email=$_SESSION["dangnhap"];
         $sql1 = " select * from khachhang where email='$email'";
         if(!($result=$conn->query($sql1))){
            die("Cannot excute query $sql1");
         }
         $row=$result->fetch_assoc();
          //echo $row['makhachhang'];
        }  
        echo "<br>"; 
   //session_destroy();

 if(isset($_GET['add'])&& !empty($_GET['add'])){
      $id=$_GET['add'];
      @$_SESSION[$id]+=1;
      header('location:index.php?xem=giohang');
   }
    //cong san pham
   if(isset($_GET['them'])){
      $_SESSION[$_GET['them']]+=1;
      header('location:index.php?xem=giohang');
   }
   //tru san pham
   if(isset($_GET['tru'])){
      $_SESSION[$_GET['tru']]--;
      //header('location:index.php?xem=giohang');
   }
   //xoa san pham
   if(isset($_GET['xoa'])){
      $_SESSION[$_GET['xoa']]=0;
      //header('location:index.php?xem=giohang');
   }
   // hien thi san pham da them
   $thanhtien=0;
   foreach ($_SESSION as $name => $value) {
       if ($value >0) {
         //echo $name.'   '.$value.'<br>';
         $sql="select * from dongho where madongho='".$name."'";
            if(!($result=$conn->query($sql))){
            die("Cannot excute query $sql");
             }
             while ($row=$result->fetch_assoc()) {
               $tongtien=$row['giaban']*$value;
               echo 'Ảnh : <img src="admincp/modules/quanlydongho/uploads/'.$row['anh'].'" width="50" height="50" /> | Tên đồng hồ :'.$row['tendongho'].' | Số lượng :'.$value.' | Giá bán :'.number_format($row['giaban']).' VND | Tổng tiền :'.number_format($tongtien).' VND |'.'<a href="index.php?xem=giohang&them='.$name.'"><img src="images/plus.png" width="20" height="20"></a> | <a href="index.php?xem=giohang&tru='.$name.'"><img src="images/subtract.png" width="20" height="20"></a> | <a href="index.php?xem=giohang&xoa='.$name.'"><img src="images/delete.png" width="20" height="20"></a> | <br><br><br>';
               $thanhtien+=$tongtien;  
               //number_format($row['giaban'])
            }
       }
   }

   if($thanhtien==0){
      echo "Giỏ hàng trống";
   }else{
      echo "Thành tiền = ".$thanhtien." VND";
   } 


 ?>
</div>
<br>
<br>
<!-- <p style="float: right;color: white;"><a href="index.php?xem=thanhtoan">Thanh toan</a></p> -->
<div style="margin-top: 120px;">
  <p style="float: left;color: white;"><a href="index.php?xem=dangky" style="color: #fae68b;">Bạn chưa có tài khoản  ?</a></p>
<p style="float: left;color: #fae68b;margin-left: 40px"><a href="index.php?xem=login_thanhtoan" style="color: #fae68b;">Đăng nhập để thanh toán ?</a></p>
<?php 
if(isset($_SESSION['dangnhap'])){
 ?>
 <!-- <input type="submit" name="thanhtoan" value="Thanh toán" style="margin-left: 20px;"> -->
 <a style="margin-left: 20px;color: #fae68b;" href="index.php?xem=thanhtoan">Thanh toán</a>
 <!-- <a href="index.php?xem=giohang?ac=logout" style="text-decoration:underline;color:#fff; margin-left:10px;">Đăng Xuất</a> -->
 <?php 
}/*$sql="trongbangkhachhang";
$kq=...;
$row=$kq->fetch...
$a=$row["MaK"]
insert into hoadon(MaK,.....) value($a,......)*/
/*$sql1 = " select * from khachhang";
                  if(!($result=$conn->query($sql1))){
                  die("Cannot excute query $sql1");
         }
         $row=$result->fetch_assoc();
         echo $row['makhachhang'];
*/
  ?>
</div>

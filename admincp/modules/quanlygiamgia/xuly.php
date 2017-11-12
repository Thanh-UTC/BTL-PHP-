<?php 
  include '../config.php';
  $magiamgia=$_POST['magiamgia'];
  $tengiamgia=$_POST['tengiamgia'];
  $mucgiam=$_POST['mucgiam'];
  if(isset($_POST['them'])){
    	//them
       $sql = "insert into giamgia (magiamgia,tengiamgia,mucgiam) values ('$magiamgia','$tengiamgia','$mucgiam')";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
         }
          header('location:../../index.php?quanly=quanlygiamgia&ac=them');
     }elseif(isset($_POST['sua'])){
        //sua
    $sql_sua = "update giamgia set magiamgia='$magiamgia',tengiamgia='$tengiamgia',mucgiam='$mucgiam' where magiamgia='$_GET[id]'";
    if(!($result=$conn->query($sql_sua))){
         die("Cannot excute query $sql_sua");
        }
        header('location:../../index.php?quanly=quanlygiamgia&ac=them');
     }else{
        $sql_xoa = "delete from giamgia where magiamgia = '$_GET[id]'";
        if(!($result=$conn->query($sql_xoa))){
         die("Cannot excute query $sql_xoa");
        }
        header('location:../../index.php?quanly=quanlygiamgia&ac=them');
    }
        
 
 ?>
<?php 
  include '../config.php';
  $manhanvien=$_POST['manhanvien'];
  $tennhanvien=$_POST['tennhanvien'];
  $diachi=$_POST['diachi'];
  $sdtnv=$_POST['sdtnv'];
  $cmtnd=$_POST['cmtnd'];
  $anh=$_FILES['anh']['name'];
  $anh_tmp=$_FILES['anh']['tmp_name'];
  move_uploaded_file($anh_tmp,'uploads/'.$anh);
  if(isset($_POST['them'])){
    	//them
       $sql = "insert into nhanvien (manhanvien,tennhanvien,diachi,sdtnv,cmtnd,anh) values ('$manhanvien','$tennhanvien','$diachi','$sdtnv','$cmtnd','$anh')";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
         }
          header('location:../../index.php?quanly=quanlynhanvien&ac=them');
     }elseif(isset($_POST['sua'])){
        //sua
      if($anh!=''){
    $sql_sua = "update nhanvien set manhanvien='$manhanvien',tennhanvien='$tennhanvien',diachi='$diachi',sdtnv='$sdtnv',cmtnd='$cmtnd',anh='$anh' where manhanvien='$_GET[id]'";
       }else{
        $sql_sua = "update nhanvien set manhanvien='$manhanvien',tennhanvien='$tennhanvien',diachi='$diachi',sdtnv='$sdtnv',cmtnd='$cmtnd' where manhanvien='$_GET[id]'";
       }
    if(!($result=$conn->query($sql_sua))){
         die("Cannot excute query $sql_sua");
        }
        header('location:../../index.php?quanly=quanlynhanvien&ac=them');
     }else{
        $sql_xoa = "delete from nhanvien where manhanvien = '$_GET[id]'";
        if(!($result=$conn->query($sql_xoa))){
         die("Cannot excute query $sql_xoa");
        }
        header('location:../../index.php?quanly=quanlynhanvien&ac=them');
    }
        
 
 ?>
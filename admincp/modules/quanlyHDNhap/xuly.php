<?php 
  include '../config.php';
  $mahoadonnhap=$_POST['mahoadonnhap'];
  $ngaynhap=$_POST['ngaynhap'];
  $tendongho=$_POST['tendongho'];
  $soluongnhap=$_POST['soluongnhap'];
  $gianhap=$_POST['gianhap'];
  $nhacungcap=$_POST['nhacungcap'];
  $nhanvien=$_POST['nhanvien'];
  if(isset($_POST['them'])){
    	//them
       $sql_hdnhap = "insert into hoadonnhap (mahoadonnhap,ngaynhap,manhacungcap,manhanvien) values ('$mahoadonnhap','$ngaynhap','$nhacungcap','$nhanvien')";
         if(!($result=$conn->query($sql_hdnhap))){
         die("Cannot excute query $sql_hdnhap");
         }
      $sql_chitiethdnhap= "insert into chitiethoadonnhap(mahoadonnhap,madongho,soluongnhap,gianhap) values ('$mahoadonnhap','$tendongho','$soluongnhap','$gianhap')";
         if(!($result=$conn->query($sql_chitiethdnhap))){
           die("Cannot excute query $sql_chitiethdnhap");
         }
          header('location:../../index.php?quanly=quanlyHDNhap&ac=them');
     }elseif(isset($_POST['sua'])){
        //sua
       $sql_suahdnhap = "update hoadonnhap set mahoadonnhap='$mahoadonnhap',ngaynhap='$ngaynhap',manhacungcap='$nhacungcap',manhanvien='$nhanvien' where mahoadonnhap='$_GET[id]'";
        if(!($result=$conn->query($sql_suahdnhap))){
         die("Cannot excute query $sql_suahdnhap");
        }
        $sql_chitiethdnhap = "update chitiethoadonnhap set mahoadonnhap='$mahoadonnhap',madongho='$tendongho',soluongnhap='$soluongnhap',gianhap='$gianhap' where mahoadonnhap='$_GET[id]'";
         if(!($result=$conn->query($sql_chitiethdnhap))){
         die("Cannot excute query $sql_chitiethdnhap");
        }
        header('location:../../index.php?quanly=quanlyHDNhap&ac=them');
     }else{
        $sql_xoahdnhap = "delete from hoadonnhap where mahoadonnhap = '$_GET[id]'";
        if(!($result=$conn->query($sql_xoahdnhap))){
         die("Cannot excute query $sql_xoahdnhap");
        }
         $sql_xoachitiethoadonnhap = "delete from chitiethoadonnhap where mahoadonnhap = '$_GET[id]'";
        if(!($result=$conn->query($sql_xoachitiethoadonnhap))){
         die("Cannot excute query $sql_xoachitiethoadonnhap");
        }
        header('location:../../index.php?quanly=quanlyHDNhap&ac=them');
    }
        
 
 ?>
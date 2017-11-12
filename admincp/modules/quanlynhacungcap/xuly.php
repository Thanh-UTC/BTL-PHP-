<?php 
  include '../config.php';
  $manhacungcap=$_POST['manhacungcap'];
  $tennhacungcap=$_POST['tennhacungcap'];
  $diachinhacungcap=$_POST['diachinhacungcap'];
  $sdt=$_POST['sdt'];
  if(isset($_POST['them'])){
    	//them
       $sql = "insert into nhacungcap (manhacungcap,tennhacungcap,diachinhacungcap,sdt) values ('$manhacungcap','$tennhacungcap','$diachinhacungcap','$diachinhacungcap')";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
         }
          header('location:../../index.php?quanly=quanlynhacungcap&ac=them');
     }elseif(isset($_POST['sua'])){
        //sua
    $sql_sua = "update nhacungcap set manhacungcap='$manhacungcap',tennhacungcap='$tennhacungcap',diachinhacungcap='$diachinhacungcap',sdt='$sdt' where manhacungcap='$_GET[id]'";
    if(!($result=$conn->query($sql_sua))){
         die("Cannot excute query $sql_sua");
        }
        header('location:../../index.php?quanly=quanlynhacungcap&ac=them');
     }else{
        $sql_xoa = "delete from nhacungcap where manhacungcap = '$_GET[id]'";
        if(!($result=$conn->query($sql_xoa))){
         die("Cannot excute query $sql_xoa");
        }
        header('location:../../index.php?quanly=quanlynhacungcap&ac=them');
    }
        
 
 ?>
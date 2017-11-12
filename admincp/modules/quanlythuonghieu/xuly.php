<?php 
  include '../config.php';
  $tenthuonghieu=$_POST['tenthuonghieu'];
  $quocgia=$_POST['quocgia'];
  if(isset($_POST['them'])){
    	//them
       $sql = "insert into thuonghieu (tenthuonghieu,quocgia) values ('$tenthuonghieu','$quocgia')";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
         }
          header('location:../../index.php?quanly=quanlythuonghieu&ac=lietke');
     }elseif(isset($_POST['sua'])){
        //sua
    $sql_sua = "update thuonghieu set tenthuonghieu='$tenthuonghieu',quocgia='$quocgia' where idthuonghieu='$_GET[id]'";
    if(!($result=$conn->query($sql_sua))){
         die("Cannot excute query $sql_sua");
        }
        header('location:../../index.php?quanly=quanlythuonghieu&ac=them');
     }else{
        $sql_xoa = "delete from thuonghieu where idthuonghieu = '$_GET[id]'";
        if(!($result=$conn->query($sql_xoa))){
         die("Cannot excute query $sql_xoa");
        }
        header('location:../../index.php?quanly=quanlythuonghieu&ac=lietke');
    }
        
 
 ?>
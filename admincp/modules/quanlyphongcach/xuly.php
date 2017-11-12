<?php 
  include '../config.php';
  $maphongcach=$_POST['maphongcach'];
  $tenphongcach=$_POST['tenphongcach'];
  if(isset($_POST['them'])){
    	//them
    if(($tenphongcach=="")||($maphongcach=="")){
      echo "Đừng để trống ô nào";
    }else{
       $sql = "insert into phongcach (maphongcach,tenphongcach) values ('$maphongcach','$tenphongcach')";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
         }
       }
          header('location:../../index.php?quanly=quanlyphongcach&ac=them');
     }elseif(isset($_POST['sua'])){
        //sua
    $sql_sua = "update phongcach set tenphongcach='$tenphongcach' where maphongcach='$_GET[id]'";
    if(!($result=$conn->query($sql_sua))){
         die("Cannot excute query $sql_sua");
        }
        header('location:../../index.php?quanly=quanlyphongcach&ac=them');
     }else{
        $sql_xoa = "delete from phongcach where maphongcach = '$_GET[id]'";
        if(!($result=$conn->query($sql_xoa))){
         die("Cannot excute query $sql_xoa");
        }
        header('location:../../index.php?quanly=quanlyphongcach&ac=lietke');
    }
        
 
 ?>

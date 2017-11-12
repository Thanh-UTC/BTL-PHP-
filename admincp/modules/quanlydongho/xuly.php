<?php 
  include '../config.php';
  $madongho=$_POST['madongho'];
  $tendongho=$_POST['tendongho'];
  $size=$_POST['size'];
  $mau=$_POST['mau'];
  $chongnuoc=$_POST['chongnuoc'];
  $baohanh=$_POST['baohanh'];
  $giaban=$_POST['giaban'];
  $giamgia=$_POST['giamgia'];
  $nhacungcap=$_POST['nhacungcap'];
  $thuonghieu=$_POST['thuonghieu'];
  $anh=$_FILES['anh']['name'];
  $anh_tmp=$_FILES['anh']['tmp_name'];
  move_uploaded_file($anh_tmp,'uploads/'.$anh);
  $phongcach=$_POST['phongcach'];
  if(isset($_POST['them'])){
    	//them
       $sql = "insert into dongho (madongho,tendongho,size,mau,chongnuoc,baohanh,giaban,magiamgia,manhacungcap,idthuonghieu,anh,maphongcach) values ('$madongho','$tendongho','$size','$mau','$chongnuoc','$baohanh','$giaban','$giamgia','$nhacungcap','$thuonghieu','$anh','$phongcach')";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
         }
          header('location:../../index.php?quanly=quanlydongho&ac=them');
     }elseif(isset($_POST['sua'])){
        //sua
    if($anh!=''){
    $sql_sua = "update dongho set madongho='$madongho',tendongho='$tendongho',size='$size',mau='$mau',chongnuoc='$chongnuoc',baohanh='$baohanh',giaban='$giaban',magiamgia='$giamgia',manhacungcap='$nhacungcap',idthuonghieu='$thuonghieu',anh='$anh',maphongcach='$phongcach' where madongho='$_GET[id]'";
       }else{
       $sql_sua = "update dongho set madongho='$madongho',tendongho='$tendongho',size='$size',mau='$mau',chongnuoc='$chongnuoc',baohanh='$baohanh',giaban='$giaban',magiamgia='$giamgia',manhacungcap='$nhacungcap',idthuonghieu='$thuonghieu',maphongcach='$phongcach' where madongho='$_GET[id]'";
       }
    if(!($result=$conn->query($sql_sua))){
         die("Cannot excute query $sql_sua");
        }
        header('location:../../index.php?quanly=quanlydongho&ac=them');
     }else{
        $sql_xoa = "delete from dongho where madongho = '$_GET[id]'";
        if(!($result=$conn->query($sql_xoa))){
         die("Cannot excute query $sql_xoa");
        }
        header('location:../../index.php?quanly=quanlydongho&ac=them');
    }
        
 
 ?>
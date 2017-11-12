<?php 
//@session_start();
	$email=$_SESSION['dangnhap'];
	$sql="select makhachhang from khachhang where email='$email'";
    	if(!($result=$conn->query($sql))){
    	   die("Cannot excute query $sql");
         }
    $makh=$result->fetch_assoc();
    $insert_hdban="insert into hoadonban (makhachhang) value ('".$makh['makhachhang']."')";
		if(!($ketqua=$conn->query($insert_hdban))){
                die("Cannot excute query $insert_hdban");
               }
    
    $thanhtien=0;
   foreach ($_SESSION as $name => $value) {
       if ($value >0) {
         //echo $name.'   '.$value.'<br>';
         //$max="select max(mahoadonban)  from hoadonban";
        $sql="select * from dongho where madongho='".$name."'";
            if(!($result=$conn->query($sql))){
            die("Cannot excute query $sql");
             }
             while ($row=$result->fetch_assoc()) {
               $tongtien=$row['giaban']*$value;
             }
             //echo $tongtien.'<br>';
             //$thanhtien+=$tongtien;
         $max="SELECT mahoadonban FROM `hoadonban` WHERE mahoadonban=(SELECT MAX(mahoadonban) FROM hoadonban)";
          if(!($result1=$conn->query($max))){
                      die("Cannot excute query $max");
               }
          $row1=$result1->fetch_assoc();
          $mahoadonban = $row1['mahoadonban'];
          //echo $mahoadonban;
          $sql1 = "insert into chitiethoadonban (mahoadonban,madongho,soluongban,tongtien) values ('$mahoadonban','$name','$value','$tongtien')";
                  if(!($result=$conn->query($sql1))){
                  die("Cannot excute query $sql1");
         }
        }
       }
       header('location:index.php?xem=camon');
      

 ?>
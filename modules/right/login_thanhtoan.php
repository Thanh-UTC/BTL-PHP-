<?php 
      @session_start();
      if(isset($_POST["dangnhap"])){
      	$email=$_POST["email"];
      	$matkhau=$_POST["matkhau"];
      	$sql="select * from khachhang where email='$email' and matkhau='$matkhau' limit 1";
    	if(!($result=$conn->query($sql))){
    	   die("Cannot excute query $sql");
         }
        $num=$result->fetch_assoc();
        if($num['email']!=$email || $num['matkhau']!=$matkhau){
         	   echo "<script>alert('Sai email hoac mat khau')</script>";
         }elseif($num['email']==$email && $num['matkhau']==$matkhau){
         	   $_SESSION["dangnhap"]=$email;
         	   header("location:index.php?xem=giohang");
         }
      }
 ?>
<form action="" method="POST" enctype="multipart/form-data">
	<table width="200" border="1">
	<tr>
		<td colspan="2"><p style="color: white;">Đăng nhập thành viên</p></td>
	</tr>
	<tr>
		<td><p style="color: white;">Tên tài khoản:</p></td>
		<td><input type="text" name="email" size="30"></td>
	</tr>
	<tr>
		<td><p style="color: white;">Mật khẩu:</p></td>
		<td><input type="password" name="matkhau" size="30"></td>
	</tr>
	<tr>
		<td colspan="2"><div><input type="submit" name="dangnhap" value="Đăng nhập"></div></td>
	</tr>
</table>
<p style="float: left;color: white;"><a href="index.php?xem=dangky" style="color: #fae68b">Đăng ký mới </a></p>
</form>
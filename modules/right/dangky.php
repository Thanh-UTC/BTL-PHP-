<?php 
    if(isset($_POST['dangky'])){
    	//$makhachhang=$_POST["makhachhang"];
    	$tenkhachhang=$_POST["tenkhachhang"];
    	$email=$_POST["email"];
    	$matkhau=$_POST["matkhau"];
    	$dienthoai=$_POST["dienthoai"];
    	$diachikhachhang=$_POST["diachikhachhang"];
    	$sql="INSERT INTO `khachhang`(`tenkhachhang`, `matkhau`, `email`, `dienthoai`, `diachikhachhang`) VALUES ('$tenkhachhang','$matkhau','$email','$diachikhachhang','$dienthoai')";
    	if(!($result=$conn->query($sql))){
    	   die("Cannot excute query $sql");
         }
         if($result){
         	header("location:index.php?xem=dangnhap");
         }else if($result){
         	header("location:index.php?xem=dangky");
         }
       /*  if($sql){
		echo '<h3 style="margin-left:5px;">Bạn đã đăng ký thành công</h3>';
		echo '<a href="?quanly=dangnhap" style="margin:20px;text-decoration:none;">Quay lại để đăng nhập mua hàng</a>';
	    }*/
    }
 ?>
<h1 style="color: #fae68b;">Đăng Ký</h1>
<form action="index.php?xem=dangky" method="post" enctype="multipart-/form-data">
	<table width="200" border="1">
	<tr>
		<td colspan="3"><div align="center"><p style="color: white;">Đăng ký thành viên</p></div></td>
	</tr>
	<!-- <tr>
		<td><p style="color: white;">Mã Khách Hàng:</p></td>
		<td><input type="text" name="makhachhang" size="30"></td>
	</tr> -->
	<tr>
		<td><p style="color: #fae68b;">Tên Khách Hàng:</p></td>
		<td><input type="text" name="tenkhachhang" size="30"></td>
	</tr>
	<tr>
		<td><p style="color: #fae68b;">Email:</p></td>
		<td><input type="text" name="email" size="30"></td>
	</tr>
	<tr>
		<td><p style="color: #fae68b;">Mật khẩu:</p></td>
		<td><input type="password" name="matkhau" size="30"></td>
	</tr>
	<tr>
		<td><p style="color: #fae68b;">Điện thoại:</p></td>
		<td><input type="text" name="dienthoai" size="30"></td>
	</tr>
	<tr>
		<td><p style="color: #fae68b;">Địa chỉ:</p></td>
		<td><input type="text" name="diachikhachhang" size="30"></td>
	</tr>
	<tr>
		<td colspan="2"><input type="submit" name="dangky" value="Đăng Ký" style="color: red;font-weight: bold; background-color:#fae68b; "></td>
		<td></td>
	</tr>
</table>
<p style="float: left;color: white;margin-left: 40px"><a href="index.php?xem=login_thanhtoan" style="color: #fae68b;">Bạn đã có tài khoản ?</a>
</form>

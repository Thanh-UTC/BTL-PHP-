<?php 
         //include('modules/config.php');
         $sql="select * from nhanvien where manhanvien='$_GET[id]'";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
           }
         $row=$result->fetch_assoc();

 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlynhanvien&ac=lietke">Liệt kê nhân viên</a> 
</div>
<form action="modules/quanlynhanvien/xuly.php?id=<?php echo $row['manhanvien']?>" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align: center; font-size: 25px">Sửa nhân viên</td>
  </tr>
 <tr>
    <td width="97">Mã nhân viên :</td>
    <td width="87"><input type="text" name="manhanvien" value="<?php echo $row['manhanvien']?>"readonly></td>
  </tr>
  <tr>
  <td width="97">Tên nhân viên :</td>
  <td width="87"><input type="text" name="tennhanvien" value="<?php echo $row['tennhanvien']?>"></td>
  </tr>
   <tr>
  <td width="97">Địa chỉ :</td>
  <td width="87"><input type="text" name="diachi" value="<?php echo $row['diachi']?>"></td>
  </tr>
  <tr>
    <td width="97">Điện thoại :</td>
    <td width="87"><input type="text" name="sdtnv" value="<?php echo $row['sdtnv']?>"></td>
  </tr>
  <tr>
    <td width="97">Số CMTND :</td>
    <td width="87"><input type="text" name="cmtnd" value="<?php echo $row['cmtnd']?>"></td>
  </tr>
  <tr>
    <td>Ảnh :</td>
    <td><input type="file" name="anh"><img src="modules/quanlynhanvien/uploads/<?php echo $row["anh"] ?>" width="60" height="60"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><input type="submit" name="sua" value="Sửa"></div></td>
  </tr>
</table>
</form>

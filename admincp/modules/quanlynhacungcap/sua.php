<?php 
         //include('modules/config.php');
         $sql="select * from nhacungcap where manhacungcap='$_GET[id]'";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
           }
         $row=$result->fetch_assoc();

 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlynhacungcap&ac=lietke">Liệt kê nhà cung cấp</a> 
</div>
<form action="modules/quanlynhacungcap/xuly.php?id=<?php echo $row['manhacungcap']?>" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align: center; font-size: 25px">Sửa nhà cung cấp</td>
  </tr>
  <tr>
    <td width="97">Mã nhà cung cấp :</td>
    <td width="87"><input type="text" name="manhacungcap" value="<?php echo $row["manhacungcap"] ?>"readonly></td>
  </tr>
  <tr>
  <td width="97">Tên nhà cung cấp :</td>
  <td width="87"><input type="text" name="tennhacungcap" value="<?php echo $row["tennhacungcap"] ?>"></td>
  </tr>
   <tr>
  <td width="97">Địa chỉ :</td>
  <td width="87"><input type="text" name="diachinhacungcap" value="<?php echo $row["diachinhacungcap"] ?>"></td>
  </tr>
  <tr>
    <td width="97">Điện thoại :</td>
    <td width="87"><input type="text" name="sdt" value="<?php echo $row["sdt"] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><input type="submit" name="sua" value="Sửa"></div></td>
  </tr>
</table>
</form>

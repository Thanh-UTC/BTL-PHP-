<?php 
         //include('modules/config.php');
         $sql="select * from giamgia where magiamgia='$_GET[id]'";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
           }
         $row=$result->fetch_assoc();

 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlygiamgia&ac=lietke">Liệt kê giảm giá</a> 
</div>
<form action="modules/quanlygiamgia/xuly.php?id=<?php echo $row['magiamgia']?>" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align: center; font-size: 25px">Sửa giảm giá</td>
  </tr>
  <tr>
    <td width="97">Mã giảm giá :</td>
    <td width="87"><input type="text" name="magiamgia" value="<?php echo $row["magiamgia"] ?>"readonly></td>
  </tr>
  <tr>
  <td width="97">Tên giảm giá :</td>
  <td width="87"><input type="text" name="tengiamgia" value="<?php echo $row["tengiamgia"] ?>"></td>
  </tr>
   <tr>
  <td width="97">Mức giảm :</td>
  <td width="87"><input type="text" name="mucgiam" value="<?php echo $row["mucgiam"] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><input type="submit" name="sua" value="Sửa"></div></td>
  </tr>
</table>
</form>

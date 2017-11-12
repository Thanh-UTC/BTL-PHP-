<?php 
         //include('modules/config.php');
         $sql="select * from phongcach where maphongcach='$_GET[id]'";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
           }
         $row=$result->fetch_assoc();

 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlyphongcach&ac=lietke">Liệt kê phong cách</a> 
</div>
<form action="modules/quanlyphongcach/xuly.php?id=<?php echo $row['maphongcach']?>" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align: center; font-size: 25px">Sửa phong cách</td>
  </tr>
   <tr>
    <td width="97">Mã phong cách :</td>
    <td width="87"><input type="text" name="maphongcach" value="<?php echo $row["maphongcach"] ?>"readonly></td>
  </tr>
  <tr>
    <td width="97">Tên phong cách :</td>
    <td width="87"><input type="text" name="tenphongcach" value="<?php echo $row["tenphongcach"] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><input type="submit" name="sua" value="Sửa"></div></td>
  </tr>
</table>
</form>

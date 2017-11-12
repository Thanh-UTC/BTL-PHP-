<?php 
         //include('modules/config.php');
         $sql="select * from thuonghieu where idthuonghieu='$_GET[id]'";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
           }
         $row=$result->fetch_assoc();

 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlythuonghieu&ac=lietke">Liệt kê sp</a> 
</div>
<form action="modules/quanlythuonghieu/xuly.php?id=<?php echo $row['idthuonghieu']?>" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align: center; font-size: 25px">Sửa thương hiệu</td>
  </tr>
  <tr>
    <td width="97">Tên thương hiệu :</td>
    <td width="87"><input type="text" name="tenthuonghieu" value="<?php echo $row["tenthuonghieu"] ?>"></td>
  </tr>
  <tr>
    <td width="97">Quốc gia :</td>
    <td width="87"><input type="text" name="quocgia" value="<?php echo $row["quocgia"] ?>"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><input type="submit" name="sua" value="Sửa"></div></td>
  </tr>
</table>
</form>

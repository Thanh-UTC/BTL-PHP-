<?php 
         $sql="select * from dongho where madongho='$_GET[id]'";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
           }
         $row=$result->fetch_assoc();
 ?>
<div class="button_themsp">
  <a href="index.php?quanly=quanlydongho&ac=lietke">Liệt kê đồng hồ</a>
</div>
<form action="modules/quanlydongho/xuly.php?id=<?php echo $row["madongho"] ?>" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align: center; font-size: 25px">Sửa đồng hồ</td>
  </tr>
  <tr>
    <td width="97">Mã đồng hồ :</td>
    <td width="87"><input type="text" name="madongho" value="<?php echo $row["madongho"] ?>"readonly></td>
  </tr>
  <tr>
  <td width="97">Tên đồng hồ :</td>
  <td width="87"><input type="text" name="tendongho" value="<?php echo $row["tendongho"] ?>"></td>
  </tr>
   <tr>
  <td width="97">Size :</td>
  <td width="87"><input type="text" name="size" value="<?php echo $row["size"] ?>"></td>
  </tr>
  <tr>
    <td width="97">Màu :</td>
    <td width="87"><input type="text" name="mau" value="<?php echo $row["mau"] ?>"></td>
  </tr>
  <tr>
    <td width="97">Chống nước :</td>
    <td width="87"><input type="text" name="chongnuoc" value="<?php echo $row["chongnuoc"] ?>"></td>
  </tr>
   <tr>
    <td width="97">Bảo hành :</td>
    <td width="87"><input type="text" name="baohanh" value="<?php echo $row["baohanh"] ?>"></td>
  </tr>
   <tr>
    <td width="97">Giá bán :</td>
    <td width="87"><input type="text" name="giaban" value="<?php echo $row["giaban"] ?>"></td>
  </tr>
   <tr>
    <td width="97">Giảm giá :</td>
    <td width="87">
      <?php 
        $sql_gg="select * from giamgia ";
        if(!($result=$conn->query($sql_gg))){
          die("Cannot excute query $sql_gg");
          }
       ?>
      <select name="giamgia">
         <?php 
              while ($row_gg=$result->fetch_assoc()) {
                if($row['magiamgia']==$row_gg['magiamgia']){
          ?>
          <option selected="selected" value="<?php echo $row_gg['magiamgia'] ?>"><?php echo $row_gg['mucgiam'] ?>(%)</option>
         
         <?php 
            }else
            ?>
            <option value="<?php echo $row_gg['magiamgia'] ?>"><?php echo $row_gg['mucgiam'] ?>%</option>
          <?php
        }
          ?>
      </select>
    </td>
  </tr>
     <tr>
    <td width="97">Nhà cung cấp :</td>
    <td width="87">
      <?php 
        $sql_ncc="select * from nhacungcap ";
        if(!($result=$conn->query($sql_ncc))){
          die("Cannot excute query $sql_ncc");
          }
       ?>
      <select name="nhacungcap">
         <?php 
              while ($row_ncc=$result->fetch_assoc()) {
                 if($row['manhacungcap']==$row_ncc['manhacungcap']){
          ?>
          <option selected="selected" value="<?php echo $row_ncc['manhacungcap'] ?>"><?php echo $row_ncc['tennhacungcap'] ?></option>
         <?php 
            }else
              ?>
               <option value="<?php echo $row_ncc['manhacungcap'] ?>"><?php echo $row_ncc['tennhacungcap'] ?></option>
          <?php
             }
          ?>
      </select>
    </td>
  </tr>
  <tr>
    <?php 
        $sql_thuonghieu="select * from thuonghieu ";
        if(!($result=$conn->query($sql_thuonghieu))){
          die("Cannot excute query $sql_thuonghieu");
          }
     ?>
    <td width="97">Thương hiệu :</td>
    <td width="87">
      <select name="thuonghieu">
        <?php 
              while ($row_thuonghieu=$result->fetch_assoc()) {
                if($row['idthuonghieu']==$row_thuonghieu['idthuonghieu']){
          ?>
          <option selected="selected" value="<?php echo $row_thuonghieu['idthuonghieu'] ?>"><?php echo $row_thuonghieu['tenthuonghieu'] ?></option>
         
         <?php 
            }else{
              ?>
            <option value="<?php echo $row_thuonghieu['idthuonghieu'] ?>"><?php echo $row_thuonghieu['tenthuonghieu'] ?></option>
            <?php
          }}
          ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Ảnh :</td>
    <td><input type="file" name="anh">
    <img src="modules/quanlydongho/uploads/<?php echo $row["anh"] ?>" width="60" height="60">
    </td>
  </tr>
  <tr>
     <?php 
        $sql_phongcach="select * from phongcach ";
        if(!($result=$conn->query($sql_phongcach))){
          die("Cannot excute query $sql_phongcach");
          }
     ?>
    <td width="97">Phong cách :</td>
    <td width="87">
      <select name="phongcach">
        <?php 
              while ($row_phongcach=$result->fetch_assoc()) {
                if($row['maphongcach']==$row_phongcach['maphongcach']){
          ?>
          <option selected="selected" value="<?php echo $row_phongcach['maphongcach'] ?>"><?php echo $row_phongcach['tenphongcach'] ?></option>
          <?php 
            }else{
              ?>
           <option value="<?php echo $row_phongcach['maphongcach'] ?>"><?php echo $row_phongcach['tenphongcach'] ?></option>
           <?php
         }}
          ?>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><input type="submit" name="sua" value="Sửa"></div></td>
  </tr>
</table>
</form>
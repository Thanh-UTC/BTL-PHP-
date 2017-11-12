<div class="button_themsp">
  <a href="index.php?quanly=quanlydongho&ac=lietke">Liệt kê đồng hồ</a>
</div>
<form action="modules/quanlydongho/xuly.php" method="post" enctype="multipart/form-data">
<table width="200" border="1">
  <tr>
    <td colspan="2" style="text-align: center; font-size: 25px">Thêm đồng hồ</td>
  </tr>
  <tr>
    <td width="97">Mã đồng hồ :</td>
    <td width="87"><input type="text" name="madongho"></td>
  </tr>
  <tr>
  <td width="97">Tên đồng hồ :</td>
  <td width="87"><input type="text" name="tendongho" value=""></td>
  </tr>
   <tr>
  <td width="97">Size :</td>
  <td width="87"><input type="text" name="size" value=""></td>
  </tr>
  <tr>
    <td width="97">Màu :</td>
    <td width="87"><input type="text" name="mau" value=""></td>
  </tr>
  <tr>
    <td width="97">Chống nước :</td>
    <td width="87"><input type="text" name="chongnuoc" value=""></td>
  </tr>
   <tr>
    <td width="97">Bảo hành :</td>
    <td width="87"><input type="text" name="baohanh" value=""></td>
  </tr>
   <tr>
    <td width="97">Giá bán :</td>
    <td width="87"><input type="text" name="giaban" value=""></td>
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
          ?>
         <option value="<?php echo $row_thuonghieu['idthuonghieu'] ?>"><?php echo $row_thuonghieu['tenthuonghieu'] ?></option>
         <?php 
            }
          ?>
      </select>
    </td>
  </tr>
  <tr>
    <td>Ảnh :</td>
    <td><input type="file" name="anh"></td>
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
          ?>
         <option value="<?php echo $row_phongcach['maphongcach'] ?>"><?php echo $row_phongcach['tenphongcach'] ?></option>
          <?php 
            }
          ?>
      </select>
    </td>
  </tr>
  <tr>
    <td colspan="2"><div align="center"><input type="submit" name="them" value="Them"></div></td>
  </tr>
</table>
</form>
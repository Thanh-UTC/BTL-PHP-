<?php 
         $sql="select hoadonnhap.mahoadonnhap,hoadonnhap.ngaynhap,chitiethoadonnhap.soluongnhap,chitiethoadonnhap.gianhap,chitiethoadonnhap.madongho,hoadonnhap.manhacungcap,hoadonnhap.manhanvien from hoadonnhap,chitiethoadonnhap where hoadonnhap.mahoadonnhap=chitiethoadonnhap.mahoadonnhap and hoadonnhap.mahoadonnhap='$_GET[id]'";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
           }
         $row=$result->fetch_assoc();
 ?>
<div class="button_themsp">
  <a href="index.php?quanly=quanlyHDNhap&ac=lietke">Liệt kê hóa đơn nhập</a>
</div>
<form action="modules/quanlyHDNhap/xuly.php?id=<?php echo $row["mahoadonnhap"] ?>" method="post" enctype="multipart/form-data">
<table border="1"> 
  <tr>
    <td colspan="2" style="text-align: center; font-size: 25px">Sửa hóa đơn</td>
  </tr>
  <tr>
    <td width="">Mã hóa đơn nhập :</td>
    <td width=""><input type="text" name="mahoadonnhap" value="<?php echo $row["mahoadonnhap"] ?>" readonly></td>
  </tr>
  <tr>
  <td width="">Ngày nhập :</td>
  <td width=""><input type="date" name="ngaynhap" value="<?php echo $row["ngaynhap"] ?>"></td>
  </tr>
  <tr>
    <td width="">Tên đồng hồ :</td>
    <td width="">
      <?php 
        $sql_dongho="select * from dongho ";
        if(!($result=$conn->query($sql_dongho))){
          die("Cannot excute query $sql_dongho");
          }
       ?>
      <select name="tendongho" style="width:200px;">
        <?php 
          while ($row_dongho=$result->fetch_assoc()) {
                  if($row_dongho['madongho']==$row['madongho']){
        ?>
        <option selected="selected" value="<?php echo $row_dongho['madongho'] ?>"><?php echo $row_dongho['tendongho']; ?></option>
         <?php 
            }else{     
          ?>
          <option value="<?php echo $row_dongho['madongho'] ?>"><?php echo $row_dongho['tendongho']; ?></option>
          <?php 
             }}
           ?>
      </select>
    </td>
  </tr>
   <tr>
  <td width="">Số lượng nhập :</td>
  <td width=""><input type="text" name="soluongnhap" value="<?php echo $row["soluongnhap"] ?>"></td>
  </tr>
  <tr>
    <td width="">Giá nhập :</td>
    <td width=""><input type="text" name="gianhap" value="<?php echo $row["gianhap"] ?>"></td>
  </tr>
   
     <tr>
    <td width="">Nhà cung cấp :</td>
    <td width="">
      <?php 
        $sql_ncc="select * from nhacungcap ";
        if(!($result=$conn->query($sql_ncc))){
          die("Cannot excute query $sql_ncc");
          }
       ?>
      <select name="nhacungcap">
         <?php 
              while ($row_ncc=$result->fetch_assoc()) {
                if( $row_ncc['manhacungcap']==$row['manhacungcap']){
          ?>
         <option selected="selected" value="<?php echo $row_ncc['manhacungcap'] ?>"><?php echo $row_ncc['tennhacungcap'] ?></option>
         <?php 
            }else{
          ?>
          <option value="<?php echo $row_ncc['manhacungcap'] ?>"><?php echo $row_ncc['tennhacungcap']; ?></option>
          <?php 
             }}
           ?>
      </select>
    </td>
  </tr>
  <tr>
    <?php 
        $sql_nhanvien="select * from nhanvien ";
        if(!($result=$conn->query($sql_nhanvien))){
          die("Cannot excute query $sql_nhanvien");
          }
     ?>
    <td width="">Tên nhân viên :</td>
    <td width="87">
      <select name="nhanvien">
        <?php 
              while ($row_nhanvien=$result->fetch_assoc()) {
                 if( $row_nhanvien['manhanvien']==$row['manhanvien']){
          ?>
         <option selected="selected" value="<?php echo $row_nhanvien['manhanvien'] ?>"><?php echo $row_nhanvien['tennhanvien'] ?></option>
         <?php 
            }else{
          ?>
          <option value="<?php echo $row_nhanvien['manhanvien'] ?>"><?php echo $row_nhanvien['tennhanvien'] ?></option>
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
<?php 
         $sql="select hoadonnhap.mahoadonnhap,hoadonnhap.ngaynhap,dongho.tendongho,chitiethoadonnhap.soluongnhap,chitiethoadonnhap.gianhap,nhacungcap.tennhacungcap,nhanvien.tennhanvien from dongho,hoadonnhap,chitiethoadonnhap,nhacungcap,nhanvien where dongho.madongho=chitiethoadonnhap.madongho and chitiethoadonnhap.mahoadonnhap=hoadonnhap.mahoadonnhap and hoadonnhap.manhacungcap=nhacungcap.manhacungcap and hoadonnhap.manhanvien=nhanvien.manhanvien";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
      }
 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlyHDNhap&ac=them">Thêm Mới</a> 
</div>
    <table border="1">
      <tr>
        <td width="200">Mã hóa đơn nhập</td>
        <td width="150">Ngày nhập </td>
        <td width="97">Tên đồng hồ </td>
        <td width="97">Số lượng nhập</td>
        <td width="97">Giá nhập</td>
        <td width="97">Nhà cung cấp</td>
        <td width="97">Tên nhân viên</td>   
      </tr>
      <?php
        while ($row=$result->fetch_assoc()) {
       ?>
       <tr>
        <td width="97"><?php echo $row["mahoadonnhap"]; ?></td>
        <td width="97"><?php echo $row["ngaynhap"]; ?></td>
        <td width="97"><?php echo $row["tendongho"]; ?></td>
        <td width="97"><?php echo $row["soluongnhap"]; ?></td>
        <td width="97"><?php echo $row["gianhap"]; ?> VNĐ</td>
        <td width="97"><?php echo $row["tennhacungcap"]; ?></td>
        <td width="97"><?php echo $row["tennhanvien"]; ?></td>  
        <td><a href="index.php?quanly=quanlyHDNhap&ac=sua&id=<?php echo $row["mahoadonnhap"] ?>">Sửa</a></td>
        <td><a href="modules/quanlyHDNhap/xuly.php?id=<?php echo $row["mahoadonnhap"]; ?>">Xóa</a></td>
      </tr>
      <?php 
          }
       ?>
      </table>
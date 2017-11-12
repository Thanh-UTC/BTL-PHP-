<?php 
         $sql="select dongho.*,giamgia.mucgiam,nhacungcap.tennhacungcap,thuonghieu.tenthuonghieu,phongcach.tenphongcach from dongho,giamgia,nhacungcap,thuonghieu,phongcach where dongho.magiamgia=giamgia.magiamgia and dongho.manhacungcap=nhacungcap.manhacungcap and dongho.idthuonghieu=thuonghieu.idthuonghieu and dongho.maphongcach=phongcach.maphongcach";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
      }
 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlydongho&ac=them">Thêm Mới</a> 
</div>
    <table border="1">
      <tr>
        <td width="97">Mã đồng hồ </td>
        <td width="97">Tên đồng hồ </td>
        <td width="97">Size </td>
        <td width="97">Màu </td>
        <td width="97">Chống nước </td>
        <td width="97">Bảo hành </td>
        <td width="97">Giá bán </td>
        <td width="97">Giảm giá </td>
        <td width="97">Nhà cung cấp </td>
        <td width="97">Thương hiệu </td>
        <td>Ảnh </td>
        <td width="97">Phong cách </td>        
      </tr>
      <?php
        while ($row=$result->fetch_assoc()) {
       ?>
       <tr>
        <td width="97"><?php echo $row["madongho"]; ?></td>
        <td width="97"><?php echo $row["tendongho"]; ?></td>
        <td width="97"><?php echo $row["size"]; ?></td>
        <td width="97"><?php echo $row["mau"]; ?></td>
        <td width="97"><?php echo $row["chongnuoc"]; ?></td>
        <td width="97"><?php echo $row["baohanh"]; ?></td>
        <td width="97"><?php echo $row["giaban"]; ?> VNĐ</td>
        <td width="97"><?php echo $row["mucgiam"]; ?> % </td>
        <td width="97"><?php echo $row["tennhacungcap"]; ?></td>
        <td width="97"><?php echo $row["tenthuonghieu"]; ?></td>
        <td><img src="modules/quanlydongho/uploads/<?php echo $row["anh"] ?>" width="60" height="60"></td>
        <td width="97"><?php echo $row["tenphongcach"]; ?></td>   
        <td><a href="index.php?quanly=quanlydongho&ac=sua&id=<?php echo $row["madongho"] ?>">Sửa</a></td>
        <td><a href="modules/quanlydongho/xuly.php?id=<?php echo $row["madongho"]; ?>">Xóa</a></td>
      </tr>
      <?php 
          }
       ?>
      </table>
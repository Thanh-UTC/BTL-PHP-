<?php 
         $sql="select * from nhanvien";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
      }
 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlynhanvien&ac=them">Thêm Mới</a> 
</div>
    <table border="1">
      <tr>
        <td scope="col">Mã nhân viên</td>
        <td scope="col">Tên nhân viên</td>
        <td scope="col">Địa chỉ</td>
        <td scope="col">Điện thoại</td>
        <td scope="col">CMTND</td>
        <td scope="col">Ảnh</td>
      </tr>
      <?php
        while ($row=$result->fetch_assoc()) {
       ?>
       <tr>
        <td scope="col"><?php echo $row["manhanvien"]; ?></td>
        <td scope="col"><?php echo $row["tennhanvien"]; ?></td>
        <td scope="col"><?php echo $row["diachi"]; ?></td>
        <td scope="col"><?php echo $row["sdtnv"]; ?></td>
        <td scope="col"><?php echo $row["cmtnd"]; ?></td>
        <td><img src="modules/quanlynhanvien/uploads/<?php echo $row["anh"] ?>" width="60" height="60"></td>
        <td><a href="index.php?quanly=quanlynhanvien&ac=sua&id=<?php echo $row["manhanvien"] ?>">Sửa</a></td>
        <td><a href="modules/quanlynhanvien/xuly.php?id=<?php echo $row["manhanvien"]; ?>">Xóa</a></td>
      </tr>
      <?php 
          }
       ?>
      </table>
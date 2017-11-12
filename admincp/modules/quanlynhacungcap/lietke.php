<?php 
         $sql="select * from nhacungcap";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
      }
 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlynhacungcap&ac=them">Thêm Mới</a> 
</div>
    <table border="1">
      <tr>
        <td scope="col">Mã nhà cung cấp</td>
        <td scope="col">Tên nhà cung cấp</td>
        <td scope="col">Địa chỉ</td>
        <td scope="col">Điện thoại</td>
      </tr>
      <?php
        while ($row=$result->fetch_assoc()) {
         echo "<tr>
                  <td>".htmlspecialchars($row["manhacungcap"])."</td>
                  <td>".htmlspecialchars($row["tennhacungcap"])."</td>
                  <td>".htmlspecialchars($row["diachinhacungcap"])."</td>
                  <td>".htmlspecialchars($row["sdt"])."</td>
                  <td><a href=\"index.php?quanly=quanlynhacungcap&ac=sua&id={$row["manhacungcap"]}\">Sửa</a></td>
                  <td><a href=\"modules/quanlynhacungcap/xuly.php?id={$row["manhacungcap"]}\">Xóa</a></td>
               </tr>" ;
           }
    //var_dump($result);
   
       ?>
      </table>
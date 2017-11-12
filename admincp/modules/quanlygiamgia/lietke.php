<?php 
         $sql="select * from giamgia";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
      }
 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlygiamgia&ac=them">Thêm Mới</a> 
</div>
    <table border="1">
      <tr>
        <td scope="col">Mã giảm giá</td>
        <td scope="col">Tên giảm giá</td>
        <td scope="col">Mức giảm (%)</td>
      </tr>
      <?php
        while ($row=$result->fetch_assoc()) {
         echo "<tr>
                  <td>".htmlspecialchars($row["magiamgia"])."</td>
                  <td>".htmlspecialchars($row["tengiamgia"])."</td>
                  <td>".htmlspecialchars($row["mucgiam"])."</td>
                  <td><a href=\"index.php?quanly=quanlygiamgia&ac=sua&id={$row["magiamgia"]}\">Sửa</a></td>
                  <td><a href=\"modules/quanlygiamgia/xuly.php?id={$row["magiamgia"]}\">Xóa</a></td>
               </tr>" ;
           }
    //var_dump($result);
   
       ?>
      </table>
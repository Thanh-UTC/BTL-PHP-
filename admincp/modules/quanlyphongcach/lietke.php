<?php 
         $sql="select * from phongcach";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
      }
 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlyphongcach&ac=them">Thêm Mới</a> 
</div>
    <table border="1">
      <tr>
        <td scope="col">Tên phong cách</td>
      </tr>
      <?php
        while ($row=$result->fetch_assoc()) {
         echo "<tr>
                  <td>".htmlspecialchars($row["tenphongcach"])."</td>
                  <td><a href=\"index.php?quanly=quanlyphongcach&ac=sua&id={$row["maphongcach"]}\">Sửa</a></td>
                  <td><a href=\"modules/quanlyphongcach/xuly.php?id={$row["maphongcach"]}\">Xóa</a></td>
               </tr>" ;
           }
    //var_dump($result);
   
       ?>
      </table>
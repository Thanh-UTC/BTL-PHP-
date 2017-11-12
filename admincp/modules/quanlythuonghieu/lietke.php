<?php 
         $sql="select * from thuonghieu";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
      }
 ?>
 <div class="button_themsp">
<a href="index.php?quanly=quanlythuonghieu&ac=them">Thêm Mới</a> 
</div>
    <table border="1">
      <tr>
        <td scope="col">Tên thương hiệu</td>
        <td scope="col">Quốc gia</td>
      </tr>
      <?php
        while ($row=$result->fetch_assoc()) {
         echo "<tr>
                  <td>".htmlspecialchars($row["tenthuonghieu"])."</td>
                  <td>".htmlspecialchars($row["quocgia"])."</td>
                  <td><a href=\"index.php?quanly=quanlythuonghieu&ac=sua&id={$row["idthuonghieu"]}\">Sửa</a></td>
                  <td><a href=\"modules/quanlythuonghieu/xuly.php?id={$row["idthuonghieu"]}\">Xóa</a></td>
               </tr>" ;
           }
    //var_dump($result);
   
       ?>
      </table>
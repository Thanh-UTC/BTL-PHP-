<?php 
//include '../config.php';
   $sql="select * from hoadonban";
   if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
      }
 ?>
    <table border="1">
      <tr>
        <td scope="col">Mã hoá đơn bán</td>
        <td scope="col">Ngày bán</td>
        <td scope="col">Mã khách hàng</td>
        <td scope="col">Chi tiết hóa đơn</td>
         
      </tr>
      <?php
        while ($row=$result->fetch_assoc()) {
         echo "<tr>
                  <td>".htmlspecialchars($row["mahoadonban"])."</td>
                  <td>".htmlspecialchars($row["ngayban"])."</td>
                  <td>".htmlspecialchars($row["makhachhang"])."</td>
                  <td>"."<a href=\"index.php?quanly=quanlyHDBan&ac=chitiet&id={$row["mahoadonban"]}\">Chi tiết</a>"."</td>
               </tr>" ;
           }
    //var_dump($result);
   
       ?>
      </table>
      <!-- <input type="submit" name="chitiet" value="Chi tiết hóa đơn"> -->
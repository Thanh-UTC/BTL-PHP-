<table border="1">
	<?php 
	     $mahoadonban=$_GET['id'];
         $sql="select * from chitiethoadonban where mahoadonban='$mahoadonban'";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
          }
	 ?>
	<tr>
		<td>Mã hóa đơn bán</td>
		<td>Mã đồng hồ</td>
		<td>Số lượng</td>
		<td>Đơn giá</td>
		<td>Thành tiền</td>
	</tr>
	<?php 
       while ($row=$result->fetch_assoc()) {
	 ?>
	 <tr>
		<td><?php echo $row["mahoadonban"]; ?></td>
		<td><?php echo $row["madongho"]; ?></td>
		<td><?php echo $row["soluongban"]; ?></td>
		<td>
		<?php 
		  $dongia=$row["tongtien"]/$row["soluongban"];
		   echo number_format($dongia);
		 ?>
		</td>
		<td><?php echo number_format($row["tongtien"]) ?></td>
	</tr>
	 <?php 
       }
	  ?>
</table>
<?php 
	     $mahoadonban=$_GET['id'];
         $sql="select sum(tongtien) as tong from chitiethoadonban where mahoadonban='$mahoadonban'";
         if(!($result=$conn->query($sql))){
         die("Cannot excute query $sql");
          }
          $row_sum=$result->fetch_assoc();
          echo "Tổng : ".number_format($row_sum["tong"])." VND";

		 ?>
<?  ?>
<?php 
    ob_start();
    $sql_thuonghieu="select * from thuonghieu";
    if(!($result=$conn->query($sql_thuonghieu))){
        die("Cannot excute query $sql_thuonghieu");
      }
 ?>
			<p style="text-align: center; color: black;background:#fae68b; padding: 10px; font-weight: bold;">DANH MỤC SẢN PHẨM</p>
		    <div class="danhmucsanpham" style="background:#fae68b;">
		    	<ul class="nav">
		    		<?php 
                         while ($row=$result->fetch_assoc()) {
                     ?>
		    		<li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $row['idthuonghieu'] ?>"><?php echo $row['tenthuonghieu']; ?></a></li>
		    		<?php 
                      }
		    		 ?>
		    	</ul>
		    </div><!-- Ket thu danh sach san pham -->
<?php 
    $sql_thuonghieu="select * from phongcach";
    if(!($result=$conn->query($sql_thuonghieu))){
        die("Cannot excute query $sql_thuonghieu");
      }
 ?>
		    <p style="text-align: center; color: black;background:white; padding: 10px; font-weight: bold;">THEO PHONG CÁCH</p>
		    <div class="tinhnangsanpham" style="background:white;">
		    	<ul>
		    		<?php 
                         while ($row_pc=$result->fetch_assoc()) {
                     ?>
		    		<li>
		    	        <a href="index.php?xem=chitietloaisanpham&id=<?php echo $row_pc['maphongcach'] ?>"><?php echo $row_pc['tenphongcach'] ?></a>
		    		</li>
		    		<?php 
                       }
		    		 ?>
		    	</ul>

		    </div><!-- Ket thuc tinh nang san pham -->
<? ob_flush(); ?>
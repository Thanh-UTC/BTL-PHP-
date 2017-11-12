<?php 
      $sql_thuonghieu="select * from thuonghieu where idthuonghieu='$_GET[id]'";
      if(!($result=$conn->query($sql_thuonghieu))){
       die("Cannot excute query $sql_thuonghieu");
       }
       $row_thuonghieu=$result->fetch_assoc();
      $sql_phongcach="select * from phongcach where maphongcach='$_GET[id]'";
       if(!($result=$conn->query($sql_phongcach))){
       die("Cannot excute query $sql_phongcach");
       }
       $row_phongcach=$result->fetch_assoc();
 ?>
<!-- <h3 style="color: white;text-align: center;">Chi tiết loại sản phẩm</h3> -->
<p style="text-align: center; color: white;background:#ffb800; padding: 10px; font-weight: bold;font-size: 25px"><?php echo $row_thuonghieu['tenthuonghieu']; ?><?php echo $row_phongcach['tenphongcach']; ?></p>
			<div class="sanphamall">
				<?php 
                $sql_chitiet="select * from dongho where idthuonghieu='$_GET[id]' or maphongcach='$_GET[id]'";
                if(!($result=$conn->query($sql_chitiet))){
                die("Cannot excute query $sql_chitiet");
                  }
             ?>
				<ul>
					 <?php 
                       while ($row_dongho=$result->fetch_assoc()) {
                     ?>
					<li>
						<a href="index.php?xem=chitietsanpham&idthuonghieu=<?php echo $row_dongho['idthuonghieu'] ?>&maphongcach=<?php echo $row_dongho['maphongcach'] ?>&madongho=<?php echo $row_dongho['madongho'] ?>">
							<img src="admincp/modules/quanlydongho/uploads/<?php echo $row_dongho['anh'] ?>" width="220" height="250">
							<p style="color: #fff;font-size: 12px;color: yellow;"><?php echo $row_dongho['tendongho']; ?></p>
							<p style="color: #fff;font-size:12px;color:red;">Giá :<?php echo number_format($row_dongho['giaban']);//number_format($row_dongho['giaban']) ?>VNĐ</p>
							<p style="color:#fff; text-align: center;">Chi tiết</p>
						</a>
					</li>
					<?php 
                       }
					 ?>
				</ul>
			</div>
      

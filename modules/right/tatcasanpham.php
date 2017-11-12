<?php 
     $sql_alldongho="select dongho.*,giamgia.mucgiam,nhacungcap.tennhacungcap,thuonghieu.tenthuonghieu,phongcach.tenphongcach from dongho,giamgia,nhacungcap,thuonghieu,phongcach where dongho.magiamgia=giamgia.magiamgia and dongho.manhacungcap=nhacungcap.manhacungcap and dongho.idthuonghieu=thuonghieu.idthuonghieu and dongho.maphongcach=phongcach.maphongcach";
   if(!($result=$conn->query($sql_alldongho))){
        die("Cannot excute query $sql_alldongho");
      }
 ?>
			<!-- <p style="text-align: center; color: white;background:#ffb800; padding: 10px; font-weight: bold;">TẤT CẢ SẢN PHẨM</p> -->
			<p style="text-align: center; color: white;background:#ffb800; padding: 10px; font-weight: bold;font-size: 25px">TẤT CẢ SẢN PHẨM</p>
			<div class="sanphamall">
				<ul>
					 <?php 
                       while ($row_alldongho=$result->fetch_assoc()) {
                     ?>
					<li>
						<a href="index.php?xem=chitietsanpham&idthuonghieu=<?php echo $row_alldongho['idthuonghieu'] ?>&madongho=<?php echo $row_alldongho['madongho'] ?>">
							<img src="admincp/modules/quanlydongho/uploads/<?php echo $row_alldongho['anh'] ?>" width="220" height="250">
							<p style="color: #fff;font-size: 12px;color: yellow;"><?php echo $row_alldongho['tendongho']; ?></p>
							<p style="color: #fff;font-size:12px;color:red;">Giá :<?php echo number_format($row_alldongho['giaban']); //number_format($row_alldongho['giaban'])?>VNĐ</p>
							<p style="color:#fff; text-align: center;">Chi tiết</p>
						</a>
					</li>
					<?php 
                       }
					 ?>
				</ul>
			</div>
		
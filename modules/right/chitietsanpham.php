<?php 
    $sql_chitietdongho="select dongho.*,giamgia.mucgiam,nhacungcap.tennhacungcap,thuonghieu.tenthuonghieu,phongcach.tenphongcach from dongho,giamgia,nhacungcap,thuonghieu,phongcach where dongho.magiamgia=giamgia.magiamgia and dongho.manhacungcap=nhacungcap.manhacungcap and dongho.idthuonghieu=thuonghieu.idthuonghieu and dongho.maphongcach=phongcach.maphongcach and madongho='$_GET[madongho]'";
   if(!($result=$conn->query($sql_chitietdongho))){
        die("Cannot excute query $sql_chitietdongho");
      }
    $row_chitietdongho=$result->fetch_assoc();
 ?>
<table width="500" border="1" style="border-collapse: collapse; height: auto;">
    <tr>
        <td  colspan="2"><div align="center" style="color: white;">CHI TIẾT SẢN PHẨM</div></td>
    </tr>
     <tr>
        <td colspan="2"><img src="admincp/modules/quanlydongho/uploads/<?php echo $row_chitietdongho['anh'] ?>" width="450" height="450"></td>
    </tr>
    <tr>
    	<td style="color: #fae68b;">Tên sản phẩm:<?php echo $row_chitietdongho['tendongho']; ?></td>
    </tr>
     <tr>
        <td style="color: #fae68b;">Giá sản phẩm:<?php echo $row_chitietdongho['giaban'].'VNĐ' ?></td>
    </tr>
    <tr>
        <td style="color: #fae68b; colspan="2">Size:<?php echo $row_chitietdongho['size']; ?></td>
    </tr>
    <tr>
        <td style="color: #fae68b; colspan="2">Màu:<?php echo $row_chitietdongho['mau']; ?></td>
    </tr>
    <tr>
        <td style="color: #fae68b; colspan="2">Chống nước:<?php echo $row_chitietdongho['chongnuoc']; ?></td>
    </tr>
    <tr>
        <td style="color: #fae68b; colspan="2">Bảo hành:<?php echo $row_chitietdongho['baohanh']; ?></td>
    </tr>
    <tr>
        <td style="color: #fae68b; colspan="2">Giảm giá:<?php echo $row_chitietdongho['mucgiam']; ?> %</td>
    </tr>
    <tr>
        <td style="color: #fae68b; colspan="2">Thương hiệu:<?php echo $row_chitietdongho['tenthuonghieu']; ?></td>
    </tr>
    <tr>
        <td style="color: #fae68b; colspan="2">Phong cách:<?php echo $row_chitietdongho['tenphongcach']; ?></td>
    </tr>
    <a href="index.php?xem=giohang&add=<?php echo $row_chitietdongho['madongho'] ?>"><img src="images/oder.png" width="150" height="150" style="float: right;"></a>

</table>
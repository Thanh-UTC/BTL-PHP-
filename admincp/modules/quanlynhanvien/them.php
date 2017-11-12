<div class="button_themsp">
	<a href="index.php?quanly=quanlynhanvien&ac=lietke">Liệt kê nhân viên</a>
</div>
<form action="modules/quanlynhanvien/xuly.php" method="post" enctype="multipart/form-data">
<table width="200" border="1">
	<tr>
    <td colspan="2" style="text-align: center; font-size: 25px">Thêm nhà nhân viên</td>
  </tr>
  <tr>
    <td width="97">Mã nhân viên :</td>
    <td width="87"><input type="text" name="manhanvien"></td>
  </tr>
  <tr>
  <td width="97">Tên nhân viên :</td>
  <td width="87"><input type="text" name="tennhanvien" value=""></td>
  </tr>
   <tr>
  <td width="97">Địa chỉ :</td>
  <td width="87"><input type="text" name="diachi" value=""></td>
  </tr>
  <tr>
    <td width="97">Điện thoại :</td>
    <td width="87"><input type="text" name="sdtnv" value=""></td>
  </tr>
  <tr>
    <td width="97">Số CMTND :</td>
    <td width="87"><input type="text" name="cmtnd" value=""></td>
  </tr>
  <tr>
    <td>Ảnh :</td>
    <td><input type="file" name="anh"></td>
  </tr>
	<tr>
		<td colspan="2"><div align="center"><input type="submit" name="them" value="Them"></div></td>
	</tr>
</table>
</form>
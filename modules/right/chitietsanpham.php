<?php
    $sql_sanpham="select s.MaSanPham,s.TenSanPham,s.MaLoai, s.MaNhaSX,s.Gia,s.image,s.MoTa, n.Ten, n.DiaChi from sanpham s, nhasanxuat n where MaSanPham=$_GET[id] and s.MaNhaSX=n.ID" ;
    $query_sanpham=DataProvider::ExecuteQuery($sql_sanpham);
    $dong_sanpham=mysqli_fetch_array($query_sanpham);
?>
<link rel="stylesheet" type="text/css" href="./style/css.css">
<meta charset="utf-8">
<meta http-equiv="Content-Type" content="text/html charset=UTF-8"/>
<p style="text-align:center;color:None;background:#00cca8;padding:10px;">Chi Tiết Điện Thoại</p>
<table width="400" border="1" style="border-collapse:collapse>
  <tr>
    <td colspan="2"><div align="center"></div></td>
  </tr>
  
  <tr>
    <td rowspan="4"><img src="Pictures/<?php echo $dong_sanpham['image'] ?>" width="200" height="200" /></td>
    <td>Tên điện thoại: <?php echo $dong_sanpham['TenSanPham'] ?></td>
  </tr>
  <tr>
    <td style="color:#F00" >Giá: <?php echo $dong_sanpham['Gia']. ' VNĐ' ?></td>
  </tr>
  <tr>
    <td style="color:#F00" >Nhà sản xuất: <?php echo $dong_sanpham['Ten'] ?></td>
  </tr>
  <tr>
    <td style="color:#F00" >Xuất xứ: <?php echo $dong_sanpham['DiaChi'] ?></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">Thông số kĩ thuật</div></td>
  </tr>
  <tr>
    <td colspan="2"><?php echo $dong_sanpham['MoTa'] ?></td>
  </tr>

<a href="index.php?xem=giohang&add=<?php echo $dong_sanpham['MaSanPham'] ?>"><img src="Pictures/giohang.jpg" height="100" width="100" style="float:right" /></a
></table>
 

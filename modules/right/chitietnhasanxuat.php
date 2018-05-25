<?php
    //$sql_sanpham="select s.MaSanPham,s.TenSanPham,s.MaLoai, s.MaNhaSX,s.Gia,s.image,s.MoTa, n.Ten,n.ID from sanpham s, nhasanxuat n where MaSanPham=$_GET[id] and s.MaNhaSX=n.ID";
    $sql_sanpham="select * from sanpham where MaNhaSX=$_GET[idnhasanxuat]";
    $query_sanpham=DataProvider::ExecuteQuery($sql_sanpham);
    $dong_sanpham=mysqli_fetch_array($query_sanpham);
?>
<link rel="stylesheet" type="text/css" href="./style/css.css">
<p style="text-align:center;color:none ;background:#00cca8;padding:10px">Chi Tiết Nhà Sản Xuất</p> 
<div class="ChiTiet">
    <?php
    while($dong_sanpham=mysqli_fetch_array($query_sanpham))
    {
        ?>
        <ul>
            <li>
                <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_sanpham['MaSanPham'] ?>">
                    <img src="Pictures/<?php echo $dong_sanpham['image'] ?> " width="100" height="100" />
                    <p><?php echo $dong_sanpham['TenSanPham'] ?></p>
                    <p style="color:#F00;">Giá: <?php echo $dong_sanpham['Gia'] ?> VNĐ </p>
                    <p style="color:#F00;">Chi Tiết</p>
                </a>
            </li>
        </ul>
        <?php
    }
    ?>
</div>
                    

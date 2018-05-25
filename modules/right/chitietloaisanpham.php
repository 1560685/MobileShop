<?php
    $idGet = isset($_GET['id']) ? $_GET['id'] : '';
    if ($idGet == '') {
        $sql_sanpham="select * from sanpham";
    } else {
        $sql_sanpham="select * from sanpham where MaLoai=$idGet";
    }
    
    $query=DataProvider::ExecuteQuery($sql_sanpham);
?>
<link rel="stylesheet" type="text/css" href="./style/css.css">
<p style="text-align:center;color:#none;background:#00cca8;padding:10px">Chi Tiết Loại Sản Phẩm</p>
<div class="ChiTiet">
    <?php
    while($dong_sanpham=mysqli_fetch_array($query))
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
                    

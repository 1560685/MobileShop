<?php
//phan trang
if(isset($_GET['trang']))
{
    $trang=$_GET['trang'];  //Nếu trang đã được chọn -> vd: trang 2, gán biến $trang = 2.
}
else
{
    $trang='1';             //Nếu chưa, gán $trang = 1.
}
$batdau = (($trang - 1) * 10);  //Ví dụ: đang ở trang 1. vậy $batdau = (1 - 1) * 10 = 0. sql_all sẽ lấy từ 0 đến 10 dòng đầu tiên.
include_once("lib/DataProvider.php");        
$sql_all="select * from sanpham limit $batdau,10";
$query_all=DataProvider::ExecuteQuery($sql_all);
?>
<p style="text-align:center;color:none ;background:#00cca8;padding:10px">Tất cả sản phẩm</p>             
<div class="ChiTiet">
    <ul>
        <?php
        while($dong_all=mysqli_fetch_array($query_all))
        {
            ?>
            <li>
                <a href="index.php?xem=chitietsanpham&id=<?php echo $dong_all['MaSanPham']?>">
                    <img src="Pictures/<?php echo $dong_all['image'] ?> " width="100" height="100" />
                    <p><?php echo $dong_all['TenSanPham'] ?></p>
                    <p style="color:#F00;">Giá: <?php echo $dong_all['Gia'] ?> VNĐ </p>
                    <p style="color:#F00;"> Chi tiết </p>
                </a>
            </li>
        <?php } ?>
    </ul>         
</div>
<p style="clear:both;">      
<?php //dem so trang             
$dong_cou=DataProvider::ExecuteQuery("select * from sanpham  ");
$cou=mysqli_num_rows($dong_cou);              
$a=$cou/10;
echo 'Trang:';
for($b=1;$b<$a + 1;$b++)
{
    echo ' <a href="index.php?trang='.$b.'">'.$b.'</a>'.' ' ;
}
?>
</p>
             
 
        	 
             

<?php
    include_once("lib/DataProvider.php");
    $sql_loai="select * from loai";
    $query= DataProvider::ExecuteQuery($sql_loai);
    $sql_nhasanxuat="select * from nhasanxuat";
    $query_nhasanxuat= DataProvider::ExecuteQuery($sql_nhasanxuat);
?>

<p style="text-align:center;color:#none;background:#00cca8;padding:10px">Loại</p>			
            	<div class="DanhSachSanPham">
                	<ul>
                    <?php
                    while($dong=mysqli_fetch_array($query))
					{
                    ?>
                        <li><a href="index.php?xem=chitietloaisanpham&id=<?php echo $dong['MaLoai'] ?>">
						<?php echo $dong['TenLoai'] ?>
                        </a></li>
                       <?php
                   		 }
                       ?>
                    </ul>
            	</div> <!--kết thúc loại-->

<p style="text-align:center;color:#none;background:#00cca8;padding:10px">Nhà sản xuất</p>			
            	<div class="DanhSachSanPham">
                	<ul>
                    <?php
                    while($dong_nhasanxuat=mysqli_fetch_array($query_nhasanxuat))
					{
                    ?>
                        <li><a href="index.php?xem=chitietnhasanxuat&idnhasanxuat=<?php echo $dong_nhasanxuat['ID'] ?>"><?php echo $dong_nhasanxuat['Ten']; ?>
                        </a></li>
                       <?php
                    	}
                       ?>
                    	
                    </ul>
            	</div>
                
                

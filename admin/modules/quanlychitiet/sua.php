<style type="text/css">
span{
	color:#F00;
	
}
.tbSanPham {
	width:960px;
	height: auto;
	font-size:16px;
	font-weight:bold;
	margin: auto;
	border: 0px solid #F60;
}
.tbSanPham tr td{
	padding: .1em;
}	
.dff	{
	background:#00cca8;
	color:#F00;
}
.df{
	border-left:none;
}
.df0{
	border-right:none;
}
</style>
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<script type="text/javascript">
// đoạn check khi điền thông tin bình thường, dùng trên internet
	function check()
	{
		var result = true;
		var form = document.SuaSP;
		if(form.tensp.value.length==0)
		{
			document.getElementById("NameERROR").className="visible";
			document.getElementById("NameOK").className="hidden";
			result = false;
		}
		else
		{
			document.getElementById("NameERROR").className="hidden";
			document.getElementById("NameOK").className="visible";
		}
		return result;
	}
</script>
<?php 
	/*
	GET: 
	- Là phương thức mặc định của HTTPRequest để gửi data từ client về server.
	- Hiển thị parameters trên URL của browser --> không đảm bảo được vấn đề sercurity đối với các thông tin nhạy cảm như password...
	 và liên quan đến giới hạn độ dài của URL --> giới hạn số param truyền đến server.
	- Có thể bookmark được webpage trên browser được.
	POST:
	- Không hiển thị parameters trên URL của browser (trong body request) --> đảm bảo được vấn đề sercurity, không giới hạn số param truyền đến server.
	*/
	//lấy sản phẩm
	$sql = "select * from SanPham where MaSanPham = $_GET[id]";
	include_once ('../lib/DataProvider.php');
	$kq= DataProvider::ExecuteQuery($sql);
	// Lưu ý cách sử dụng câu lệnh dưới ‘tên_field1’=>giá trị 1,0=>giá trị 1,‘tên_field2’=>giá trị 2,1=>giá trị 2,
	$dong = mysqli_fetch_array($kq);
?>
<form action="modules/quanlychitiet/xuly.php" method="POST" enctype="multipart/form-data" name="SuaSP" onsubmit="return check();">
<table class="tbSanPham"  border="1px" cellpadding="5">
  <tr>
    <td colspan="3"><div class="dff" align="center">Sửa chi tiết sản phẩm</div></td>
  </tr>
   <tr>
    <td>Mã sản phẩm</td>
    <td colspan="2"><input readonly="readonly" type="text" name="masp" value="<?php echo $dong['MaSanPham'] ?>"></td>
 
  </tr>
  <tr>
    <td>Tên <span>*</span></td>
    <td  class="df0" ><input value="<?php echo $dong['TenSanPham']?>" type="text" name="tensp"></td>
      <td class="df"><img src="../image/ok.png" name="NameOK" width="16" height="16" class="hidden" id="NameOK" /><img src="../image/error.png" name="NameERROR" width="16" height="16" class="hidden" id="NameERROR" /></td>
  </tr>
  <tr>
  <?php 
  /*
  Lệnh này có chức năng chẳng khác gì lệnh require, 
  tuy nhiên điểm khác biệt đó là lệnh require_once chỉ import đúng một lần,
   nghĩa là khi bạn sử dụng hai lệnh require_once cùng một file 
   thì ở lệnh require_once thứ hai nó sẽ thấy là đã xử lý rồi nên nó sẽ không thực thi nữa.
  */
  	$sql='Select * from Loai';
  	include_once('../lib/DataProvider.php');
	$kq2= DataProvider::ExecuteQuery($sql);
  ?>
    <td>Loại <span>*</span></td>
    <td colspan="2"><select name="loai" >
    <?php 
		while($dong2= mysqli_fetch_array($kq2))
			{
    			if($dong['MaLoai']==$dong2['MaLoai'])
        			{
	?>
        <option selected value="<?php echo $dong2['MaLoai']?>"><?php echo $dong2['TenLoai']?></option>
    <?php 
		} 
		else
		{
	?>
        <option value="<?php echo $dong2['MaLoai']?>"><?php echo $dong2['TenLoai']?></option>
	<?php
		}
		}
	?>
    </select></td>
  </tr>
  <tr>
    <td>Giá</td>
    <td colspan="2"><input  type="text" name="gia" value="<?php echo $dong['Gia']?>"></td>
  </tr>
   <tr>
  <?php 
  	$sql='Select * from NhaSanXuat';
  	include_once('../lib/DataProvider.php');
	$kq2= DataProvider::ExecuteQuery($sql);
  ?>
    <td height="37">Nhà sản xuất <span>*</span></td>
    <td colspan="2"><select name="sx" >
    <?php 
	while($dong2= mysqli_fetch_array($kq2))
	{
    	if($dong['MaNhaSX']==$dong2['ID'])
        	{
	?>
    <option selected value="<?php echo $dong2['ID']?>"><?php echo $dong2['Ten']?></option>
    <?php 
		} 
		else
		{
	?>
        <option value="<?php echo $dong2['ID']?>"><?php echo $dong2['Ten']?></option>
	<?php
		}
		
		}
	?>
    </select></td>
  </tr>
  <tr>
    <td>Hình ảnh <span>*</span></td>
    <td colspan="2"><input type="file" name="hinhanh"><img src="../Pictures/<?php echo $dong['image']; ?>" width="60" height="60"></td>
  </tr>
  <tr>
    <td >Mô tả</td>
    <td colspan="2"><textarea class="ckeditor" name="mota" cols="35" rows="15"><?php echo $dong['MoTa'] ?></textarea></td >
  <tr>
    <td colspan="3"><div align="center">
    <input type="submit" name="sua" value="Sửa"></div>
    </td>
  </tr>
</table>
</form>

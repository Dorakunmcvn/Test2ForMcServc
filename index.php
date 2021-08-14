<?php
/////////////////////////////
//    Code bởi Đoàn Bảo    //
//       McSrc-v1.1        //
// Fb : /Sans.The.Original //
/////////////////////////////
// Biết chút về PHP
// Có Config cho mấy thằng không biết edit code nhá :)
// ĐÃ UPDATE THÊM VÀI CÁI NHƯ THÔNG BÁO, GIFTCODE, BLA BLA BLA...
?>
<!DOCTYPE html>
<html>
    <?php
	  require("sources/head.php");
	?>
	<br />
	<center><b style="color: white; font-size: 35px;">Chào mừng đến với Website của máy chủ <?php echo $servername ?> !</b></center>
	<center><p id='khaitruong' style='border:1px solid green;width:300px;margin:auto; font-size: 25px;'><?php echo $indexnote; ?></p></center>
	<center><p style='color: white; font-size: 20px;'><?php echo $naptherc; ?></p></center>
	<center><a href="<?php echo $btnnaplink; ?>" ><b style='background-color: yellow;border:1px solid red;width:300px;margin:auto;color:white;font-family: "Arial";'><?php echo $btnnaprc; ?></b></a></center>
	<!--
	Đây chỉ là comment nên edit cũng không ảnh hưởng đến code, code example :
	<center><b style="color: white; font-size: 35px;">Chào mừng đến với Website của máy chủ MangoMC !</b></center>
	<center><p id="khaitruong" style="border:1px solid green;width:300px;margin:auto; font-size: 25px;">Server mới khai trương ưu đãi 100% khi nạp thẻ được tặng thêm 100 points !</p></center>
	<center><p style="color: white; font-size: 20px;">Nhấn để nạp ngay</p></center>
	<center><a href=""><b style="background-color: yellow;border:1px solid red;width:300px;margin:auto;color:white;font-family: 'Arial';">Nạp ngay</b></a></center>!-->
  </body>
</html>
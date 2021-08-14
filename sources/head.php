<?php
/////////////////////////////
//    Code bởi Đoàn Bảo    //
//       McSrc-v1.2        //
// Fb : /Sans.The.Original //
/////////////////////////////
// Phần đầu của Web
// Settings
# Cài đặt :
require("config.php");
?>
<!DOCTYPE html>
<html>
<head>
  <title><?php echo $title; ?></title>
  <link type="text/css" rel="stylesheet" href="../sources/css/giaodien.css" />
</head>
<body>
<center><a href="<?php echo $host; ?>"><img src=<?php echo $logo;?> alt="Logo Máy chủ" id="logo" /></a></center>
<br />
<center><b id="logo_name">
<?php
  echo $servername;
?>
</b></center>
<br />
<div id="list">
  <ul>
    <li><a href="<?php echo $homelink; ?>"><?php echo $home; ?></a></li>
	<li><a href="<?php echo $giftcodelink; ?>"><?php echo $giftcode; ?></a></li>
	<li><a href="<?php echo $eventlink; ?>"><?php echo $event; ?></a></li>
	<li><a href="<?php echo $napthelink; ?>"><?php echo $napthe; ?></a></li>
	<li><a href="<?php echo $newslink; ?>"><?php echo $news; ?></a></li>
  </ul>
</div>
<!--Trong phiên bản cũ :!-->
<!--<center><a href="" class="no-dec"><b class="head-css-options"></b>
</a><b class="head-css-options"> - </b>
<a href="" class="no-dec"><b class="head-css-options"></b></a>
<b class="head-css-options"> - </b>
<a href="" class="no-dec"><b class="head-css-options"></b></a>
<b class="head-css-options"> - </b>
<a href="" class="no-dec"><b class="head-css-options"></b></a>
<b class="head-css-options"> - </b>
<a href="" class="no-dec"><b class="head-css-options"></b></a></center>!-->
<style>
  body {
	  <?php echo $backgroundcss; ?>: <?php echo $backgroundcolor; ?>;
	  text-decoration: none;
  }
</style>


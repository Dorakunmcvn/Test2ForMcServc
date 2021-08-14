<?php
// Phần đầu của Web
// Settings
# Cài đặt :
require("config.php");
?>
<head>
  <title><?php echo $title; ?></title>
</head>
<body>
<center><a href="../"><img src=<?php echo $logo;?> alt="Logo Máy chủ" style="vertical-align: sub" id="logo" /></a></center>
<br />
<center><b id="logo_name">
<?php
  echo $servername;
?>
</b></center>
<br />
<center><a href="<?php echo $homelink; ?>"><b class="head-css-options"><?php echo $home; ?></b>
</a><b class="head-css-options"> - </b>
<a href="<?php echo $newslink; ?>"><b class="head-css-options"><?php echo $news; ?></b></a>
<b class="head-css-options"> - </b>
<a href="<?php echo $giftcodelink; ?>"><b class="head-css-options"><?php echo $giftcode; ?></b></a>
<b class="head-css-options"> - </b>
<a href="<?php echo $eventlink; ?>"><b class="head-css-options"><?php echo $event; ?></b></a>
<b class="head-css-options"> - </b>
<a href="<?php echo $napthelink; ?>"><b class="head-css-options"><?php echo $napthe; ?></b></a></center>
<style>
  #logo {
	  height: 80px;
	  width: 81px;
  }
  #logo_name {
	  font-family: 'Arial';
	  color: white;
  }
  body {
	  background-image: url('../images/background.jpg')
  }
  .head-css-options {
	  font-size: 25px;
	  font-family: 'Arial';
	  color: gray;
	  text-decoration: none;
  }
  #khaitruong {
	  color: white;
	  background-color: gray;
  }
</style>


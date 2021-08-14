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
  #logo {
	  height: 80px;
	  width: 81px;
  }
  #logo_name {
	  font-family: 'sans-serif';
	  color: white;
  }
  body {
	  <?php echo $backgroundcss; ?>: <?php echo $backgroundcolor; ?>;
	  text-decoration: none;
  }
  .head-css-options {
	  font-size: 25px;
	  font-family: 'Arial';
	  color: gray;
  }
  #khaitruong {
	  color: white;
	  background-color: gray;
  }
  #list ul {
	  background: #1F568B;
      list-style-type: none;
      text-align: center;
  }
  #list li {
	  color: #f1f1f1;
      display: inline-block;
      width: 120px;
      height: 40px;
      line-height: 40px;
      margin-left: -5px;
  }
  #list a {
	  text-decoration: none;
	  color: #fff;
	  display: block;
	  font-family: 'Arial';
  }
  #list a:hover {
	  background: #F1F1F1;
	  color: #333;
  }
  /*==Reset CSS==*/
  * {
  margin: 0;
  padding: 0;
  }
</style>


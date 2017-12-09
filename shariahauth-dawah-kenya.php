<?php
$page_title = "Articles";
$page_content = "<h3>Articles</h3><hr/>";

if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
  echo json_encode(array("page" => $page_title, "content" => $page_content));
} else {
  ?>
  <!doctype html>
  <html>
  <head>
    <?php
    include "include/header.php";
    echo "<title>" . $page_title . "</title>";
    ?>
    
    <style>
.aaliyah {
	display:none;}
	
.img1 {
    float: right;
    
	background: #FCCE01;
    border: 1px solid #DCDCDC;
	padding: 5px;
	border-radius:5px;
}

.img2 {
	float: right;
    margin: 10px 0 0 0;
	background: #FCCE01;
    border: 1px solid #DCDCDC;
	padding: 5px;
	clear:right;
	border-radius:5px;
	}
	
.img3 {
	float: right;
    margin: 0 0 5px 5px;
	background: #FAFAFA;
    border: 1px solid #DCDCDC;
	padding: 5px;
	hover:border:1px solid #FF0000;
	clear:right;
	
	}
	


</style>
  </head>

<body>

  <?php include "include/before_content.php"; ?>

  
  
  

  <div id="ajax-content">
    <?php echo $page_content; ?>
  </div>
  
  
  
  <!-- <div class="img3">
  <img src="_images/whoweare/3.jpg">
  </div>-->
  
<div style="padding: 0 70px 0 70px;">  
 <?php include "include/articlesmenu.php"; ?>
<br/>
  
<h3>Shariah Authenticity</h3>

<p>Shaikh Yusuf Talal DeLorenzo, Islamic scholar, position is that unless a financial product or service can be certified as Shari’ah compliant by a competent Shari’ah supervisory board, that product's authenticity is dubious. At that point, it will be the responsibility of the individual investor or consumer to determine on his or her own that the product complies with the principles and precepts of the Shari’ah.</p>



</div>
<?php
include "include/source.php";?>


  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

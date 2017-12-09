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
  
<h3>Pricing Transactions Linked to Interest rate Benchmark</h3>

<p>There are continuing debates on whether the spirit of Shari`ah is being violated by the practice of "benchmarking" linked interest rate benchmark such as London Interbank Offered rate (LIBOR) plus an agreed mark-up in also pricing returns on Islamic finance transactions . At a very fundamental level, the reason for the debates is the lack of understanding to clearly discern the difference between the use of LIBOR as a benchmark for pricing and the use of non-Shari’ah compliant assets as a determinant for returns.

<p>However, benchmarking touches upon the integrity of Islamic Finance as a whole, and the concept of Shari’ah-compliance vs Shari’ah-based approach in particular. There are practical challenges delaying a switch to participation-based structures, such as Musharakah and Mudarabah, that require financiers to participate in the underlying asset in a financing transaction.</p>

</div>
<?php
include "include/source.php";?>

  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

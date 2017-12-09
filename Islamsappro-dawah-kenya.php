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
  
<h3>Islam's Approach to Ethical Investment</h3>

<p>Given that many ethical funds have similar characteristics as Islamic funds, it is important for ethical investors attracted by the appeal of Islamic principles as well as the performance of Islamic investments to understand that there are additional prohibitions that must be applied on the products offered. These restrictions which are essentially self-imposed based on belief and conviction act a moral compass; the monitoring of the prohibitions by a Religious (Shari’ah) Supervisory Board may have prevented Islamic financial institutions to deviate from a faith-based system and absorb the shocks within the conventional financial system.

<p>The important principles for Islamic financial instruments for participation and investments that require strict adherence, while providing good returns, are:
<ol>
    <li>Investments must be free of interest, speculation and gambling, all are considered as forms of exploitation</li>
    <li>Investments are made in permissible activities</li>
    <li>Investments must be separately approved by an independent Shari’ah supervisory board to ensure Shari’ah principles are strictly adhered to and deviations and wayward business practice penalised, for example in Islamic finance requires penalties to be paid to charity</li>
</ol>
"The ethical principles on which Islamic finance is based may bring banks closer to their clients and to the true spirit which should mark every financial service," the Vatican's official newspaper Osservatore Romano said in an article its latest March 2009 issue.
</div>
<?php
include "include/source.php";?>

  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

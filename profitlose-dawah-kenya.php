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
  
 <h3>Wealth and Islam</h3>

<p>Islam has a unique dispensation on the theme of wealth, its ownership, distribution and social relationship. Islam enjoins wealth creation not for its own sake.</p>

<p>The theme of Islamic dispensation of wealth is treated as a deeply moral study of self and society. The true nature of wealth in Islam requires social preferences and market exchange mechanisms that are ethicised by human consciousness of the Moral Law. Islam gives precise moral injunctions as to what are, and are not acceptable kinds of wealth. They point out how individual preferences on wealth formation ought to be utilised within the social meaning.

<p>According to Shaikh Yusuf Talal DeLorenzo, well-known and respected Shari’ah advisor and Islamic scholar as well as also author of the three volume “Compendium of Legal Opinions on the Operations of Islamic Banks” the first English reference on the fatwa (religious ruling) issued and published by the Institute, business, in the Qur'anic sense of "profitable trade" or tijarat'un rabihah is business that brings blessings to those who conduct it. Obviously, profits are important as ends, but the means by which those profits are earned are even more important. Indeed, the reason for the emphasis in the Shari’ah on proper transacting is that Islam accords great importance to the economic welfare of society.</p>

</div>
<?php
include "include/source.php";?>

  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

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
  
 <h3>Islamic Economics Order</h3>
<p>Islamic banking is an instrument for the development of an Islamic economic order. Some of the salient features of this order may be summed up as: 
<ol type="1">
<li>While permitting the individual the right to seek economic well-being, Islam makes a clear distinction between what is halal (lawful) and what is haram (forbidden or unlawful) in pursuit of such economic activity. In broad terms, Islam forbids all forms of economic activity, which are morally or socially injurious.</li>
<li>While acknowledging the individual's right to ownership of wealth legitimately acquired, Islam makes it obligatory on the individual to spend his wealth judiciously and not to hoard it, keep it idle or to squander it.</li>
<li>While allowing an individual to retain any surplus wealth, Islam seeks to reduce the margin of the surplus for the well-being of the community as a whole, in particular the destitute and deprived sections of society by participation in the process of Zakat (a tax on wealth that is distributed to the needy).</li>
<li>While making allowance for the ways of human nature and yet not yielding to the consequences of its worst propensities, Islam seeks to prevent the accumulation of wealth in a few hands to the detriment of society as a whole, by its laws of inheritance.</li> 
<li>Viewed as a whole, the economic system envisaged by Islam aims at social justice without inhibiting individual enterprise beyond the point where it becomes not only collectively injurious but also individually self-destructive.</li>
</ol>

</div>
<?php
include "include/source.php";?>

  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

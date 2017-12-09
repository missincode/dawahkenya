<?php
$page_title = "Who we are";
$page_content = "<h3>Who we are</h3><hr/>";

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
	
	

ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    
}

li {
    float: left;
}

li a {
    display: block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover {
    background-color: #318DDE;
color: white;
}

.active{
	background-color:#318DDE;}	

</style>
  </head>

<body>

  <?php include "include/before_content.php"; ?>

  
  
  

  <div id="ajax-content">
    <?php echo $page_content; ?>
  </div>
  
  <img src="_images/whoweare/7.jpg" id="mainImage" alt="Orphanes" width="350" height="315" class="articleImage" style="float:right;"/>
  
  <!-- <div class="img3">
  <img src="_images/whoweare/3.jpg">
  </div>-->
  <ul>
  <li><a href="whoweare-dawah-kenya.php" target="_top">Who we are</a></li>
  <li><a href="orgstruc-dawah-kenya.php" target="_top">Organizational Structure</a></li>
  <li><a class="active">Quality Statement</a></li>
  <li><a href="objectives-dawah-kenya.php">Objectives</a></li>
</ul>



<div class="org">
<h3>Quality Statement</h3>
<p><strong>MISSION:</strong></p>
<ul> 
<li>Foster spiritual values, development, and educational excellence.</li>
</ul>

<p><strong>VISION:</strong> </p>
<ul>
<li>Inspire and motivate communities to expand their horizons and fulfill their passion.</li>
</ul>
<p><strong>MOTTO:</strong></p>
<ul>
<li>Access to knowledge and empowering communities.</li> 
</ul>

<p><strong>CORE VALUES:</strong></p> 
<ul>
<li>Respect, fairness, accountability, responsibility, reconciliation, reverence, embrace diversity and inclusion (co-existence/tolerance in society).</li>
</ul>


</div>
  

 <div>
 
 


</div>
<style>
.aaliyah {
	display:none;}
</style>
  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

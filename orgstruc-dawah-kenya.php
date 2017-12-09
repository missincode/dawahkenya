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


img#orgstruc:hover {

transition: all .2s ease-in-out; 
transform: scale(1.1);
vertical-align:middle;}

p {text-align:center;}
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
  <ul>
  <li><a href="whoweare-dawah-kenya.php" target="_top">Who we are</a></li>
  <li><a class="active">Organizational Structure</a></li>
  <li><a href="quality-dawah-kenya.php" target="_top">Quality Statement</a></li>
  <li><a href="objectives-dawah-kenya.php">Objectives</a></li>
</ul>



<div class="org">

<p><img src="_images/orgstruc.png" id="orgstruc"></p>

</div>
  

 <div>
 
 


</div>


  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

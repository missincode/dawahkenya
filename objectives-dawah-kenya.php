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

p{text-align:left;}	

.active{
	background-color:#318DDE;}

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
  <li><a href="orgstruc-dawah-kenya.php" target="_top">Organizational Structure</a></li>
  <li><a href="quality-dawah-kenya.php" target="_top">Quality Statement</a></li>
  <li><a class="active" >Objectives</a></li>
</ul>

<img src="_images/whoweare/8.jpg" id="mainImage" alt="Orphanes" width="350" height="315" class="articleImage" style="float:right;"/>

<div class="org">
<p><strong>OBJECTIVES:</strong></p>

<ul>	
<li>To attain its vision of being a philanthropic entity.</li>
<li>To help members of the society in addressing problems or challenges affecting and in responding positively to the emerging matters of education, health – (HIV) among others.</li>
<li>To explore and establish a better environment for unity, cohesiveness and understanding among the youth and the entire community.</li>
<li>To empower Group members socio-economically and address other cross cutting issues like healthcare.</li>
<li>To support vulnerable members of the society e.g. orphans, widows, those afflicted with HIV and the needy.</li>

</ul>

<p><strong>AIMS:</strong></p>
<ul>
<li>Creating sustainable development to empower all communities in their respective capacity for a better Kenya.</li>
<li>Rehabilitation and development of talents through education and capacity building for the youth.</li>
<li>Empower, care and support the vulnerable members of society e.g. the old, poor, HIV/AIDS infected persons among others.</li>
<li>Address problems/ challenges that affect the society from time to time by responding positively during emergencies or when called upon to help in evacuating, donating and distributing foodstuffs, medical stuffs and other necessities.</li></ul>



<p><strong>GOALS:</strong></p>
<ul>
<li>Promote growth of society in spirituality, scholarship, self dependence, and leadership in the changing world.</li>
</ul> 


</div>
  

  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

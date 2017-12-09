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
  
  <h3>Rules of Permissibility</h3>
<p>Muslims believe that all things have been provided by God, and the benefits derived from them, are essentially for man’s use, and so are permissible except what is expressly prohibited in The Qur’an or Hadith. When guidance is not clearly given in he Qur’an there are several other sources of law. For example, guidance can be sought from Fiqh, which means ‘understanding’ and is the science of jurisprudence: the science of human intelligence, debate and discussion.</p>
</div>
<?php
include "include/source.php";?>

<script src="js/scriptwhoweare.js"></script>
<style>
.aaliyah {
	display:none;}
</style>
  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

<?php
$page_title = "Education";


$as_json = false;
if (isset($_GET["view_as"]) && $_GET["view_as"] == "json") {
  $as_json = true;
  ob_start();
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
div.img {
    border: 1px solid #ccc;
	
}

div.img:hover {
    border: 1px solid #777;
}

div.img img {
    width: 200px;
    height: 89px;
}

div.desc {
    padding: 15px;
    text-align: center;
}

* {
    box-sizing: border-box;
}

.responsive {
    padding: 0 6px;
    float: left;
    width: 24.99999%;
}

@media only screen and (max-width: 700px){
    .responsive {
        width: 49.99999%;
        margin: 6px 0;
    }
}

@media only screen and (max-width: 500px){
    .responsive {
        width: 100%;
    }
}

.clearfiximg:after {
    content: "";
    display: table;
    clear: both;
}
</style>
  </head>

  <body>

  <?php include "include/before_content.php"; ?>

  <div id="ajax-content">
<?php } ?>
<h3>Education</h3><hr/>
<div align="center">
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button1.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button2.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button3.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button4.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button5.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button6.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button7.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button8.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button9.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button10.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button11.png"></a>
<a href="#" class="hvr-pulse-grow"> <img src="_images/buttons/button12.png"></a>
</div>


<?php
if ($as_json) {
  echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
  ?>
  </div>


  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

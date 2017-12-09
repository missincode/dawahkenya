<?php
$page_title = "Careers";

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
  </head>

  <body>

  <?php include "include/before_content.php"; ?>

  <h3>Careers</h3><hr/>
  <p>Sorry the content you are trying to view is currently unavailable.</p>

  <div id="ajax-content">
<?php } ?>

  

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

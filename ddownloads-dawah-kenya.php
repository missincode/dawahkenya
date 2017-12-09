<?php
$page_title = "Proposal Forms";

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

  <p></p>

  <div id="ajax-content">
<?php } ?>

  <h3>Downloads</h3>
 <iframe src="downloadmanger/demo.php" scrolling="no" frameborder="0" width="600" height="300"></iframe>

<?php
if ($as_json) {
  echo json_encode(array("page" => $page_title, "content" => ob_get_clean()));
} else {
  ?>
  </div>

  <p></p>

  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

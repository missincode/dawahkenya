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
  
  <h3>Prohitbition of Interest</h3>
<p>Riba best translated today as the charging of any interest, meaning money earned on the lending out of money itself. The prohibition on paying or receiving fixed interest is based on the Islamic tenet that money is only a medium of exchange, a way of defining the value of a thing; it has no value in itself, and therefore should not be allowed to give rise to more money, via fixed interest payments, simply by being put in a bank or lent to someone else. The human effort, initiative, and risk involved in a productive venture are more important than the money used to finance it.

<p>Money in Islam is not regarded as an asset from which it is ethically permissible to earn a direct return. Money tends to be viewed purely as a medium of exchange. Interest can leads to injustice and exploitation in society; The Qur’an (2:279) characterises it as unfair, as implied by the word zulm (oppression, exploitation, opposite of adl i.e. justice)

<p>There is no real 'lending' in Islam since all 'lenders' obtain ownership interests in the assets that they finance, or earn a profit-share or purely fee-based remuneration. In order for an Islamic bank to earn a return on money lent, it is necessary to obtain an equity, or ownership, interest in a non-monetary asset. This requires the lender to also participate in the sharing of risk.

<p>Individuals and the world as a whole probably know too well the burden of interest and misery and suffering that irresponsible lenders have inflicted on individuals and societies. It has become so completely institutionalised and accepted in modern economies that it is almost impossible to conceive that there are some who completely oppose it and refuse to enter into any transactions that involve interest. 
Islam's prohibition of interest and usury was not unprecedented. The early Jewish and Christian traditions also forbade riba. Even the renowned Greek philosopher, Aristotle, condemned acquiring of wealth by the practice of charging interest on money.

<p><q>“Very much disliked also is the practice of charging interest: and the dislike is fully justified for interest is a yield arising out of money itself, not a product of that for which money was provided. Money was intended to be a means of exchange; interest represents an increase in the money itself. Hence of all ways of getting wealth, this is the most contrary to nature."</q> Aristotle, The Politics, tr. Sinclair, pg. 46, Penguin 

<p><q>“Do not charge your brother interest, whether on money or food or anything else that may earn interest.”</q> (Deuteronomy 23:19)

<p><q>“If you lend money to My people, to the poor among you, you are not to act as a creditor to him; you shall not charge him interest.”</q> <p>The Holy Bible (American Standard Bible)

<p>[Jesus said], <q>“If you have money, do not lend it at interest, but give [it] to one from whom you will not get it back.” Gospel St Thomas, V95</q></p>

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

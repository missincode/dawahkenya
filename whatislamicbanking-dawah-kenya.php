<?php
$page_title = "Who we are";
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
  
  
 <h3>What is Islamic Banking?</h3>
<p>Islamic banking refers to a system of banking or banking activity that is consistent with the principles of the Shari'ah (Islamic rulings) and its practical application through the development of Islamic economics. The principles which emphasise moral and ethical values in all dealings have wide universal appeal. Shari'ah prohibits the payment or acceptance of interest charges (riba) for the lending and accepting of money, as well as carrying out trade and other activities that provide goods or services considered contrary to its principles. While these principles were used as the basis for a flourishing economy in earlier times, it is only in the late 20th century that a number of Islamic banks were formed to provide an alternative basis to Muslims although Islamic banking is not restricted to Muslims.</p>
 
<p>Islamic banking has the same purpose as conventional banking except that it operates in accordance with the rules of Shari’ah, known as Fiqh al-Muamalat (Islamic rules on transactions). Islamic banking activities must be practiced consistent with the Shari’ah and its practical application through the development of Islamic economics. Many of these principles upon which Islamic banking is based are commonly accepted all over the world, for centuries rather than decades. These principles are not new but arguably, their original state has been altered over the centuries.</p>

<p>The principle source of the Shari’ah is The Qur’an followed by the recorded sayings and actions of Prophet Muhammad (pbuh) – the Hadith. Where solutions to problems cannot be found in these two sources, rulings are made based on the consensus of a community leaned scholars, independent reasoning of an Islamic scholar and custom, so long as such rulings to not deviate from the fundamental teachings in The Qur’an.</p>

<p>It is evident that Islamic finance was practiced predominantly in the Muslim world throughout the Middle Ages, fostering trade and business activities. In Spain and the Mediterranean and Baltic States, Islamic merchants became indispensable middlemen for trading activities. It is claimed that many concepts, techniques, and instruments of Islamic finance were later adopted by European financiers and businessmen.</p>
 
<p>The revival of Islamic banking coincided with the world-wide celebration of the advent of the 15th Century of Islamic calendar (Hijra) in 1976. At the same time financial resources of Muslims particularly those of the oil producing countries, received a boost due to rationalisation of the oil prices, which had hitherto been under the control of foreign oil Corporations. These events led Muslims' to strive to model their lives in accordance with the ethics and principles of Islam.</p>
 
<p>Disenchantment with the value neutral capitalist and socialist financial systems led not only Muslims but also others to look for ethical values in their financial dealings and in the West some financial organisations have opted for ethical operations.</p>
<h4>Origin</h4>
<p>The origin of the modern Islamic bank can be traced back to the very birth of Islam when the Prophet himself acted as an agent for his wife's trading operations. Islamic partnerships (mudarabah) dominated the business world for centuries and the concept of interest found very little application in day-to-day transactions.</p>
<p>Such partnerships performed an important economic function. They combined the three most important factors of production, namely: capital, labour and entrepreneurship, the latter two functions usually combined in one person. The capital-owner contributed the money and the partner managed the business. Each shared in a pre-determined share of the profits. If there was a loss, the capital-provider lost his money and the manager lost his time and labour.</p> 

<h4>Commercial Banks in Muslim Lands</h4> 
<p>Western commercial banks date from about two and a quarter centuries ago, when the western world was dispensing with moral and ethical considerations in economics. When the Muslim world came into contact with the west, Muslims had two choices:
a) To accept commercial banking, arguing that the interest charged by them did not contain the element of riba prohibited in the Qur'an; or,
b) To accept that interest charged was riba and try to develop an alternative system of banking. 
<p>But ancient Muslim institutions, such as the Shari'ah courts, had been made ineffective by the colonial powers. Muslims had no alternative but to work with the colonial institutions, including commercial banking.
<p>Nevertheless, during the 19th century, several religious scholars argued that the term riba referred to loans for consumption, which people found it difficult to repay, and not to commercial banking loans, where the debtor can repay from the profits. 
But the Qur'an makes no distinction between loans for consumption and loans for productive purposes. So their views were rejected. As a consequence, modern commercial banking did not make much headway in Muslim countries and to this day the presents of the conventional framework still dominates the national financial system.</p> 
<h4>Early Western PLS Proposals</h4>
<p>Equity-participation systems had been proposed at various times of economic crises in the United States and Latin America. The most ardent proponent of these was American Economist, Henry Simons (1899 – 1946), who, in the 1930s, argued that the traditional fractional reserve banking system was inherently unstable and should be replaced by two separate financial institutions: 
1.	Deposit banks, which would maintain 100% reserves. They could not fail the depositors and could not create or destroy effective money. They would simply accept deposits. 
2.	Investment trusts, which would perform the lending functions of existing banks. Such companies would obtain funds for lending by selling their own stock. 
Simons' call for a distinction between the payments and portfolio functions of banks, and for 100% reserve requirement in the former, was rejected at the time, but interest in Simons' ideas has remained.
Many reasons have been advanced for the possible instability of the traditional banking system. Simons suggested that the basic flaw was that as a crisis develops and earnings fall, banks make loans to increase reserves. However, each bank can do so only at the expense of other banks and thus some banks become insolvent. 
<p>The bank failures in the U.S. during the 1980s revived interest in equity-based proposals and the separation of the payment of deposits from the portfolio activities of banks. The proposals made were strikingly similar to the Islamic systems now being implemented, at least on the deposit side. But the Islamic system goes further, requiring that loans made by banks should also be equity-based. 
<h4>Islamic Banks in the 20th Century</h4>
<p>When, in the1960s, Muslim thinkers began to explore ways and means of organising commercial banking on an interest-free basis, economists dismissed their work as wishful thinking. 
<p>But, in 1963, in Mit Ghamr, in Egypt, the first Islamic interest-free bank came into being. Mt Ghamr was a rural area and the people were religious. They did not place their savings in any bank, knowing that interest was forbidden in Islam. In these circumstances, the task was not only to respect Islamic values concerning interest, but also to educate the people about the use of banking.
<p>The following types of accounts were accepted:
a) Savings accounts
b) Investment accounts
c) Zakat accounts
<p>No interest was paid on savings accounts, but withdrawals could be made on demand. Small, short-term, interest-free loans for productive purposes could be made. Funds in investment accounts were subject to restricted withdrawals and invested on the basis of profit- sharing. The zakat account attracted the official amount of zakat.
<p>The Mit Ghamr project was successful, as deposits increased from 1963 to 1966. The bank was cautious, rejecting about 60% of loan applications and the default ratio was zero in economically good times. But project was eventually abandoned for political reasons. Nevertheless, it had shown that commercial banking could be organised on a non-interest basis.</p>

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

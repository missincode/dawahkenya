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
  
<h3>Status of Islamic Banking</h3>

<p>Islamic banking is no longer a novel experiment. When the concept of Islamic banking with its ethical values was propagated, financial circles the world over treated it as a utopian dream. Having lived for centuries under the ‘valueless’ capitalist economic system, they asked what ethics had to do with finance?

<p>Besides their range of equity, trade-financing and lending operations, Islamic banks also offer a full spectrum of fee-paid retail services that do not involve interest payments, including checking accounts, spot foreign exchange transactions, fund transfers, letters of credit, travellers' checks, safe-deposit boxes, securities safekeeping investment management and advice, and other normal services of modern banking. Islamic banking because of its value-orientated ethos enables it to draw finances from both Muslims and non-Muslims alike.

<p>Islamic banks are evolving financial and investment instruments that are not only profitable but are also ethically motivated. The ever-increasing application and innovation of the methodologies associated with derivative instruments that revolutionised the global financial industry have also led to a global financial crisis because of the excess greed for profit and the immense uncertainty and risk associated with these types of transactions. There are doubts associated with the permissibility of derivative instruments under Islamic finance generally.

<p>Addressing issues to resolve the global financial crisis world leaders called for a set up on the basis of capitalism of entrepreneurship where banks finance economic development in the real economy, as opposed to the set up on the basis of capitalism of speculation whereby banks derive excessive profit from speculative transactions that do not make any contribution to the real economy.</p>

<h3>Integrity in Islamic Banking</h3>

<p>Islamic banks need to give special care to their integrity and credibility. Some critics are disappointed that Islamic banks have deviated, to a great extent, from the philosophic and idealistic basis that inspired their originators in the 1970s.

<p>Islamic banks come in all shapes and forms: banks and non-banks, large and small, specialized and diversified, traditional and innovative, national and multi-national, successful and unsuccessful, prudent and reckless, strictly regulated and free-wheeling, etc. Some, particularly the “Islamic windows” of conventional banks, are virtually identical to their conventional counterparts, while others are markedly different. Some are driven by real religious considerations, while others use religion only as a way of attracting customers.

<p>There are considerable disagreements among scholars as to which institutions and instruments are religiously acceptable. For some, their legal structure does not allow them to carry out real Islamic business such as trading, leasing or construction activities and hence they end up doing only conventional financial operations with slight changes to appear Islamic.

<p>There is a risk that Islamic banking ideals may get diluted with conventional banking unless Islamic banks do something to establish their distinctness as “Islamic banks”. Non-sharing Islamic modes such as murabaha, salam, istisna'a and ijarah also provide a link between financial transactions and real economic activities, such as trading in tangible assets. But there have to be some underlying goods and services to be the objects of such modes of financing.</p>

<h3>Innovation and Research</h3>

<p>An important area is development of products for meeting statutory liquidity requirements. A related, but more complicated, issue is that of products for Government financing. For the Islamic financial system to be adopted at national levels, the role of Islamic banks and financial institutions in monetary management and government financing, whether it is to cover budget deficit, refinancing or financing the activities of utilities, needs to be enhanced.

<p>The lack of involvement of Islamic finance in government financing is due to lack of research and development (R&D) and differences in Shari'ah-compliance criteria between different countries. Problems arise and are not attended to owing to a lack of active jurists or their differences with regard to innovations. Different Shari'ah Boards interpret contracts differently.

<p>R & D should therefore be attended to by Shari'ah experts under the guidance of the Organisation of Islamic Conferences (OIC) Fiqh Academy (Islamic jurisprudence) and AAOIFI (Accounting and Auditing Organisations of Islamic Financial Institutions). It is also imperative to find ways to block avenues of wilful default and delays by clients.

<p>The institution of discussion (ijtihad) in this perspective is vitally important, because the Shari'ah has the flexibility to respond to changes and diversity. But it is not open to changing from Divine to manmade law. The concepts of custom, the general good, utility or necessity are taken into consideration, but they are relevant only when the clear texts of the Qur'an and Sunnah are taken as a basis for analogies. This still leaves a great deal of room for acceptable inferences to be made in regard to business and finance transactions.

<p>Much research needs to be done on the securitization of assets and strengthening of the recovery/payment systems. In particular, there is a lack of alternatives for public debts and tools of monetary management. Well-defined products, standards and risk management tools to hedge against high volatility in markets are urgently needed.

<p>Besides developing instruments and the framework, Islamic countries have to redesign their plans and priorities. The establishment of a permanent trade fair and an Islamic free market may facilitate the achievement of the objective by promoting intra-OIC trade. This can be achieved by increasing links and establishing an Islamic Monetary Fund by expanding the scope of the International Islamic Financial Market (IIFM) and Liquidity Managed Centre (LMC). The proposed Islamic Monetary Fund (IMF) can have a wider scope to tap excess liquidity with some of the Islamic banks through a mechanism which would encourage both governments and institutional subscribers to the fund to make efforts to promote Islamic finance.

<p>In order to encourage international participation in the Fund, an adjustment mechanism through a coordinating institution such as the Islamic Financial Services Board (IFSB) will have to be introduced to provide a guarantee against exchange rate fluctuations which can cause a loss of principal invested by nationals in the international Islamic capital market.</p>



</div>
<?php
include "include/source.php";?>

  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

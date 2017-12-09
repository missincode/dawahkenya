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
  
 <h3>Profit-and-Loss Sharing</h3>

<p>While Islam employs various practices that do not involve charging or paying interest, the Islamic financial system promotes the concept of participation in a transaction backed by real assets, utilising the funds at risk on a profit-and- loss-sharing basis. Such participatory modes used by Islamic banks are known as Musharakah and Mudarabah. This by no means implies that investments with financial institutions are necessarily speculative. This can be excluded by careful investment policy, diversification of risk and prudent management by Islamic financial institutions.

<p>The concept of profit-and-loss sharing in an enterprise, as a basis of financial transactions is a progressive one as it distinguishes good performance from the bad and the mediocre. This concept therefore encourages better resource management. The Islamic sukuk system is similar to bonds of capitalist system, but in sukuk, money is invested concrete projects and profit share is distributed to clients instead of interest earned.</p>

<h3>Financing Modes of Islamic Banks</h3>

<p>Islamic financing in its first stages used only the partnership modes of musharakah and mudarabah. Later it was realised that, to avoid moral hazards, yet compete successfully with conventional banks, it was necessary to use all permissible Islamic modes and so trade-based and leasing techniques were developed.

<p>The general rule is that all financial arrangements that the contracting parties agree to use are lawful, as long as they do not include an element of interest. Equity-holding and commodity and asset-trading are an integral part of Islamic financing.

<p>The two basic categories of financing are: 1) profit-and-loss-sharing (PLS), also called participatory modes, i.e., musharakah and mudarabah and 2) purchase and hire of goods or assets and services on a fixed-return basis, i.e., murabaha, istisna'a, salam and leasing.

<p>Legitimate modes include financing trade, industry or budget deficits through domestic or foreign sources. Islamic banks may design diversified investment portfolios and instruments that generate profit with the required liquidity. To maximise its profits, a bank needs to look for investments that yield the highest return, minimize risks and provide adequate liquidity. At the same time, it is necessary for the bank's liabilities and assets to be matched.

<p>A pyramid of financial assets can be built based on liquidity and profitability, which are the criteria of prudent banking. At the top would be high-risk and less-liquid assets, such as long-term investments out of its own equity or from deposits of its risk-accepting account-holders. At the bottom of the pyramid would be the least risky and most highly liquid assets, based on murabaha (leasing) or short-term (even overnight) Mudarabah Certificates (PLS).

<p>Musharakah and mudarabah can be used for short, medium and long-term project-financing, import-financing, export financing, working capital financing and financing of single transactions. Diminishing musharakah can be used for large fixed assets such as houses, transport, machinery, etc. Murabaha can be used for purchases of goods needed by the bank's clients. Salam is useful for financing farmers, trading commodities for the public and private sectors and other purchases of measurable and countable things. But it must be kept in mind that buyback and rollover modes may not be used, because they are seen as a back door to interest.

<p>With Islamic financing, the need to assess clients' acceptability is more important than it is for conventional banks. The bank needs to be vigilant and prudent by concentrating on the client's integrity as well as his status regarding property and particularly his willingness to comply with Shari'ah-compliant contracts.

<p>Islamic banks, while functioning within the Shari'ah, can perform the crucial task of resource mobilization and efficient allocation on the basis of both PLS and non-PLS modes. Sharing modes can be used for short, medium and long-term financing, import financing, pre-shipment export financing, working capital financing and financing of single transactions. To ensure the maximum use of Islamic finance in the development of the economy, it is necessary to create an environment that can induce financiers to earmark more funds for musharakah- or mudarabah-based financing of productive units, particularly those of small enterprises.

<p>The non-PLS modes acceptable to the Shari'ah not only complement the PLS modes, but also provide flexibility of choice to meet the needs of different sectors and economic agents in the society. Trade-based modes, such as murabaha, having less risk and better liquidity options, have several advantages over other techniques, but may not be as fruitful in reducing income inequalities and generation of capital goods as participatory techniques are.

<p>Ijarah-based financing, that requires Islamic banks to purchase and maintain the assets and afterwards dispose of them according to Shari'ah rules, requires the banks to engage in activities beyond financial intermediation and are very much conducive to the formation of fixed assets and medium- and long-term investments.

<p>On the basis of the above, it can be said that supply and demand of capital in an interest-free environment have the additional benefit of providing a greater supply of risk-based capital. There is also a more efficient allocation of resources and an active role for banks and financial institutions to play, as required in the asset-based Islamic theory of finance.

<p>Islamic banks can not only survive without interest, but are also helpful in achieving the objective of distributive justice by increasing the supply of risk capital in the economy and facilitating capital formation and the growth of fixed assets and real-sector business activities.

<p>Salam (forward purchase with prepayment of price) has a vast potential to finance productive activities in crucial sectors, particularly agriculture, agro-based industries and the rural economy as a whole. It also provides an incentive to enhance production, as the seller will spare no effort to produce at least the quantity needed for settlement of the loan taken by him as the advance price of the goods.

<p>Salam can also lead to creating a stable commodities market, especially of seasonal commodities, and therefore to stability of their prices. It enables savers to direct their savings to investment outlets, without waiting, for instance, until the harvesting time of agricultural products or the time when they actually need industrial goods and without being forced to spend their savings on consumption.

<p>Banks might engage in fund and portfolio management through a number of asset-managing and leasing and trading companies. Such companies can exist on their own or can be an integral part of some big companies or subsidiaries, as in the case of Universal Banking in Europe. They would manage Investors Schemes to mobilize resources on a mudarabah basis, and to some extent on an agency basis, and use the funds so collected on a murabaha, leasing or equity-participation basis. Subsidiaries can be created for specific sectors or operations and would enter into genuine trade and leasing transactions. Low-risk funds based on short-term murabaha and leasing operations of the banks, in both local and foreign currencies, would be best suited to risk-averse savers who cannot afford the possible losses of PLS-based investments.

<p>Under equity-based funds, banks can offer a type of equity exposure through specified investment accounts where they identify possible investment opportunities from existing or new business clients and invite account-holders to subscribe. Instead of sharing in the bank's profits, the investors share in the profit of the enterprise in which the funds are placed and the bank takes a management fee for its work. Banks can also offer open-ended multiple-equity funds to be invested in stocks.
<p>The small and medium enterprises (SME) sector has a great potential for expanding production capacity and self-employment opportunities in developing countries. Islamic banks may introduce SME-financing funds for various places. Enhancing the role of the financial sector in the development of the SME sub-sector can mitigate the serious problems of unemployment and the low level of exports of such countries.</p>

</div>
<?php
include "include/source.php";?>

  <?php
  include "include/after_content.php";
  echo "</body>\n</html>";
}

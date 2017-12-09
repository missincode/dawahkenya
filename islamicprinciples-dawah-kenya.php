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
  
  <h3>Islamic Banking Principles</h3>
<p>The Shari’ah prohibits the payment of charges for the renting of money (riba, which in the definition of Islamic scholars covers any excess in financial dealings, usury or interest) for specific terms, as well as investing in businesses that provide goods or services considered contrary to its principles (Haram, forbidden). While these principles were used as the basis for a flourishing economy in earlier times, it is only in the late 20th century that a number of Islamic banks were formed to apply these principles to private or semi-private commercial institutions within the Muslim community.

<p><q>"While a basic tenant of Islamic banking - the outlawing of riba, a term that encompasses not only the concept of usury, but also that of interest - has seldom been recognised as applicable beyond the Islamic world, many of its guiding principles have. The majority of these principles are based on simple morality and common sense, which form the bases of many religions, including Islam. </q></p>

<p><q>"The universal nature of these principles is immediately apparent even at a cursory glance of non-Muslim literature. Usury was prohibited in both the Old and New Testaments of the Bible, while Shakespeare and many other writers, particularly those writing in the 19th century, have attacked the barbarity of the practice. Much of the morality championed by Victorian writers such as Dickens - ranging from the equitable distribution of wealth through to man's fundamental right to work - is clearly present in modern Islamic society.</q></p>

<p><q>"Although the western media frequently suggest that Islamic banking in its present form is a recent phenomenon, in fact, the basic practices and principles date back to the early part of the seventh century."</q></p> <p>(Islamic Finance: A Euromoney Publication, 1997)</p>
 
<p>Theoretical Basis for Islamic Banking</p>
 
<p>A popular belief persists that Islamic banking is simply an interest-free financial structure. But, in fact, Islamic economics is a complete system of social and economic justice. It deals with property rights, the incentive system, the allocation of resources, economic freedom and decision-making and the proper role of government. 

<p>Western bankers have said that savings and investments would soon dry up if interest were not paid. But this is due to identifying "rate of interest" and "rate of return". The Qur'an says: "God has permitted trade, but forbidden riba (interest)” (2:275). Therefore it is only the fixed, or predetermined, return on savings or transactions that is forbidden, not an uncertain rate of return, such as the making of profit. 
<p>Modern Justifications for Interest

<p>Modern economists have developed many arguments to justify interest.
<p>One argument is that interest is the reward for saving; a compensation that the creditor pays the debtor for the latter's temporary loss of the use of capital. 
<p>Another is that interest is the payment for the loss in value of money due to inflation. The goods the saver wants will cost more in the future, so he is justified in charging a rent for the use of his loan.
John Maynard Keynes (1883-1946) argued that money is the most liquid of assets, that is to say, it is the asset most readily exchangeable for other forms of assets and that interest is the price paid for loss of liquidity. 
The theory that interest protects savings from inflation neither explains why the rate of interest is, nevertheless, always above the rate of inflation, nor does it question the proposition that inflation is the cause of interest. Nor do these theories answer the question as to why interest should be the market regulator for the supply and demand of money. Why should interest be paid for one's postponement of enjoyment of present goods, or paid for abstaining from diminishing one's present capital, which would otherwise be diminished by the ravages of time and consumption?
 
<p>Basis of Islamic Banking
<p>In order to be Islamic, the banking system has to avoid interest. Consequently, much of the literature on the theory of Islamic banking has grown out of a concern as to how the monetary and banking system would function if interest were abolished by law. 
Another Islamic principle is that there should be no reward without risk-bearing. This principle is applicable to both labour and capital. As no payment is allowed to labour unless it is applied to work, so no reward for capital should be allowed unless it is exposed to business risks.
Consider two persons, one of whom has capital but no special skills in business, while the other has managerial skills but possesses no capital. They can co-operate in either of two ways:
1.	Debt-financing (the western loan system). The businessman borrows the capital from the capital-owner and invests it in his trade. The capital-owner is to get back his principal and an additional amount on the basis of a fixed rate, called the interest rate, as his compensation for parting with liquidity for a fixed period. The claim of the lender for repayment of the principal plus the payment of the interest becomes viable only after the expiry of this period. This payment is due irrespective of whether the businessman has made a profit using the borrowed money. In the event of a loss, the borrower has to repay the principal amount of the loan, as well as the accrued interest, from his own resources, while the capital-owner loses nothing. Islam views this as an unjust transaction.
2.	Mudarabah (the Islamic way, or PLS). The two persons co-operate with each other on the basis of partnership, where the capital-owner provides the capital and the other party puts his management skills into the business. The capital-owner is not involved in the actual day-to-day operation of the business, but is free to stipulate certain conditions that he may deem necessary to ensure the best use of his funds. After the expiry of the period, which may be the termination of the contract or such time that returns are obtained from the business, the capital-owner gets back his principal amount together with a pre-agreed share of the profit.
The ratio in which the total profits of the enterprise are distributed between the capital-owner and the manager of the enterprise is determined and mutually agreed at the time of entering the contract, before the beginning of the project. In the event of loss, the capital-owner bears all the loss and the principal is reduced by the amount of the loss. It is the risk of loss that entitles the capital-owner to a share in the profits. The manager bears no financial loss, because he has lost his time and his work has been wasted. This is, in essence, the principle of mudarabah.
There are at least three reasons for considering the mudarabah relationship to be more just than the creditor-debtor relationship:

(i)  Both parties agree on the ratio in which profits will be shared between them.

(ii) The treatment of both parties is uniform in the event of loss, since if the provider of the capital suffers a reduction of his principal, the manager is deprived of a reward for his labour, time and effort.

(iii) Both parties are treated equally if there is any violation of the agreement. If the manager violates anyone of the stipulated conditions, or if he does not work, or is instrumental in causing loss to the business by negligence or bad management, he will have to bear the responsibility for the safe return of the whole amount in question. If, on the other hand, the provider of the capital violates any of the stipulated conditions, for example, by withdrawing his funds before the stipulated time, or by not providing part or full funds at the promised time, etc., he will have to pay the manager a reward equivalent to what he would have earned in similar work. 
Mudarabah is the basis of modern Islamic banking on a two-tier basis. 
1st tier: The depositors put their money into the bank's investment account and agree to share profits with it. In this case, the depositors are the providers of the capital and the bank functions as the manager of funds.

2nd tier: Entrepreneurs seek finance from the bank for their businesses on the condition that profits accruing from their business will be shared between them and the bank in a mutually agreed proportion, but that any loss will be borne by the bank only. In this case, the bank functions as the provider of capital and the entrepreneur functions as the manager. 
Islam argues that there is no justifiable reason why a person should enjoy an increase in wealth from the use of his money by another, unless he is prepared to expose his wealth to the risk of loss also. Islam views true profit as a return for entrepreneurial effort and objects to money being placed on a pedestal above labour, the other factor in production. As long as the owner of money is willing to become a shareholder in the enterprise and expose his money to the risk of loss, he is entitled to receive a just proportion of the profits and not merely a merely nominal share based on the prevailing interest rate.
Thus, under an Islamic banking system, the cost of capital is not analogous to a zero interest rate, as some people wrongly assume it to be. The only difference between Islamic banking and interest-based banking in this respect is that the cost of capital in interest-based banking is a predetermined fixed rate, while in Islamic banking; it is expressed as a ratio of profit. 
The records of banks that have been involved in PLS show that they have usually provided higher returns to their depositors than those who have used such transitory instruments as cost-plus and leasing. PLS is thus the real goal of Islamic banking.
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

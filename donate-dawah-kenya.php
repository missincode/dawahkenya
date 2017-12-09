<!DOCTYPE html>
<html>
<title>Dawah Development Group</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="lib/w3.css">
<link href="https://fonts.googleapis.com/css?family=Nunito|Nunito+Sans" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="css/mystyle.css" />

  <link rel="shortcut icon" href="img/demopage/favicon.ico">
  <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Karla:400,700">
  <link rel="stylesheet" href="css/screen.css" media="screen"/>
  <link rel="stylesheet" href="css/lightbox.css" media="screen"/>
  <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>

<style>
body {font-family: "Nunito", sans-serif}
.mySlides {display: none}




tr, td {
    padding: 5px;
}

tr:nth-child(even) {
    background-color: #FCD00B;}

tr:nth-child(odd) {
   background-color:#FCD00B;


</style>
<body>



<!-- Navbar -->
<div class="w3-top">
<ul class="w3-navbar w3-card-2 w3-left-align" style="background-color: #FCD00B;">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <!--<li><img src="menu_icon.png"></li>-->
  <li><a href="#" class="w3-hover-none w3-hover-text-grey w3-padding-large"><img src="" style=""></a></li>
 <li class="w3-hide-small"><a href="whoweare-dawah-kenya.php" class="w3-padding-large" style="padding-top: 25px">Who we are</a></li>
  <li class="w3-hide-small"><a href="whatwedo-dawah-kenya.php" class="w3-padding-large">What we do</a></li>
  <li class="w3-hide-small"><a href="downloads-dawah-kenya.php" class=" w3-padding-large">Downloads</a></li>
  <li class="w3-hide-small"><a href="articles-dawah-kenya.php" class=" w3-padding-large">Articles</a></li>
  <li class="w3-hide-small"><a href="donate-dawah-kenya.php" class=" w3-padding-large">Donate</a></li>
  <!--<li class="w3-hide-small w3-dropdown-hover">
    <a href="javascript:void(0)" class="w3-hover-none w3-padding-large" title="More">MORE <i class="fa fa-caret-down"></i></a>     
    <div class="w3-dropdown-content w3-white w3-card-4">
      <a href="#">Merchandise</a>
      <a href="#">Extras</a>
      <a href="#">Media</a>
    </div>
  </li>-->
  <li class="w3-hide-small w3-right"><a href="javascript:void(0)" class="w3-padding-large w3-hover-red"><i class="fa fa-search"></i></a></li>
</ul>
</div>

<!-- Navbar on small screens -->
<div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <ul class="w3-navbar w3-left-align w3-black">
  <li>
      <a href="#home" class="w3-wide"><img src="menu_icon.png"></a>
    </li>
    <li><a class="w3-padding-large" href="whoweare-dawah-kenya.php">Who we are</a></li>
    <li><a class="w3-padding-large" href="whatwedo-dawah-kenya.php">What we do</a></li>
    <li><a class="w3-padding-large" href="downloads-dawah-kenya.php">Downloads</a></li>
    <li><a class="w3-padding-large" href="articles-dawah-kenya.php">Articles</a></li>
    <li><a class="w3-padding-large" href="donate-dawah-kenya.php">Donate</a></li>
  </ul>
</div>

<!-- Page content -->
<div class="w3-content w3-padding-top"></div>


  <!-- About Section -->
  <!-- Navbar Who we are -->
<div id="navDemo" class="">
  <ul class="w3-navbar w3-center">
  <li>
      <a href="#home" class="w3-wide"></a>
    </li>
    <li><a class="w3-padding-large" href="#">Who we are</a></li>
    <li><a class="w3-padding-large" href="#">Organizational Structure</a></li>
    <li><a class="w3-padding-large" href="#">Quality Statement</a></li>
    <li><a class="w3-padding-large" href="#">Objectives</a></li>
  </ul>
</div>

<div class="w3-row">
  <div class="w3-col m6 w3-padding-large">
  <h3>Donate</h3><hr/>
<div class="w3-left-align">
  <h2>Support Da'wah Development Group</h2>
  <p>Dawah Development Group, First Community Bank:</p>
  <ul>
  <li>Kenya Shiilings A/c#-4000077401</li>
   <li>US Dollars A/c#-4000077402</li>
   <p>Swift Code: FCBKENA</p>
     </ul>
<p>Please confirm your bank transfers with info@dawahkenya.org</p>
</div>
</div>

<script src="js/scriptwhoweare.js"></script>
<style>
.aaliyah {
  display:none;}
</style>

    <div class="w3-col m6 w3-padding-large">
     <img src="_images/whoweare/1.jpg" id="mainImage" alt="Orphanes" width="350" height="315" class="articleImage"/>
      
        </div>
        
  
  <script src="js/jquery-1.10.2.min.js"></script>
  <script src="js/lightbox-2.6.min.js"></script>
      
    </div>
  </div>
  

 

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity w3-white w3-xlarge">
  <a href="#" class="w3-hover-text-black"><i class="fa fa-facebook-official"></i></a>
  <a href="#" class="w3-hover-text-black"><i class="fa fa-twitter"></i></a>
</footer>

<script>
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>

</body>
</html>


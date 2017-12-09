<?php include "process.php"; ?>
<!DOCTYPE html>
<html >
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
   background-color:#FCD00B;}
   
       
#demo p {
  text-align: center;
  font-size: 300px;
  
}

.day {
background-color: #FCD00B;}
</head>



</style>
<body>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>



<!-- Navbar -->
<div class="w3-top">
<ul class="w3-navbar w3-card-2 w3-left-align" style="background-color: #FCD00B;">
  <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
    <a class="w3-padding-large" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
  </li>
  <li><a href="index.php" class="w3-hover-none w3-hide-small"><img src="menu_icon.png" style=""></a></li>
  <li class="w3-hide-small"><a href="whoweare-dawah-kenya.php" class="w3-padding-24 w3-hover-green" style="padding-top: 25px"><b>Who we are</b></a></li>
  <li class="w3-hide-small"><a href="whatwedo-dawah-kenya.php" class="w3-padding-24 w3-hover-green"><b>What we do</b></a></li>
  <li class="w3-hide-small"><a href="downloads-dawah-kenya.php" class=" w3-padding-24 w3-hover-green"><b>Downloads</b></a></li>
  <li class="w3-hide-small"><a href="articles-dawah-kenya.php" class=" w3-padding-24 w3-hover-green"><b>Articles</b></a></li>
  <li class="w3-hide-small"><a href="donate-dawah-kenya.php" class=" w3-padding-24 w3-hover-green"><b>Donate</b></a></li>
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
  <ul class="w3-navbar w3-left-align style="background-color: #FCD00B;"">
  <li>
      <a href="#home" class="w3-wide"><img src="menu_icon.png"></a>
    </li>
    <li><a class="w3-padding-large w3-hover-green" href="whoweare-dawah-kenya.php">Who we are</a></li>
    <li><a class="w3-padding-large w3-hover-green" href="whatwedo-dawah-kenya.php">What we do</a></li>
    <li><a class="w3-padding-large w3-hover-green" href="downloads-dawah-kenya.php">Downloads</a></li>
    <li><a class="w3-padding-large w3-hover-green" href="articles-dawah-kenya.php">Articles</a></li>
    <li><a class="w3-padding-large w3-hover-green" href="donate-dawah-kenya.php">Donate</a></li>
  </ul>
</div>

<!-- Page content -->
<div class="w3-content"></div>
<div class="w3-row" style="text-align: right; font-size:20px; padding-top: 80px;">

<script type="text/javascript">
  function gmod(n,m){
  return ((n%m)+m)%m;
}

function kuwaiticalendar(adjust){
  var today = new Date();
  if(adjust) {
    adjustmili = 1000*60*60*24*adjust; 
    todaymili = today.getTime()+adjustmili;
    today = new Date(todaymili);
  }
  day = today.getDate();
  month = today.getMonth();
  year = today.getFullYear();
  m = month+1;
  y = year;
  if(m<3) {
    y -= 1;
    m += 12;
  }

  a = Math.floor(y/100.);
  b = 2-a+Math.floor(a/4.);
  if(y<1583) b = 0;
  if(y==1582) {
    if(m>10)  b = -10;
    if(m==10) {
      b = 0;
      if(day>4) b = -10;
    }
  }

  jd = Math.floor(365.25*(y+4716))+Math.floor(30.6001*(m+1))+day+b-1524;

  b = 0;
  if(jd>2299160){
    a = Math.floor((jd-1867216.25)/36524.25);
    b = 1+a-Math.floor(a/4.);
  }
  bb = jd+b+1524;
  cc = Math.floor((bb-122.1)/365.25);
  dd = Math.floor(365.25*cc);
  ee = Math.floor((bb-dd)/30.6001);
  day =(bb-dd)-Math.floor(30.6001*ee);
  month = ee-1;
  if(ee>13) {
    cc += 1;
    month = ee-13;
  }
  year = cc-4716;

  if(adjust) {
    wd = gmod(jd+1-adjust,7)+1;
  } else {
    wd = gmod(jd+1,7)+1;
  }

  iyear = 10631./30.;
  epochastro = 1948084;
  epochcivil = 1948085;

  shift1 = 8.01/60.;
  
  z = jd-epochastro;
  cyc = Math.floor(z/10631.);
  z = z-10631*cyc;
  j = Math.floor((z-shift1)/iyear);
  iy = 30*cyc+j;
  z = z-Math.floor(j*iyear+shift1);
  im = Math.floor((z+28.5001)/29.5);
  if(im==13) im = 12;
  id = z-Math.floor(29.5001*im-29);

  var myRes = new Array(8);

  myRes[0] = day; //calculated day (CE)
  myRes[1] = month-1; //calculated month (CE)
  myRes[2] = year; //calculated year (CE)
  myRes[3] = jd-1; //julian day number
  myRes[4] = wd-1; //weekday number
  myRes[5] = id; //islamic date
  myRes[6] = im-1; //islamic month
  myRes[7] = iy; //islamic year

  return myRes;
}
function writeIslamicDate(adjustment) {
  var wdNames = new Array("Ahad","Ithnin","Thulatha","Arbaa","Khams","Jumuah","Sabt");
  var iMonthNames = new Array("Muharram","Safar","Rabi'ul Awwal","Rabi'ul Akhir",
  "Jumadal Ula","Jumadal Akhira","Rajab","Sha'ban",
  "Ramadan","Shawwal","Dhul Qa'ada","Dhul Hijja");
  var iDate = kuwaiticalendar(adjustment);
  var outputIslamicDate = wdNames[iDate[4]] + ", " 
  + iDate[5] + " " + iMonthNames[iDate[6]] + " " + iDate[7] + " AH";
  return outputIslamicDate;
}
document.write(writeIslamicDate());
</script>
</div>
  
  <div class="w3-rest">
  
  
  <div class="w3-content w3-display-container">

<div class=" mySlides w3-animate-fading">
  <img src="live/5.jpg" style="width:100%">
  <div class="w3-display-bottomleft w3-large w3-container w3-padding-16 w3-black">
    Refferral Hospital, Holo. Currently Underconstruction
  </div>
</div>

<div class="w3-display-container mySlides w3-animate-fading">
  <img src="live/6.jpg" style="width:100%">
  <div class="w3-display-bottomright w3-large w3-container w3-padding-16 w3-black">
    Completed Mosque
  </div>
</div>

<div class="w3-display-container mySlides w3-animate-fading">
  <img src="live/7.jpg" style="width:100%">
  <div class="w3-display-topleft w3-large w3-container w3-padding-16 w3-black">
    Beautiful Mountains
  </div>
</div>

<div class="w3-display-container mySlides w3-animate-fading">
  <img src="live/8.jpg" style="width:100%">
  <div class="w3-display-topright w3-large w3-container w3-padding-16 w3-black">
    The Rain Forest
  </div>
</div>

<div class="w3-display-container mySlides w3-animate-fading">
  <img src="live/9.jpg" style="width:100%">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">
    Mountains!
  </div>
</div>
</div>
  
  
  
  
  
  
<!--  
    
    <div class="w3-display-container mySlides w3-animate-fading">
   <img src="live/5.jpg" style="width:100%">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">Refferal Hospital, Holo</div>
  </div>
  
   <div class="w3-display-container mySlides w3-animate-fading">
  <img src="live/6.jpg" style="width:100%">
  <div class="w3-display-middle w3-large w3-container w3-padding-16 w3-black">Refferal Hospital, Holo</div>
</div>
      
     
      <img class="mySlides w3-animate-fading" src="live/6.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/7.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/9.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/11.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/12.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/13.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/15.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/16.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/17.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/18.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/19.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/21.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/22.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/23.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/24.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/25.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/28.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/29.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/32.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/34.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/36.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/37.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/38.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/39.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/40.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/41.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/1.jpg" style="width:100%">
      <img class="mySlides w3-animate-fading" src="live/4.jpg" style="width:100%">
    </div>
  </div> -->
</div>


  <!-- Page content -->
  <div class="w3-content">
</div>
<div class="w3-row day">
<div class="w3-col w3-container w3-green w3-center" style="width:190px"><h1>Reminder of the day</h1></div>

<div class="mySlides2 w3-container">
    <p>It was narrated from Salman bin 'Amir that the Prophet (May Allah's peace and blessings be upon him) said
    <h3>
<b>"Giving charity to a poor person is charity, and (giving) to a relative is two things, charity and upholding the ties of kinship".</b></h3><p>
Grade	: Sahih (Darussalam)	
Reference	 : Sunan an-Nasa'i 2582
In-book reference	 : Book 23, Hadith 0
English translation	 : Vol. 3, Book 23, Hadith 2583</p>
    
  </div>



<div class="mySlides2 w3-container">
    <p>
    <img class="w3-center" src="_images/reminder/1.png">
    <p><b>(Qur'an Surah Al-Hadid, 7)</b>.</p>
  </div>





<div class="mySlides2 w3-container">
       <p><b>Abu Hurairah (May Allah be pleased with him) reported:</b><p>
<b>The Messenger of Allah (May Allah's peace and blessings be upon him)said,</b><p> 
<h3><i><q>On every joint of man, there is charity, on everyday when the sun rises: doing justice between two men is charity, and assisting a man to ride an animal or to load his luggage on it is charity; and a good word is charity, every step which one takes towards (the mosque for) Salat is charity, and removing harmful things from the way is charity</q></i></h3>.

<p><b>[Al-Bukhari and Muslim]</b>.</p>
    
    
  </div>
  
<div class="mySlides2 w3-container">
    <p><h3><i><q>O ye who believe! cancel not your charity by reminders of your generosity or by injury,- like those who spend their substance to be seen of men, but believe neither in Allah nor in the Last Day.They are in parable like a hard, barren rock, on which is a little soil: on it falls heavy rain, which leaves it (Just) a bare stone.They will be able to do nothing with aught they have earned.And Allah guideth not those who reject faith. </q></i></h3>
    <p><b>(Qur'an Surah Al-Baqara, 264)</b>.</p>
  </div>
  


</div>

  <hr>


  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large">
    <h1 class="w3-center">Virtues of Fasting the first 10 Days of Dhull Hijja</h1><br>
        
        
        <h2 class="w3-center"><u>Count Down of First 10 Days of Dhul Hijja</u></h2>
       

<div class="w3-row w3-center">
<h1 id="demo"></h1>
    <br/>

    <script>
// Set the date we're counting down to
var countDownDate = new Date("September 1, 2017 18:45:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
    
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "EXPIRED";
    }
}, 1000);
</script> 
</div>

        <img src="_images/Dhul%20Hijja1.PNG" class="w3-round w3-image" alt="">
        <img src="_images/Dhul%20Hijja2.PNG" class="w3-round w3-image" alt="">

     
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">Announcement</h1><br>
      <h5 class="w3-center">Applications now open for:</h5><ol>
<li>Orphan Sponsorship</li>
<li>Education Aid</li>
<li>Construction Projects</li>
<li>Aid & Empowerment Projects (for the poor, needy, imaams, youth...etc)</li>
</ol>

<p>Kindly find the forms <a href="downloads-dawah-kenya.php" style="color:#ff0000;"><u>here...</u></a>
<p>After filling in your downloaded form, kindly attach all necessary documents and email to:

<p><a href="mailto:info@dawahkenya.org" target="_top">info@dawahkenya.org</a> or <a href="mailto:dawahdevelopment@gmail.com" target="_top">dawahdevelopment@gmail.com</a></p></p>
      
    </div>
  </div>
  
 

  

  <!-- The Contact Section -->
  <div class="w3-row">
  
  <div class="w3-row">
    
    <h3 class="w3-center">Generosity and Kindness | Sheikh Abu Usamah | Journey Of Faith Kenya 2017 </h3>
    
    <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/-WFHXfXTVZg?list=PLs35T1hktnEMqoQpFLnVMrmX9U1h1bjtC?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>

    <!--  <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fdawahkenya%2Fposts%2F1286593871362157&width=500" width="500" height="503" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe> -->
    <!-- </div>
    <div class="w3-col s6 w3-center">
    
    <h3 class="w3-center">Live Stream Makkah, Masjid Al Haram</h3>
    <div style="position:relative;height:0;padding-bottom:75.0%"><iframe src="https://www.youtube.com/embed/uHIBeXt2CJs?ecver=2" width="480" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
    
     <blockquote class="twitter-tweet" data-lang="en"><p lang="en" dir="ltr">Daily Hadith | Continuity in Good Deeds<br>[Sahih Al-Bukhari, Book of Prayer at Night (Tahajjud), Hadith: 1132]<a href="https://twitter.com/hashtag/Darussalam?src=hash">#Darussalam</a> <a href="https://twitter.com/hashtag/Hadith?src=hash">#Hadith</a> <a href="https://t.co/FrOxtQaS1K">pic.twitter.com/FrOxtQaS1K</a></p>&mdash; Darussalam Publisher (@DarussalamSNS) <a href="https://twitter.com/DarussalamSNS/status/801772717854904320">November 24, 2016</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script> 
    </div> -->
    
    
    </div>
  
<!-- End Page Content -->
</div>
<hr>
<div class="w3-container" id="contact">
  <h3 class="w3-center">Social Media</h3>
  
  <div class="w3-row">
  <div class="w3-col w3-green w3-container" style="width:30%"><blockquote class="twitter-tweet" data-lang="en"><p lang="und" dir="ltr">&quot;So as long as your are in the aid of others... God will always be in your aid.&quot;<br>- Muhammad ﷺ <a href="https://t.co/jSgKSSBLoR">pic.twitter.com/jSgKSSBLoR</a></p>&mdash; ﷽ (@IslamicThinking) <a href="https://twitter.com/IslamicThinking/status/780851545487380485">September 27, 2016</a></blockquote>
<script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script></div>


  <div class="w3-col w3-container" style="width:40%">
  
  
  
  <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fdarussalam.sns%2Fposts%2F1007874576012324%3A0&width=500" width="500" height="717" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe></div>
  
  
  <div class="w3-col w3-green w3-container" style="width:30%"><blockquote class="instagram-media" data-instgrm-captioned data-instgrm-version="7" style=" background:#FFF; border:0; border-radius:3px; box-shadow:0 0 1px 0 rgba(0,0,0,0.5),0 1px 10px 0 rgba(0,0,0,0.15); margin: 1px; max-width:658px; padding:0; width:99.375%; width:-webkit-calc(100% - 2px); width:calc(100% - 2px);"><div style="padding:8px;"> <div style=" background:#F8F8F8; line-height:0; margin-top:40px; padding:50.0% 0; text-align:center; width:100%;"> <div style=" background:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACwAAAAsCAMAAAApWqozAAAABGdBTUEAALGPC/xhBQAAAAFzUkdCAK7OHOkAAAAMUExURczMzPf399fX1+bm5mzY9AMAAADiSURBVDjLvZXbEsMgCES5/P8/t9FuRVCRmU73JWlzosgSIIZURCjo/ad+EQJJB4Hv8BFt+IDpQoCx1wjOSBFhh2XssxEIYn3ulI/6MNReE07UIWJEv8UEOWDS88LY97kqyTliJKKtuYBbruAyVh5wOHiXmpi5we58Ek028czwyuQdLKPG1Bkb4NnM+VeAnfHqn1k4+GPT6uGQcvu2h2OVuIf/gWUFyy8OWEpdyZSa3aVCqpVoVvzZZ2VTnn2wU8qzVjDDetO90GSy9mVLqtgYSy231MxrY6I2gGqjrTY0L8fxCxfCBbhWrsYYAAAAAElFTkSuQmCC); display:block; height:44px; margin:0 auto -44px; position:relative; top:-22px; width:44px;"></div></div> <p style=" margin:8px 0 0 0; padding:0 4px;"> <a href="https://www.instagram.com/p/BIzMxMsAGWL/" style=" color:#000; font-family:Arial,sans-serif; font-size:14px; font-style:normal; font-weight:normal; line-height:17px; text-decoration:none; word-wrap:break-word;" target="_blank">Strive in the path of Allah - as much as you can. Be sincere in your intention and Allah will make it easy for you to follow your deen, in shaa Allah! #Allah #Love #Muslim #Muslimah #BilalPhilips #IOU #islam #Ummah #Deen #Sunnah #Quran #dua #Prayer</a></p> <p style=" color:#c9c8cd; font-family:Arial,sans-serif; font-size:14px; line-height:17px; margin-bottom:0; margin-top:8px; overflow:hidden; padding:8px 0 7px; text-align:center; text-overflow:ellipsis; white-space:nowrap;">A photo posted by لا اله الا الله (@bilalphilips) on <time style=" font-family:Arial,sans-serif; font-size:14px; line-height:17px;" datetime="2016-08-07T08:00:14+00:00">Aug 7, 2016 at 1:00am PDT</time></p></div></blockquote>
<script async defer src="//platform.instagram.com/en_US/embeds.js"></script></div>
  
</div>

<hr>

  <h3 class="w3-center">Contact</h3>
  <div class="w3-row-padding" style="margin-top:64px">
    <div class="w3-half">
      <p><i class="fa fa-map-marker fa-fw w3-xxlarge w3-margin-right"></i> Kisumu, Kenya</p>
      <p><i class="fa fa-phone fa-fw w3-xxlarge w3-margin-right"></i> Phone: +254 772 176 300 </p>
      <p><i class="fa fa-envelope fa-fw w3-xxlarge w3-margin-right"> </i> Email: dawahdevelopment@gmail.org or info@dawahkenya.org</p>
      <br>
      


<script src="js/myscript.js"></script>


    </div>
   <!-- <div class="w3-half">
      <!-- Add Google Maps -->
       
    <div id="map" style="width:100%;height:500px"></div>


    
      </div>
    </div>
  </div>
</div>



    <div id="map"></div>
    <script>
      function initMap() {
        var uluru = {lat:  -0.073528, lng:  34.690831};
        var map = new google.maps.Map(document.getElementById('map'), {
          zoom: 18,
          center: uluru
        });
        var marker = new google.maps.Marker({
          position: uluru,
          map: map
        });
      }
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAyfBygEJJorzFYWI9E3588KAm_WXruFvw&callback=initMap">
    </script> 
</div> -->


<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-white w3-xlarge">
<div><a href="http://daralber.ae/" target="_blank"><img src="_images/dar al ber logo.png"></a></div>
  <a href="http://www.facebook.com/dawahkenya" target="_blank" class="w3-hover-text-black"><i class="fa fa-facebook-official"></i></a>
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
    setTimeout(carousel, 9000);    
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

<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides2");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 86400000); // Change image every 2 seconds
}
</script>

</body>
</html>


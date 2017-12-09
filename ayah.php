<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.mySlides {display:none;}
</style>
<body>







    
    <div class="w3-row">
  <div class="w3-col w3-container w3-blue w3-center" style="width:190px"><h1>Reminder of the day</h1></div>

<div class="mySlides w3-container">
       <p><b>Abu Hurairah (May Allah be pleased with him) reported:</b><p>
<b>The Messenger of Allah (ﷺ) said,</b><p> 
<h2><i><q>On every joint of man, there is charity, on everyday when the sun rises: doing justice between two men is charity, and assisting a man to ride an animal or to load his luggage on it is charity; and a good word is charity, every step which one takes towards (the mosque for) Salat is charity, and removing harmful things from the way is charity</q></i></h2>.

<p><b>[Al-Bukhari and Muslim]</b>.</p>
    
    
  </div>
  
<div class="mySlides w3-container">
    <p><h5><i><q>O ye who believe! cancel not your charity by reminders of your generosity or by injury,- like those who spend their substance to be seen of men, but believe neither in Allah nor in the Last Day.They are in parable like a hard, barren rock, on which is a little soil: on it falls heavy rain, which leaves it (Just) a bare stone.They will be able to do nothing with aught they have earned.And Allah guideth not those who reject faith. </q></i></h5>
    <p><b>(Qur'an Surah Al-Baqara, 264)</b>.</p>
  </div>
  

  </div>

    


    
 


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
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>

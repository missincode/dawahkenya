<!DOCTYPE html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="lib/w3.css">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
</head>
<style>
.mySlides {display:none;}
</style>
<body>





<div class="mySlides">
<div class="w3-row">
  <div class="w3-col s3 w3-green w3-center">
    <h4><b>Ayah of the day</b></h4>
  </div>
  <div class="w3-col s9 w3-dark-grey w3-center">
    <div class="w3-container w3-red"><q><b>So whoever does an atom`s weight of good will see it,</q>Quran Chapter 99 Verse 7</b></q></div>
<div class="w3-container w3-yellow"><q><b>So whoever does an atom`s weight of good will see it,</q>Quran Chapter 99 Verse 7</b></q></div>
<div class="w3-container w3-blue"><q><b>So whoever does an atom`s weight of good will see it,</q>Quran Chapter 99 Verse 7</b></q></div>
  </div>
</div>

<div class="w3-row">
  <div class="w3-col s3 w3-green w3-center">
    <h4><b>Hadith of the day</b></h4>
  </div>
  <div class="w3-col s9 w3-dark-grey w3-center">
    <div class="w3-container w3-red"><q><b>So whoever does an atom`s weight of good will see it,</q>Quran Chapter 99 Verse 7</b></q></div>
<div class="w3-container w3-yellow"><q><b>So whoever does an atom`s weight of good will see it,</q>Quran Chapter 99 Verse 7</b></q></div>
<div class="w3-container w3-blue"><q><b>So whoever does an atom`s weight of good will see it,</q>Quran Chapter 99 Verse 7</b></q></div>
  </div>
</div>

<div class="w3-row">
  <div class="w3-col s3 w3-green w3-center">
    <h4><b>Wise Saying of the day</b></h4>
  </div>
  <div class="w3-col s9 w3-dark-grey w3-center">
    <div class="w3-container w3-red"><q><b>So whoever does an atom`s weight of good will see it,</q>Quran Chapter 99 Verse 7</b></q></div>
<div class="w3-container w3-yellow"><q><b>So whoever does an atom`s weight of good will see it,</q>Quran Chapter 99 Verse 7</b></q></div>
<div class="w3-container w3-blue"><q><b>So whoever does an atom`s weight of good will see it,</q>Quran Chapter 99 Verse 7</b></q></div>
  </div>
</div>
</div>


<script>
var slideIndex = 1;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
      x[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > x.length) {slideIndex = 1} 
    x[slideIndex-1].style.display = "block"; 
    setTimeout(carousel, 2000); 
}
</script>
</body>
</html>

<!DOCTYPE html>
<html>
<head>
<title>Steve's Website</title>
<meta charset="UTF-8">
<link href="style.css" rel="stylesheet" type="text/css">  
</head>
<body>
<?php
include 'header.php';
?>

<script>
	function createLightbox() {
          document.getElementById("largeImg").style.display = "block";
          document.getElementById("largeImg").style.position= "absolute";
          document.getElementById("largeImg").style.left= "0";
          document.getElementById("largeImg").style.top= "20px";
          document.getElementById("largeImg").style.className= "ease";
	}

     function removeLightbox() {
          document.getElementById("largeImg").style.display= "none";
     }

</script>
<img src="js-thumb.jpg" id="thumb">
<img src="js-large.jpg" id="largeImg">
<script>

//getElementById has to be after the document renders the element
        document.getElementById("thumb").onmouseover = function() {
                createLightbox()
        };

        document.getElementById("largeImg").onmouseout = function() {
                removeLightbox()
        };
</script>

<section id="showcase">
<div class="container">
<h4>Hover over the small image to expand it</h4>
</div>
</section>

<div class="container">
<section id="main">
                <div class="box-1">

<h1>My favorite activities</h1>
<p>I have been playing tennis for a long time. I am a USTA 3.5 player; not really good but above average.
With age, my game is deteriorating. I play more for being social than to compete. On the days I don't
play tennis, I go to the fitness center. That way I manage to get a good workout for more than 2 hours
seven days a week. Not much I can say about my skills but because of regular exercise, I have not seen
a doctor for decades. I am very thankful for that.
</div>
</section>
</div>
<?php
include 'footer.php';
?>

</body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<style>
body {
    font-family: Verdana, sans-serif;
    margin: 0;
    background: -webkit-linear-gradient(left,white,pink,white,pink,white);
    
}

/* Slideshow container */
.slideshow-container {
  position: relative;
  background: -webkit-linear-gradient(left,white,pink,white,pink,white);

}

/* Slides */
.mySlides {
  display: none;
  padding: 80px;
  text-align: center;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  margin-top: -30px;
  padding: 16px;
  color: black;
  font-weight: bold;
  font-size: 20px;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

.next {
  position: absolute;
  right: 0;
  border-radius: 3px 0 0 3px;
}

.prev:hover, .next:hover {
  background-color: black;
  color: white;
}

.dot-container {
    text-align: center;
    padding: 20px;
    
}

.dot {
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}


</style>

<body>

<div class="slideshow-container">

<form method=post>
<div class="mySlides">
    <label>Enter string for md5 : </label>
    <input type="text" class="Wid" name="md5str" placeholder="Enter String">
    <input type="submit" name="but" value="Convert To MD5">
</div>
<div class="mySlides">
<label>Enter string for Number Format : </label>
    <input type="number" class="num1" name="num1" placeholder="Enter number">
    <input type="number" name="num2" placeholder="Format value ">
    <input type="submit" name="but" value="Format The Number">
</div>

<div class="mySlides">
<label>Enter string for Ord : </label>
    <input type="text" class="Wid" maxlength="1" name="ord_frmt" placeholder="Enter Character">
    <input type="submit" class="But" name="but" value="Convert To ASCII">

</div>


<div class="mySlides">
    <label>Enter string for Rtrim : </label>
    <input type="text" class="nofrmt" name="str" placeholder="Enter String">
    <input type="text" name="Rt_str" placeholder="Enter String to Trim">
    <input type="submit" class="But" name="but" value="Trim the String">
</div>

<div class="mySlides">
<label>Enter string for Replace : </label>
    <input type="text" name="str" placeholder="Enter String">
    <input type="text" class="strSty" name="str_rep1" placeholder="To Replace">
    <input type="text" name="str_rep2" placeholder="To Replace with">
    <input type="submit" class="But" name="but" value="Replace String">
</div>

<div class="mySlides">
<label>Enter string for length : </label>
    <input type="text" class="Wid" name="str_len" placeholder="Enter String">
    <input type="submit" class="But" name="but" value="Calculate Length">

</div>

<div class="mySlides">
<label>Enter string for Case Compare : </label>
    <input type="text" class="nofrmt" name="casecmp" placeholder="Enter String 1">
    <input type="text" name="casecmp1" placeholder="Enter String 2">
    <input type="submit" class="But" name="but" value="Compare">
</div>

<div class="mySlides">
    <label>Enter string to find the position of first occurence of substring inside a string : </label>
    <input type="text" class="nofrmt" name="str_pos" placeholder="Enter String 1">
    <input type="text" name="str_pos1" placeholder="Enter String 2">
    <input type="submit" class="But" name="but" value="Find Position">
</div>

<div class="mySlides">
    <label>Enter string to get SubString : </label>
    <input type="text" name="substr" placeholder="Enter String">
    <input type="number" name="strnum" placeholder="Start">
    <input type="submit" class="But" name="but" value="SubString">
</div>

<div class="mySlides">
    <label>Enter string for String to Lower : </label>
    <input type="text" class="Wid" name="strtolower" placeholder="Enter String">
    <input type="submit" name="but" value="Convert To Lower">
</div>

<div class="mySlides">
    <label>Enter string for Bin To Hex : </label>
    <input type="text" class="Wid" name="bintohex" placeholder="Enter String">
    <input type="submit" class="But" name="but" value="Convert To Hex">
</div>

<div class="mySlides">
    <label>Enter string for Chop : </label>
    <input type="text" class="nofrmt" name="chop" placeholder="Enter String">
    <input type="text" name="chop1" placeholder="String to Chop">
    <input type="submit" class="But" name="but" value="Chop the String">
</div>

</form>


<a class="prev" onclick="plusSlides(-1)">❮</a>
<a class="next" onclick="plusSlides(1)">❯</a>

</div>


<div class="dot-container">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
  <span class="dot" onclick="currentSlide(8)"></span> 
  <span class="dot" onclick="currentSlide(9)"></span> 
  <span class="dot" onclick="currentSlide(10)"></span> 
  <span class="dot" onclick="currentSlide(11)"></span> 
  <span class="dot" onclick="currentSlide(12)"></span>
</div>


<?php
    
    $ans="";
    if($_SERVER["REQUEST_METHOD"] == "POST"){
         if($_POST['but']=="Convert To MD5"){
          $string = $_POST['md5str'];
          $ans = "MD5 hash of the String :-  ".md5($string);
        }
        
        if($_POST['but']=="Convert To ASCII"){
            $string = $_POST['ord_frmt'];
            $ans = "ASCII Value :-  ".ord($string);
        }
        
        if($_POST['but']=="Calculate Length"){
            $string = $_POST['str_len'];
            $ans = "String length is :-  ".strlen($string);
        }
        
        if($_POST['but']=="Convert to Hex"){
            $string = $_POST['bintohex'];
            $ans = "Bin to Hex Value :-  ".bin2hex($string);
        }

        
        if($_POST['but']=="Replace String"){
            $str1 = $_POST['str'];
            $str2 = $_POST['str_rep1'];
            $str3 = $_POST['str_rep2'];
            $ans = "Replace String :-  ".str_replace($str2,$str1,$str3);
        }

        if($_POST['but']=="Chop the String"){
            $string = $_POST['chop'];
            $str = $_POST['chop1'];
            $ans = "After Chop :-  ".chop($string,$str);
        }

        if($_POST['but']=="Convert To Lower"){
            $string = $_POST['strtolower'];
            $ans = "String to Lower :-".strtolower($string);
        }

        if($_POST['but']=="SubString"){
            $string = $_POST['substr'];
            $num = $_POST['strnum'];
            $ans = "Substring of String :- ".substr($string,$num);
        }

        if($_POST['but']=="Find Position"){
            $substr = $_POST['str_pos'];
            $string = $_POST['str_pos1'];
            $ans = "Position :- ".strpos($substr,$string);
        }

        if($_POST['but']=="Compare"){
            $str = $_POST['casecmp'];
            $string = $_POST['casecmp1'];
            $ans = "Comparison :- ".strcasecmp($str,$string);
        }

        if($_POST['but']=="Trim the String"){
            $str = $_POST['str'];
            $string = $_POST['Rt_str'];
            $ans = "After Right Trim:- ".rtrim($str,"world");
        }

        if($_POST['but']=="Format the Number"){
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $ans = "Number Format:- ".number_format($num1,$num2);
        }
    }
    
?>

<h1 style="text-align: center;"><?php echo $ans; ?></h1>



<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
</html>

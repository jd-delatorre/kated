<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
/* Short and sweet */
define('WP_USE_THEMES', false);
require('blog/wp-blog-header.php');
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Kate Dwek Photos</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery.min.js"></script>

<script type="text/javascript" src="js/fadeslideshow.js">



</script>

<script type="text/javascript">

var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow1", //ID of blank DIV on page to house Slideshow
	dimensions: [300,250], //width/height of gallery in pixels. Should reflect dimensions of largest image //was 300,250
	imagearray: [
		["images/weddinglogo.png", "", "", "Nothing beats relaxing next to the pool when the weather is hot."],
		["images/p2.png", "", "_new", "Some day I'd like to explore these caves!"],
		["images/p1.png"],
		["images/p2.png", "", "", "What a beautiful scene with everything changing colors."] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})


var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow2", //ID of blank DIV on page to house Slideshow
	dimensions: [300,250], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/w1.png", "", "", "Nothing beats relaxing next to the pool when the weather is hot."],
		["images/w2.png", "", "_new", "Some day I'd like to explore these caves!"],
		["images/w1.png"],
		["images/w2.png", "", "", "What a beautiful scene with everything changing colors."] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})
var mygallery=new fadeSlideShow({
	wrapperid: "fadeshow3", //ID of blank DIV on page to house Slideshow
	dimensions: [300,250], //width/height of gallery in pixels. Should reflect dimensions of largest image
	imagearray: [
		["images/headshotlogo.png", "", "", "Nothing beats relaxing next to the pool when the weather is hot."],
		["images/b2.png", "", "_new", "Some day I'd like to explore these caves!"],
		["images/b1.png"],
		["images/b2.png", "", "", "What a beautiful scene with everything changing colors."] //<--no trailing comma after very last image element!
	],
	displaymode: {type:'auto', pause:2500, cycles:0, wraparound:false},
	persist: false, //remember last viewed slide and recall within same session?
	fadeduration: 500, //transition duration (milliseconds)
	descreveal: "ondemand",
	togglerid: ""
})

</script>

<body>
	<div id="wrap">
    	<div id="header">
    	  <p><a href="#" title="Logo"><img src="images/logo.jpg" alt="Logo" /></a></p>
    	  <p>&nbsp;</p>
    	  <p>&nbsp;</p>
    	  <p>&nbsp;</p>
    	  <p>&nbsp;</p>
    	  <p>&nbsp;</p>
    	</div>
   	  <div id="bodyContent">
      	  <div class="indexImages">
        	 <div class="outerimg"><div id="fadeshow1"></div></div>
              <div class="outerimg"><div id="fadeshow2"></div></div>
              <div class="outerimg"> <div id="fadeshow3"></div></div>
              <div class="mainImgaesText">
       	  		<a href="wedding.html">Weddings</a> 
            </div>
            <div class="mainImgaesSpecer"></div>
            <div class="mainImgaesText">
       	  		<a href="blog.html">Blog</a> 
            </div>
            <div class="mainImgaesSpecer"></div>
            <div class="mainImgaesText">
       	  		<a href="portraits.html">Headshots and Print Work</a> 
            </div>
          </div>  
      </div>
        <div id="footerContainer">
		<div class="footerlinks"><a href="contact.html">Contact Us</a></div><div class="footerlinks"><a href="packages.html">Photo Packages</a> </div><div class="footerlinks"><a href="tips.html">Photo Session Tips</a> </div>
		<br />
		<br />
		<hr />&copy;Copyright 2012 Kate Dwek Photos .All Right Reserved</div>
    </div>
</body>
</html>

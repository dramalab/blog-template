<html>
<head>
<title>Dramaläb - unibz.it</title>
<script type="text/javascript" src="http://code.jquery.com/jquery-2.0.1.min.js"></script>

<style>

.loading{
	
    width:800px;
    height:118px;
    background-image: url(<?php echo get_template_directory_uri(); ?>/images/dramalab-logo.png);
    display: block;
    overflow: hidden;  
    background-repeat: no-repeat;  
    
}

.loading div{
    margin: auto 0px;
    text-align:center;
    vertical-align:middle;
}

.loading .text
{
	width: 370px;
	position: relative;
	top:  310px;
	left: 295px;
	color: white;
}

a{
	text-decoration: none;
	color: white;
	border-bottom: 1px solid rgba(255,255,255,0.3);
	
}
a:hover{
	text-decoration: none;
	color: white;
	border-bottom: 1px solid rgba(255,255,255,1);
	
}
</style>



<script>
$(document).ready(function() {

	
	var windowH = $(window).height();
	var windowW = $(window).width();
	
	$(".loading").css("position","fixed");
	$(".loading").css("left",(windowW - $(".loading").outerWidth())/2 + $(document).scrollLeft());
	$(".loading").css("top",(windowH - $(".loading").outerHeight())/2 + $(document).scrollTop());
	
	
	
});

$(window).resize(function() {
	var windowH = $(window).height();
	var windowW = $(window).width();
	
	$(".loading").css("position","fixed");
	$(".loading").css("left",(windowW - $(".loading").outerWidth())/2 + $(document).scrollLeft());
	$(".loading").css("top",(windowH - $(".loading").outerHeight())/2 + $(document).scrollTop());
	
  
});



</script>


</head>
	<body>
	
	<div class="loading">
	 
	</div>
	
	</body>

</html>	
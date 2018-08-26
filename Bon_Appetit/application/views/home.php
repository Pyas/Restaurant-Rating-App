<!DOCTYPE html>
<html>
<head>
    <title>Bon Appetit</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<link rel="stylesheet" href="<?php echo base_url();?>themes/2/js-image-slider.css">
    
    <script src="<?php echo base_url();?>themes/2/js-image-slider.js" type="text/javascript"></script>
	
    <link href="<?php echo base_url();?>css/generic.css" rel="stylesheet" type="text/css" />
	
	<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap.css">
	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/layout.css" media="screen" charset=UTF-8>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/menu.css" media="screen" charset=UTF-8">
		<link rel="stylesheet" href="<?php echo base_url();?>css/bootstrap-responsive.css">
	
	

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/home.css" media="screen" charset=UTF-8>
	
	<script src="<?php echo base_url();?>js/jquery.js"></script>
	<script src="<?php echo base_url();?>js/bootstrap.js"></script>
	
	<script type="text/javascript" src="http://images.code-head.com/jquery/jquery.js"> </script>
 
   <script type="text/javascript">
		$(document).ready(function() {
			var current = -1;
			var elems = new Array();
			var elems_i = 0;
			$('.items').each(function() {
				elems[elems_i++] = $(this);
			});
			var num_elems = elems_i - 1;
			var animate_out = function() {
				elems[current].animate({ top: '-300px' }, 'fast', 'linear', animate_in);
			}
			var animate_out_delay = function() {
				setTimeout(animate_out, 1200); /****************************** Change 1000 to make it longer/shorter/whatever */
			}
			var animate_in = function() {
				current = current < num_elems ? current + 1 : 0;
				elems[current].css('top', '200px').animate({ top: '0px' }, 'fast', 'linear', animate_out_delay);
			}
			animate_in();
		});
	</script>
 
   <style type="text/css">
		.ticker {
			
			position: relative; /* So we can absolute the .items */
			
			height: 293px;
			overflow: hidden;
			margin:10px;
			border:2px solid black;
			border-radius: 15px 15px 15px 15px ;
			color:white;
			background-color: #EFF2FB;
			
			
			
		}
		.items {
			position: absolute;
			top: 500px;
			margin: 10px;
		}
		
		h3
{
font-size:21px;
color:#909090;
margin-top:-40px;
margin-left:0px;
margin-right:0px;
margin-bottom:0px;
}
h5
{
font-size:21px;
color:#909090;
margin-top:20px;
margin-left:0px;
margin-right:0px;
margin-bottom:0px;
}
h4
{
font-size:28px;
color:#3088AA;
margin-top:-10px;
margin-left:0px;
margin-right:0px;
margin-bottom:5px;
}
.style1
{
font-size:14px;
margin-bottom:0px;
margin-top:0px;
color:black;
}
#weldown_div
{

width:80%;
margin-left:auto;
margin-right:auto;
background-color:white;
}
#weldown1_div
{
width:45%;

background-color:white;
float:left;
}
#weldown2_div
{
margin-left:10%;
width:45%;

background-color:white;
float:left;
}
#weldown11_div
{
margin-top:30px;
margin-left:0.5%;

width:33.5%;
background-color:white;
float:left;	
}
#weldown12_div
{
margin-top:26px;

width:56%;
background-color:white;
float:left;	
}
h2
{
font-size:16px;
margin-top:0px;
margin-bottom:6px;
color:#909090;
}
a:link
{ 
font:14px;
color:blue;
text-decoration:none;
}
a:hover
{
color:green; 

text-decoration:none;
}

	</style>
</head>
<body>
   
  
 
<div id="maincontainer">

	<div id="top_part">
		<div id="top_part_2">
			<div id="for_menu">			
				<div id="container">
					<?php include('includes/menubar.php'); ?>
				</div>
			</div>
		</div>
	</div>

	<div id="name_bar" style="margin-bottom:30px;">
		<div id="name_bar_text1" >
			<p class="name1" style="color:white; "> Bon Appetit </p>
		</div>
	</div>

    
    <div id="sliderFrame">
        <div id="slider">
           
            <img src="<?php echo base_url();?>images/i1.jpg" alt="Buffet is always the best" />         
            <img src="<?php echo base_url();?>images/i2.jpg" alt="Coffee is for refreshment" />
            <img src="<?php echo base_url();?>images/i3.jpg" alt="Dessert is neccesary after lunch/dinner" />

        </div>       
			<div id="thumbs">
				<div class="ticker">
				
				
	           <div class="items"><p style="font-family:arial;text-align:center;color:#20B2AA;font-size:24px;"><b> Latest 
	           </b></p><p style="font-family:arial;text-align:center;color:#20B2AA;font-size:24px;"><b> Compliments </b></p>
		        </div>
						<div class="items"><p style="font-family:arial; text-align:center; color:blue;font-size:14px;">yam yam... hidrabad biriyani... at lasania kabana</p>
						</div>
						<div class="items"><p style="font-family:arial; text-align:center; color:blue;font-size:14px;">wow... pizza of vuter bari</p>
						</div>	
					
				
					</div>
			</div>       
        <div style="clear:both;height:0;"></div>
    </div>

	
 </div>  
	
</body>
</html>

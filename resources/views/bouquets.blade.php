<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Products - Floral Template</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="css/orman.css" type="text/css" media="screen" />
<link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "templatemo_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}

</script>


</head>

<body>

<div id="templatemo_wrapper_sp">
<div id="templatemo_header_wsp">
	<div id="templatemo_header" class="header_subpage">
    	<div id="site_title"><a href="#">Floral Shop</a></div>
        <div id="templatemo_menu" class="ddsmoothmenu">
            <ul>
            <li><a href="/" class="selected">Home</a></li>
                <li><a href="/about">About</a></li>
                <li><a href="/products">Products</a></li>
                <li><a href="/checkout">Checkout</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/faqs">FAQs</a></li>
            </ul>
            <div id="templatemo_search">
                <form action="#" method="get">
                  	<input type="text" value="Site Search" name="keyword" id="keyword" title="keyword" 
                  			onfocus="clearText(this)" onblur="clearText(this)" class="txt_field" />
                  	<input type="submit" name="Search" value="" alt="Search" id="searchbutton" title="Search" class="sub_btn" />
                </form>
            </div>
            <br style="clear: left" />
        </div> <!-- end of templatemo_menu -->
        
    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->
<div id="templatemo_main_wrapper">
<div id="templatemo_main">
	<div id="sidebar" class="left">
    	<div class="sidebar_box"><span class="bottom"></span>
            <h3>Categories</h3>   
            <div class="content"> 
            <ul class="sidebar_list">
                    <li><a href="/gifts">Նվերներ</a></li>
                    <li><a href="/boxes">Տուփերի պատրաստում</a></li>
                    <li><a href="/bouquets">Ծաղկեփնջեր</a></li>
                    <li><a href="/flowersinboxes">Տուփերով ծաղիկներ</a></li>
                </ul>
            </div>
        </div>
        <div class="sidebar_box"><span class="bottom"></span>
            <h3>Weekly Special</h3>   
            <div class="content special"> 
                <img src="images/templatemo_image_01.jpg" alt="Flowers" />
                <a href="#">Citrus Burst Bouquet</a>
                <p>
                	Price:
                    <span class="price normal_price">$160</span>&nbsp;&nbsp;
                    <span class="price special_price">$100</span>
                </p>
            </div>
        </div>
    </div>
    
    <div id="content" class="right">
		<h2>Products</h2>
        <p>Cras aliquam, mi nec imperdiet volutpat, ligula est consequat odio, eu auctor urna augue eu quam. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis bibendum nec nunc ac hendrerit. Morbi lacinia placerat diam sit amet fringilla. Integer accumsan suscipit suscipit. Mauris non nunc sit amet turpis pharetra mattis. Validate <a href="http://validator.w3.org/check?uri=referer" rel="nofollow"><strong>XHTML</strong></a> &amp; <a href="http://jigsaw.w3.org/css-validator/check/referer" rel="nofollow"><strong>CSS</strong></a>.</p>
        @foreach($products as $product)
               <div class="product_box">
                   <a href="productdetail.html"><img  src="data:image/png;base64,{{ chunk_split(base64_encode($product->data)) }}" height="165" width="165"> </a>
                   <h3>{{ $product->name }}</h3>
                 <p class="product_price">{{ $product->price }}</p>
                   <p class="add_to_cart">
                       <a href="/{{ $product->id }}">Detail</a>
                       <a href="shoppingcart.html">Buy</a>
                   </p>
               </div>   
               @endforeach     	  
        <div class="blank_box">
        	<!-- <a href="#" class="button left">Previous</a> 
            <a href="#" class="button right">Next Page</a> -->
        </div>
        <div class="cleaner h20"></div>
    	<div class="blank_box">
        	<!-- <a href="#"><img src="images/free_shipping.jpg" alt="Free Shipping" /></a> -->
        </div>    
    </div>
    <div class="cleaner"></div>
</div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<div id="templatemo_footer_wrapper">
<div id="templatemo_footer">
	<div class="footer_left">
    	<!-- <a href="#"><img src="images/1311260370_paypal-straight.png" alt="Paypal" /></a>
        <a href="#"><img src="images/1311260374_mastercard-straight.png" alt="Master" /></a>
        <a href="#"><img src="images/1311260374_visa-straight.png" alt="Visa" /></a> -->
    </div>
	<div class="footer_right">
		<p><a href="/">Home</a> | <a href="/products">Products</a> | <a href="/about">About</a> | <a href="/faqs">FAQs</a> | <a href="/checkout">Checkout</a> | <a href="/contact">Contact</a></p>
        <p>Yerevan 2019 <a href="/">Sakura</a></p>
	</div>
    <div class="cleaner"></div>
</div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
</div>

</body>
</html>
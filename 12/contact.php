<?php

if(isset($_POST["sent"])){

    $to = "info@1880bar.am";
    $subject = $_POST["subject"];
    $from = "info@1880bar.am";
    $msg = $mssg."  ".$m;
    $headers = "From: $from";
    $mssg = $_POST["messige"];
    $m = $_POST["massige"];

    mail($to,$subject,$msg,$headers);
    echo "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device,shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>1880</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/desktop_contact.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
</head>
<body>
<div class="contact_div" id="contact_div">
 <div class="div_contact_menu">
    <ul class="nav justify-contentspace-between grey lighten-4 py-4 menu">
       <li class="nav-item">
        <a class="nav-link actives" href="index.php">HOME</a>
      </li>
       <li class="nav-item">
        <a class="nav-link actives" href="menu.php">MENU</a>
      </li>
       <li class="nav-item">
        <a class="nav-link actives" href="aboutus.php">ABOUT</a>
      </li>
      <li class="nav-item">
        <a class="nav-link actives" href="contact.php">CONTACTS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link actives" href="reservation.php">BOOK</a>
      </li>
  </ul>
     <ul class="con_menu">
      <li class="nav-item avatar dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <img src="img/lang.svg" class="rounded-circle z-depth-0"
                alt="avatar image" id="item">
            </a>
            <div class="dropdown-menu dropdown-menu-lg-right dropdown-secondary"
              aria-labelledby="navbarDropdownMenuLink-55">
              <a class="dropdown-item  drop_a" href="#">ENGLISH</a>
              <a class="dropdown-item  drop_a" href="#">ARMENIAN</a>
              <a class="dropdown-item " href="#">RUSSIAN</a>
            </div>
          </li>
    </ul>
    </div>
    <div class="map_div">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="700" id="gmap_canvas" src="https://maps.google.com/maps?q=armenia%20yerevan%201880bar&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>Google Maps Generator by <a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{position:relative;text-align:right;height:700px;width:100%;}.gmap_canvas {overflow:hidden;background:none!important;height:700px;width:100%;}</style></div>
    </div>
    <div class="contact_div_feedback">
        
        <div class="beedback">
           <p>LEAVE  FEEDBACK</p>
        <form action="" method="post">
            <div class="md-form md-outline">
              <input name="email" type="text" id="form1" class="form-control inp_1">
              <label for="form1">Email</label>
            </div>
             <div class="md-form md-outline">
              <input name="subject" id="input-char-counter1" type="text" length="10" class="form-control inp_1">
              <label for="input-char-counter1">Subject</label>
            </div>
            <div class="md-form md-outline">
               <textarea id="form75" name="massige" class="form-control md-textarea inp_1" length="120" rows="6"></textarea>
              <label for="textarea-char-counter">Type here</label>
            </div>
            <div class="btn_cont">
                <button name="sent" type="button" class="btn btn-light btn_contact">SEND</button>
          </div>
          
         </form>
         
        </div>
    </div>
    <div class="div6">
	<div class="footer_div">
		<div class="open_div">
			<p class="open_text">OPENING HOURS</p>
			<div class="hour">
				<span><img src="img/hours.png" alt="hour"></span>
				<span class="time">11:00-01:00</span>
			</div>
		</div>
		<div class="contacts_div">
			<p>CONTACTS</p>
			<div class="first">
				<span><img src="img/navigation.png" alt=""></span>
				<span>Moscovyan 28</span>
			</div>
			<div class="second">
				<span>
					<img src="img/phone.png" alt="">
				</span>
				<span>+374  43 180 080</span>
			</div>
		</div>
		<div class="follow_div">
			<p>FOLLOW US</p>
			<div class="fbinsta">
				<span>
				<a href="https://www.facebook.com/1880barandmore/">
					<img src="img/fb.png" alt="">
				</a>
				</span>
				<span>
                 <a href="https://instagram.com/1880barandmore?igshid=1q25lo4b2nnb7">
					<img src="img/insta.png" alt="">
				</a>
				</span>
			</div>
		</div>
	</div>
	<div class="footer_end">
	    <div class="line"></div>
	    <div class="text_footer_end">
	        <p>1880 Bar & More | ALL RIGHTS RESERVED 2018</p>
	    </div>
	</div>
</div>
</div>





<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
   
</body>
</html>
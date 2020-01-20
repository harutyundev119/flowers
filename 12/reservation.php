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
  <link href="css/desktop_reservation.css" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script> 
</head>
<body>
<div class="reservation_div">
    <div class="reservation_menu">
           <ul class="nav justify-contentspace-between grey lighten-4 py-4 menu">
               <li class="nav-item">
                <a class="nav-link active" href="index.php" id="home">HOME</a>
              </li>
               <li class="nav-item">
                <a class="nav-link " href="menu.php" id="menu">MENU</a>
              </li>
               <li class="nav-item">
                <a class="nav-link " href="aboutus.php" id="about">ABOUT</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contact.php" id="contacts">CONTACTS</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="reservation.php" id="book">BOOK</a>
              </li>
         </ul>
         <ul  class="hom_menu">
            <li class="nav-item avatar dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-55" data-toggle="dropdown"
                  aria-haspopup="true" aria-expanded="false">
                    <img src="img/lang.svg" id="item" alt="">
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
    <div class="reserv_inp_div">
         <p>BOOK A TABLE</p>
         <form action="" method="post">
            <div class="md-form md-outline">
              <input name="name" type="text" id="form1" class="form-control inp_1">
              <label for="form1">Name</label>
            </div>
             <div class="md-form md-outline">
              <input mane="phone" type="text" id="form1" class="form-control inp_1">
              <label for="form1">Phone number</label>
            </div>
             <div class="md-form md-outline">
              <input name="book_number" type="text" id="form1" class="form-control inp_1">
              <label for="form1">Number of people</label>
            </div>
             <div class="md-form md-outline">
              <input name="email" type="text" id="form1" class="form-control inp_1">
              <label for="form1">Email</label>
            </div>
<!--reservation data     
              -->
              <input type="text" placeholder="test">
       <div class="datas_group_div">
      <div class="dropdown div_datas" id="div_reserv" >
            <button type="button" id="reserv_btn" id="btn_reserv" class="btn  dropdown-toggle" data-toggle="dropdown">
             <div class="reserv_datatext">
                  <span>Data</span>
             </div>
             <div class="div_reserv_dataicon">
                 <i class="fas fa-angle-down"></i>
                 <img src="img/angel_up.svg" id="reserv_icon" alt="">
              </div>
            </button>
            <div class="dropdown-menu" id="drop">
              <a class="dropdown-item" href="#">12/07</a>
              <a class="dropdown-item" href="#">12/08</a>
            </div>
       </div>
          <div class="div_at">
              <p>at</p>
          </div>
        <div class="dropdown div_datas1">
            <button type="button" class="btn  dropdown-toggle" data-toggle="dropdown">
             <div class="reserv_datatext1">
                  <span>Time</span>
             </div>
             <div class="div_reserv_dataicon1">
                 <i class="fas fa-angle-down"></i>
                 <img src="img/angel_up.svg" id="reserv_icon1" alt="">
              </div>
            </button>
            <div class="dropdown-menu" id="drop1">
              <a class="dropdown-item" href="#">12.00</a>
              <a class="dropdown-item" href="#">12.30</a>
            </div>
       </div>
       </div>
        <div class="chosse_div">
            <p>
               Choose a table (optional)>> 
            </p>
        </div>
          <a href="popup.php">
            <div class="reserv_btn  btn-light" type="button">
              <p>BOOK</p>
            </div>
          </a>
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

<script>
$('.div_datas').on('click',function(){
        $('.div_datas').css({
                'background':"white",       
        });
        $('.reserv_datatext span').css({
               'color':'black',
        });
          $('.div_reserv_dataicon i').css({
               'display':'none',
        });
         $('#reserv_icon').css({
               'display':'block',
        });
    });
      $('.div_datas1').on('click',function(){
        $('.div_datas1').css({
                'background':"white",       
        });
        $('.reserv_datatext1 span').css({
               'color':'black',
        });
          $('.div_reserv_dataicon1 i').css({
               'display':'none',
        });
         $('#reserv_icon1').css({
               'display':'block',
        });
    });
//    dbl click
     $('.div_datas').on('dblclick',function(){
        $('.div_datas').css({
                'background':"transparent",       
        });
        $('.reserv_datatext span').css({
               'color':'white',
        });
          $('.div_reserv_dataicon i').css({
               'display':'block',
        });
         $('#reserv_icon').css({
               'display':'none',
        });
    });    
    
    
</script>


  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>
   
    </body>
</html>
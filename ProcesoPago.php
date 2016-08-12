 <?php
	
	  $price = $_POST['total'];
	  // $$price2 = number_format($price, 2);
	  $price2 = number_format ($price, 2, '.', '');
	  $price3 = $price2*100;
	  
	  // # ARTICULOS
	  $Agrat= $_POST['gra'];
	  $Astnd= $_POST['stn'];
	  $Ainte= $_POST['inte'];
	  $Asup= $_POST['sup'];
	  
	  // $ ARTICULOS
	  $Pgrat = 000;
	  
	  $Pstnd = $_POST['stn2'];
	  $Pstnd2 = number_format ($Pstnd, 2, '.', '');
	  $Pstnd3 = $Pstnd2*100;
	  
	  $Pinte = $_POST['inte2'];
	  $Pinte2 = number_format ($Pinte, 2, '.', '');
	  $Pinte3 = $Pinte2*100;
	  
	  $Psup = $_POST['sup2'];
	  $Psup2 = number_format ($Psup, 2, '.', '');
	  $Psup3 = $Psup2*100;
	  
	  // DATOS PERSONALES	  
	  $name = $_POST['nombre'];
	  $nameCom = $_POST['nombreComp'];
	  $mail = $_POST['correo'];
	  $phone = $_POST['tel'];
	 
	 
	 // NUMERO DE LA TARJETA
	  //$NumCard = $_POST['NumCard'];
	  
	  
	  // DATOS DE ENVIO
	  $street = $_POST['calle'];
	  $street2 = $_POST['colonia'];
	  $city = $_POST['ciudad'];
	  $state = $_POST['estado'];
	  $zip = $_POST['codigo'];
	  $country = $_POST['pais'];
	  $mail2 = $_POST['correo2'];
	  $phone2 = $_POST['tel2'];
	  
	  $bueno = "";
	  $malo = "";
	  
	 
		require_once("conekta-php-master/lib/Conekta.php");
		Conekta::setApiKey("key_TP7n3xvCiPj4fFW89gxrgA");

	try {
		$charge = Conekta_Charge::create(array(
		  'description'=> 'Venta de Licencias',
		  'reference_id'=> $nameCom,
		  'amount'=> $price3,
		  'currency'=>'MXN',
		  'card'=> $_POST['conektaTokenId'],
		  'details'=> array(
		    'name'=> $name,
		    'phone'=> $phone,
		    'email'=> $mail,
		    'customer'=> array(
		      'corporation_name'=> 'Conekta Inc.',
		      'logged_in'=> true,
		      'successful_purchases'=> 14,
		      'created_at'=> 1379784950,
		      'updated_at'=> 1379784950,
		      'offline_payments'=> 4,
		      'score'=> 9
		    ),
		    'line_items'=> array(
		      array(
		        'name'=> 'Licencias gratis',
		        'description'=> 'Licencias para que puedan incluir vehiculos a la platoforma titanium',
		        'unit_price'=> $Pgrat,
		        'quantity'=> $Agrat,
		        'sku'=> null,
		        'type'=> 'Digitales'
		      ),
			  array(
		        'name'=> 'Licencias estandar',
		        'description'=> 'Licencias para que puedan incluir vehiculos a la platoforma titanium',
		        'unit_price'=> $Pstnd3,
		        'quantity'=> $Astnd,
		        'sku'=> null,
		        'type'=> 'Digitales'
		      ),
			   array(
		        'name'=> 'Licencias intermedio',
		        'description'=> 'Licencias para que puedan incluir vehiculos a la platoforma titanium',
		        'unit_price'=> $Pinte3,
		        'quantity'=> $Ainte,
		        'sku'=> null,
		        'type'=> 'Digitales'
		      ),
			   array(
		        'name'=> 'Licencias superior',
		        'description'=> 'Licencias para que puedan incluir vehiculos a la platoforma titanium',
		        'unit_price'=> $Psup3,
		        'quantity'=> $Asup,
		        'sku'=> null,
		        'type'=> 'Digitales'
		      )
		    ),
		    'billing_address'=> array(
		      'street1'=>$street,
		      'street2'=> $street2.',',
		      'street3'=> null,
		      'city'=> $city,
		      'state'=>$state,
		      'zip'=> $zip,
		      'country'=> $country,
		      'phone'=> $phone2,
		      'email'=> $mail2
		    )
		  )
		));
		
		$error ="";
		$correcto ="";
		
	 } catch (Conekta_Error $e) {
           $e->getMessage();
           $e->message_to_purchaser;
		   
        }
    
		 //echo  $charge->status; 
		
		
		
?> 
    
 <!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		
        <title>TITANIUM</title>
		
		<!-- Mobile Specific Meta
		================================================== -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png" />
		
		<!-- CSS
		================================================== -->
       
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- bootstrap.min css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- Animate.css -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Owl Carousel -->
        <link rel="stylesheet" href="css/owl.carousel.css">
		<!-- Grid Component css -->
        <link rel="stylesheet" href="css/component.css">
		<!-- Slit Slider css -->
        <link rel="stylesheet" href="css/slit-slider.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
		<!-- Media Queries -->
        <link rel="stylesheet" href="css/media-queries.css">
         <!-- Banderas Iconos -->
        <link rel="stylesheet" href="css/font-awesome.css">
        <!-- Banderas Iconos -->
        <link href="css/menu.css" rel="stylesheet">

		<!--
		Google Font
		=========================== -->                    
		
		<!-- Oswald / Title Font -->
		<link href='http://fonts.googleapis.com/css?family=Oswald:400,300' rel='stylesheet' type='text/css'>
		<!-- Ubuntu / Body Font -->
		<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300' rel='stylesheet' type='text/css'>
		
		<!-- Modernizer Script for old Browsers -->		
        <script src="js/modernizr-2.6.2.min.js"></script>
        
        


	
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="https://conektaapi.s3.amazonaws.com/v0.5.0/js/conekta.js"></script>
        
		<script type="text/javascript">
		  Conekta.setPublishableKey('key_OsNefLXpsxPCUxWy5bjM65A'); //v3.2
        </script>
    
    </head>
    
        
	
    <body id="body">
    
     <button type="button" class="hamburger is-closed" data-toggle="offcanvas">
                <span class="hamb-top"></span>
          <span class="hamb-middle"></span>
        <span class="hamb-bottom"></span>
            </button>
            
	    <!--
	    Start Preloader
	    ==================================== -->
		<div id="loading-mask">
			<div class="loading-img">
				<img alt="titanium Preloader" src="img/preloader2.gif"  />
			</div>
		</div>
        <!--
        End Preloader
        ==================================== -->
		
        <!--
        Welcome Slider
        ==================================== -->
           <style>
    .idi {
		margin-top:23px;
		z-index: 2000;
		font-size:1.3em;
		position:fixed;
}

  .idi a {
	  padding-left:10px;
	  font-family:calibri;
}

       </style>
       
		<section id="home">	    
		 <div class="col-sm-11 text-right idi">
                               <a href="http://www.titaniumerp.net/login" target="_blank"> <div class="fa fa-user"></div>  Login </a> 
                        </div>  <!--/.col-md-12-->  
    
       
       
         
		</section>
		<!--/#home section-->
		
        <!-- 
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar navbar-inverse">
        <a href="index.html">
        <img class="wow fadeInUp center-block"  src="img/logo-tita.png" alt="titanium">
         </a>      
                
                 <style>
     #wrapper  ul .redes li{
		   padding:0;
		   margin:0;}
		   
	 .bix{
		 background-color:#26292e;
		 width:100%;
		 height:250px;
		 
		 }	  
		 
	.ved{
	    color: orange;
      	 font-size:2em;
	    font-weight:normal;
		}
						 
					.ved2{
						 color:#6CB670;
						 font-size:1.5em;
						 display: inline-block;
						 margin-top:100px;
						 width:80%;}	  
       </style>    
                
                <div id="wrapper">
                
                <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
                <ul class="nav sidebar-nav">
                <ul id="nav" class="nav sidebar-nav">
              
              <br><br><br><br><br>
              
         
               <div class="logo">
              <a href="#body"><img src="img/logoloco.png" alt=""></a>
                </div>
                
                <br><br><br><br>
                
              <li><a href="index.html#body">Inicio</a></li>
                <li><a href="index.html#about">Software</a> </li>
                 <li><a href="index.html#services">Funciones</a></li>
                <li><a href="index.html#showcase">Interfaz</a></li>
                <li> <a href="precios.html">Precios</a> </li>
                <li><a href="">Ser Distribuidor</a></li>
                <li> <a href="index.html#contact-us">Contacto</a> </li>
                <li class="redes"> <a href="https://www.facebook.com/profile.php?id=100011337735171&fref=ts" target="_blank"><img src="img/fac.png" alt=""></a></li>
                <li class="redes"> <a href="https://twitter.com/ProsseaC" target="_blank"><img src="img/fac2.png" alt="" ></a></li>
                <li class="redes"> <a href="https://www.youtube.com/watch?v=W12U6DKL4H0" target="_blank"><img src="img/fac4.png" alt=""></a></li>
                <li class="redes"> <a href="https://www.linkedin.com/in/prossea?authType=name&authToken=Hd2d&csrfToken=ajax%3A8595411590649973897&trk=nav_utilities_invites_name" target="_blank"><img src="img/fac3.png" alt=""></a></li>
                <br> <br>
                
            </ul>
        </nav>	
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<!--
		Start About Section
		==================================== -->
			<section id="pricing" class="bg-one">
			<div class="container">
             <row>
             <div class="col-xs-12 text-center">
					<p class="ved">Estado de la compra</p>      
					</div><!-- /xs-12--> 
				    
                    <div class="bix col-xs-12 text-center">
					      <p class="ved2 text-center"> <?php 
		if (isset($charge)) {
    	$charge->status; 
		echo $bueno = "Compra Exitosa, nos pondremos en contacto lo mas pronto posible";
		} else {
			echo $e->getMessage();
            echo $e->message_to_purchaser;
			}?> </p>
					</div><!-- /xs-12--> 
              </row>  
			</div>   	<!-- End container --> 
				
               
               
              
			<!-- Google Map -->
			<div class="google-map wow fadeInDown" data-wow-duration="500ms">
				<!--<div id="map-canvas"></div>-->
			</div>	
			<!-- /Google Map -->
		
		
		<!-- end Contact Area
		========================================== -->
		
		<footer id="footer" class="bg-one">
			<div class="container">
			    <div class="row wow fadeInUp" data-wow-duration="500ms">
					<div class="col-lg-12">
						
						<!-- Footer Social Links -->
						<div class="social-icon">
							<ul>
								<li><a href="https://www.facebook.com/profile.php?id=100011337735171&fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
								<li><a href="https://twitter.com/ProsseaC" target="_blank" ><i class="fa fa-twitter"></i></a></li>
								<!--<li><a href="#"><i class="fa fa-google-plus"></i></a></li>-->
								<li><a href="https://www.youtube.com/watch?v=W12U6DKL4H0" target="_blank" > <i class="fa fa-youtube"></i></a></li>
								<li><a href="https://www.linkedin.com/in/prossea?authType=name&authToken=Hd2d&invAcpt=337455016_I6123924792321069056_500&csrfToken=ajax%3A0225792071747669318&trk=nav_utilities_invites_photo" target="_blank" ><i class="fa fa-linkedin"></i></a></li>
								<!--<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a></li>-->
							</ul>
						</div>
						<!--/. End Footer Social Links -->

						<!-- copyright -->
						<div class="copyright text-center">
							<a href="index.html">
								<img src="img/logo-tita.png" alt="titanium" /> 
							</a>
							<br />
							
							<p>Creado por <a href="http://www.prossea.com"> PROSSEA</a>. Copyright &copy; 2016. Todos los derechos reservados.</p>
                            <p> <a href="#">Términos y Condiciones</a> | <a href="#"> Política de Privacidad</a></p>
						</div>
						<!-- /copyright -->
						
					</div> <!-- end col lg 12 -->
				</div> <!-- end row -->
			</div> <!-- end container -->
		</footer> <!-- end footer -->
		
		<!-- Back to Top
		============================== -->
		<a href="javascript:;" id="scrollUp">
			<i class="fa fa-angle-up fa-2x"></i>
		</a>
		
		<!-- end Footer Area
		========================================== -->
		
		<!-- 
		Essential Scripts
		=====================================-->
		
		<!-- Main jQuery -->
		<script src="js/jquery-1.12.2.min.js"></script>
        
        <!-- Menu -->
        <script src="js/menuscript.js"></script>
        
		<!-- Bootstrap 3.1 -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Slitslider -->
		<script src="js/jquery.slitslider.js"></script>
		<script src="js/jquery.ba-cond.min.js"></script>
		<!-- Parallax -->
		<script src="js/jquery.parallax-1.1.3.js"></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js"></script>
		<!-- Portfolio Filtering -->
		<script src="js/jquery.mixitup.min.js"></script>
		<!-- Custom Scrollbar -->
		<script src="js/jquery.nicescroll.min.js"></script>
		<!-- Jappear js -->
		<script src="js/jquery.appear.js"></script>
		<!-- Pie Chart -->
		<script src="js/easyPieChart.js"></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing-1.3.pack.js"></script>
		<!-- tweetie.min -->
		<script src="js/tweetie.min.js"></script>
		<!-- Google Map API -->
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Highlight menu item -->
		<script src="js/jquery.nav.js"></script>
		<!-- Sticky Nav -->
		<script src="js/jquery.sticky.js"></script>
		<!-- Number Counter Script -->
		<script src="js/jquery.countTo.js"></script>
		<!-- wow.min Script -->
		<script src="js/wow.min.js"></script>
		<!-- For video responsive -->
		<script src="js/jquery.fitvids.js"></script>
		<!-- Grid js -->
		<script src="js/grid.js"></script>
		<!-- Custom js -->
		<script src="js/custom.js"></script>
        <!--input -->
        <script src="js/prefixfree.min.js"></script>
        
        <script src="js/index.js"></script>
        

    </body>
</html>   
    
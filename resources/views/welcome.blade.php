<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>A&M Producciones | Inicio</title>
<!--css-->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/index.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/swipebox.css" type="text/css" media="all" />
<!--css-->
<!-- Bootstrap Styles -->
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!-- Vendor Styles -->
<link rel="stylesheet" type="text/css" href="assets/vendors/font-awesome/css/fontawesome-all.min.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/slick-carousel/slick.css">
<link rel="stylesheet" type="text/css" href="assets/fonts/themify-icons.css">
<link rel="stylesheet" type="text/css" href="assets/vendors/magnific-popup/magnific-popup.css">
<link rel="stylesheet" type="text/css" href="assets/css/hovereffects.css">
<!-- Theme Styles -->
<link href="assets/css/scrolling-nav.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/styles.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Music Max  Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
<!--js-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<!--js-->
<!--webfonts-->
<link href='//fonts.googleapis.com/css?family=Nova+Round' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--webfonts-->
<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
  <!--Include jQuery & Filterizr-->
	<script src="js/jquery.filterizr.js"></script>
	<script src="js/controls.js"></script>
		<!--Kick off Filterizr-->
			<script type="text/javascript">
				$(function() {
					//Initialize filterizr with default options
				$('.filtr-container').filterizr();
			});
		</script>
<!--gallery-->
<!--startsmothscrolling-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
 <script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1200);
			});
		});
	</script>
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
			jQuery(function($) {
				$(".swipebox").swipebox();
			});
	</script>
<!--swipe box js-->
</head>
<body style="Background-color:#EAEDED">
	<!--header-->
	<div class="header" id="home" >
			<div class="header-top" height="100px !important">
				<div class="container">
					<div class="social-icons">
						<a href="https://www.facebook.com/aymproductora/"><img src="../img/facebook.png" width="35px" height="35px" alt=""></i></a>
						<a href="https://twitter.com/AYMproductora"><img src="../img/logotwitter.png" width="35px" height="35px" alt=""></i></a>
						<a href="https://www.instagram.com/aymproductora/?hl=es"><img src="../img/instagram.png" width="35px" height="35px" alt=""></a>

					</div>
					<div class="detail">
						<ul>
							<li style="margin-top:20px; background:#000; border-radius:8px;"><i class="fas fa-phone-square-alt" aria-hidden="true"></i>+57 3112331843</li>
							<li style="margin-top:20px; background:#000; border-radius:8px;"><i class="far fa-clock" aria-hidden="true"></i> {{date('D d/M/Y - h:i')}}</li>
                            <li>
                                        @auth
                                            <a style="margin:0 0 0 20px" class="btn btn-light" href="{{ url('/eventos') }}">Panel Administrador</a>
                                        @else
                                            <a style="margin:0 0 0 20px" class="btn btn-light" href="{{ route('login') }}" >Ingresar</a>
                                            {{--
                                            @if (Route::has('register'))
                                                <a href="{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Registrarse</a>
                                            @endif
                                            --}}
                                        @endauth
                            </li>
						</ul>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
        <div class="header-bottom" style="margin:0 0 10px 0">
		    <div class="container">
				<div class=" logo ">
                    <img width="80px" height="80px" src="/logoA&M_sin_margen.jpeg" style="float:left" alt="">
					<h1 style="margin:0 0 0 20px"><a href="index.html">A&M Producciones</a></h1>
				</div>
				<div class="top-nav">
					<ul style="line-height: 50px;">
						<li><a href="index.html" class="scroll">Inicio</a></li>
						<li><a href="#about" class="scroll">Nosotros</a></li>
						<li><a href="#services" class="scroll">Servicios</a></li>
						<li><a href="#albums" class="scroll">Aliados</a></li>
						<li><a href="#contact" class="scroll">Contacto</a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--header-->
	<!--banner-->
		<div class="banner-section">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="slider-info">
								<img src="../img/AlbertoLinero-760x400.png" class="img-responsive" alt="">
							</div>
                            <!--
							<div class="container">
								<div class="banner-text">
									<h3>The Rhythm of life</h3>
									<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart from the competition.</p>
								</div>
							</div>
                            -->
						</li>
						<li>
							<div class="slider-info">
								<img src="../img/slider01.jpeg" class="img-responsive" alt="">
							</div>
                            <!--
							<div class="container">
								<div class="banner-text">
									<h3>The Rhythm of life</h3>
									<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart from the competition.</p>
								</div>
							</div>
                            -->
						</li>
						<li>
							<div class="slider-info">
								<img src="../img/slider04.jpg" class="img-responsive" alt="">
							</div>
                            <!--
							<div class="container">
								<div class="banner-text">
									<h3>The Rhythm of life</h3>
									<p>We strive to deliver the very best possible work that’s available out there, at any time. That’s how we set ourselves apart from the competition.</p>
								</div>
							</div>
                            -->
						</li>
					</ul>
				</div>
			</section>
				<!--FlexSlider-->
				<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
						$(function(){
							SyntaxHighlighter.all();
						});
						$(window).load(function(){
						$('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
						});
						});
					</script>
				<!--FlexSlider-->
				<!--slider-->
		</div>
	<!--banner-->
		<!--welcome-->
			<div class="content">
				<div class="welcome-w3ls" id ="about">
					<div class="container">
						<h2 class="tittle">Teatro / Standup / Conferencias</h2>
							<div class="border"></div>
						<span>Somos una empresa dedicada a la producción de eventos presenciales, virtuales e híbridos especialmente enfocados en las áreas de bienestar, capacitación y desarrollo, comedia y teatro. Contamos con un equipo de trabajo con amplia experiencia dedicado a ofrecer servicios de diseño, planificación, organización, marketing y promoción, ventas, atención al cliente y producción técnica.</span>
					</div>
                </div>
            </div>
            <div class="container">
					<div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up"  data-aos-easing="linear" data-aos-delay="300">
                                <a href="#"><img class="card-img-top" src="../img/evento3.png" alt="card image"></a>
                                <div class="card-body py-4">
                                    <strong href="#" class="mb-2 d-block">Teatro</strong>
                                    <h5 class="mb-4 text-primary">Smiley</h5>
                                    <div class="mb-4">
                                        <p>Una leyenda japonesa afirma que cuando dos personas están destinadas a estar juntas, un hilo rojo invisible atado al dedo meñique de la mano los une desde el día que nacen. Ese hilo es irrompible y tiene el poder de atar a dos personas para siempre, por más lejos que estén el uno del otro, y por más diferentes que nos parezcan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="500">
                                <a href="#"><img class="card-img-top" src="../img/evento1.png" alt="card image"></a>
                                <div class="card-body py-4">
                                    <strong class="mb-2 d-block">Teatro</strong>
                                    <h5 class="mb-4 text-primary">El poder de las decisiones</h5>
                                    <div class="mb-4">
                                        <p>
                                            Detente un momento y pregúntate:
                                            1 ¿Qué pasaría si hubieras tomado esa decisión que evitaste por miedo?
                                            2 ¿Y si tu próxima decisión es la que va a transformar tu vida?
                                            3 ¿Ya pensaste en las consecuencias de tus decisiones?</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card mb-md-0 mb-3 border-1 rounded-md overflow-hidden b-hover" data-aos="fade-up" data-aos-easing="linear" data-aos-delay="800">
                                <a href="#"><img class="card-img-top" src="../img/evento2.png" alt="card image"></a>
                                <div class="card-body py-4">
                                    <strong href="#" class="mb-2 d-block">Teatro</strong>
                                    <h5 class="mb-4 text-primary">El aplauso va por dentro</h5>
                                    <div class="mb-4">
                                        <p>
                                            El icónico unipersonal escrito por Mónica Montañés y protagonizado por Mimi Lazo en una versión en vivo para ZOOM. El espectáculo más exitoso de la historia del teatro en Venezuela. Visto por millones alrededor del mundo. Acompaña a Valeria a su primer día de gimnasio el día que cumple 40 años...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


			<!--welcome-->
				<div class="service-w3l" id="services">
					<div class="container">
						<h3 class="tittle"> Nuestros Servicios</h3>
						<div class="border"></div>
						<div class="service-grids">
							<div class="col-md-3 ser-grid">
								<div class="ser-top">
									<div class="con hvr-shutter-in-horizontal">
										<i class="fas fa-user-friends" aria-hidden="true"></i>
									</div>
									<h4>Eventos</h4>
									<p>Produciomos toda clase de eventos para venta abierta al público.</p>
								</div>
							</div>
							<div class="col-md-3 ser-grid">
								<div class="ser-top">
									<div class="con hvr-shutter-in-horizontal">
										<i class="fas fa-building" aria-hidden="true"></i>
									</div>
									<h4>Ventas Corporativas</h4>
									<p>Prestamos servicios especiaes de nuestros clientes corporativos que deseen adquirir tickets o funciones privadas.</p>
								</div>
							</div>
							<div class="col-md-3 ser-grid">
								<div class="ser-top">
									<div class="con hvr-shutter-in-horizontal">
										<i class="fas fa-bullhorn" aria-hidden="true"></i>
									</div>
									<h4>Comercialización</h4>
									<p>Comercializamos eventos o talentos bajo la figura de aliados o socios.</p>
								</div>
							</div>
							<div class="col-md-3 ser-grid">
								<div class="ser-top">
									<div class="con hvr-shutter-in-horizontal">
										<i class="fas fa-users-cog" aria-hidden="true"></i>
									</div>
									<h4>Asistencia Técnica</h4>
									<p>Prestamos los servicios técnicos necesarios para la realización de eventos presenciales, virtuales o híbridos.</p>
								</div>
							</div>
							<div class="clearfix"></div>
						</div>
    </body>
	<!--footer-->
		<footer class="copy-section">
            <div style="text-align: center">
                <a href="#home" class="scroll top"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span></a>
            </div>


        <div class="row align-items-start">
            <div class="col">
                <h6 style="color:white; margin: 0 0 0 20px">Copyright © A&M Productions SAS | Design by<a href="http://w3layouts.com">&nbsp; W3layouts</a></h6>
            </div>
            <div class="col align-self-center" style="color:white; margin: 10px 0 0 0">
                <h6 style="margin: 0 0 0 0">A&M PRODUCTIONS S.A.S</h6>
                <h6 style="margin: 0 0 0 0">NIT: 901223860-3</h6>
                <h6 style="margin:0 0 00 ">BOGOTÁ, COLOMBIA</h6>
            </div>
            <div class="col" style="display:flex; align-items:center; justify-content:center">
                <a href=""><h6>Términos y Condiciones</h6></a>
            </div>
        </div>


        </footer>

	<!--footer-->


            <!-- JS Script Files -->
    <script src="assets/vendors/jquery.min.js"></script>
    <script src="assets/vendors/jquery.migrate.min.js"></script>
    <script src="assets/vendors/popper.min.js"></script>
    <script src="assets/vendors/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/vendors/jquery-easing/jquery.easing.min.js"></script>
    <script src="https://kit.fontawesome.com/4de87f4a32.js" crossorigin="anonymous"></script>

    <!-- Components Vendor  -->
    <script src="assets/vendors/slick-carousel/slick.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.js"></script>
    <script src="assets/vendors/magnific-popup/jquery.magnific-popup.min.js"></script>
    <script src="assets/vendors/counters/waypoint.min.js"></script>
    <script src="assets/vendors/counters/counterup.min.js"></script>

	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="assets/js/scrolling-nav.js"></script>
    <!--Plugin Initialize-->
    <script src="assets/js/global.js"></script>

    <!-- Theme Components and Settings -->
    <script src="assets/vendors/carousel.js"></script>
    <script src="assets/vendors/counters.js"></script>
</html>

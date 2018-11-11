<?php
	session_start();
?>
<!DOCTYPE html>
<html>
  <head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	
	<title>Doina Timișului - Home</title>
	<link rel="Icon" type="image/png" href="img/dt.png" />

    <link href="css/bootstrap.min.css" rel="stylesheet" />
	<link rel="stylesheet" href="css/font-awesome.min.css" />
	<link rel="stylesheet" href="css/animate.css" />
	<link href="css/animate.min.css" rel="stylesheet" /> 
	<link href="css/style.css" rel="stylesheet" />
  </head>

  <body>	
	<header id="header">
        <nav class="navbar navbar-default navbar-static-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                   <div class="navbar-brand">
						<a href="index.html"><img src="img/dt.png" /><h1>The folkloric ensemble "Doina Timișului"</h1></a>
					</div>
                </div>				
                <div class="navbar-collapse collapse">							
					<div class="menu">
						<ul class="nav nav-tabs" role="tablist">
							<li role="presentation"><a href="home_en.php" class="active">Home</a></li>
							<li role="presentation"><a href="repertoriu_en.html">Choreography</a></li>
							<li role="presentation"><a href="galerie_en.html">Gallery</a></li>
							<li role="presentation"><a href="contact_en.html">Contact</a></li>						
						</ul>
					</div>
				</div>		
            </div>
        </nav>	
    </header>
	
	<div class="slider">		
		<div id="about-slider">
			<div id="carousel-slider" class="carousel slide" data-ride="carousel">

				<div class="carousel-inner">
					<div class="item active">						
						<img src="img/slider1.png" class="img-responsive" /> 
				    </div>
				    <div class="item">
						<img src="img/slider2.png" class="img-responsive" /> 
					</div> 
					<div class="item">
						<img src="img/slider3.png" class="img-responsive" /> 
					</div>
				</div>
				
				<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
					<i class="fa fa-angle-left"></i> 
				</a>
				
				<a class=" right carousel-control hidden-xs"href="#carousel-slider" data-slide="next">
					<i class="fa fa-angle-right"></i> 
				</a>
			</div> <!--/#carousel-slider-->
		</div><!--/#about-slider-->
	</div><!--/#slider-->
	<hr>
	<div class="about">
			<div class="container">
				<div class="text-center">
					<h2>About Us</h2>
					<div class="col-md-10 col-md-offset-1">
                        <p><span style="margin-left:5em">In</span> 1959 "Doina Timisului" came into being, an ensemble reuniting 
                            students from almost all the faculties of The University Center of Timisoara, an ensemble which grew to 
                            be known in a short time because it has established a purpose in bringing homage to the varied 
                            traditional culture. The high quality of the performances presented, the authenticity of the songs and 
                            dances, of the traditions and customs brought on stage with great artistry, have made in a short time 
                            a good name of this group in their country as well as abroad.
							<br><br>
                            <span style="margin-left:5em">The</span> choreographic part of the show is harmoniously blending with 
                            the musical one, being built up on the same coordinates as a mosaic representative of all the country's 
                            regions. The musical part of the show is assured by an orchestral band made up of violins, clarinets, 
                            accordion, cello, guitar, saxophone and other instruments meant to restore the specific coloring of the 
                            Romanian traditional music: flute, ocarina, drimba. In the performances put on stage by our ensemble 
                            old songs, no longer heard are spotlighted, different ritual songs, highly melodious, with diverse, 
                            entertaining, often syncopated rhythms as well as songs composed more recently, songs that express the 
                            optimism, the joy of living, that very much characterizes the soul of our people. The orchestra's 
                            repertoire, that of the interpreters' and of the instrumentalists' includes songs from every area of 
                            our country: from the "doina" of Banat to the "briu" of Muntenia, from the Moldavian "hora" to the 
                            Transylvanian "invirtita"- all representing a complex mosaic, representative and picturesque for the 
                            Romanian popular melos.</p>
					</div>
				</div>	
			</div>			
		</div>
	<hr>

	<section class="action">
		<div class="container">
			<div class="left-text hidden-xs">
				<h4>Do you want us at your event?</h4>
				<p><em>The dancers of "Doina Timisului" folkloric ensemble can give you unforgettable moments!</em>
					<br><br>Press the button below and fill out the form!</p>
					<br><br>
				<a href="formular_en.html"><button class="anim-btn"><span>Booking form</span></button></a>
			</div>
			<div class="right-image hidden-xs"></div>
		</div>
	</section>

	<footer>
		<div class="container">
			<div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
				<h4>Quick contact</h4>
				<p>More information can be found at the Student Culture House or on the phone.</p>						
				<div class="contact-info">
					<ul>
						<li><i class="fa fa-home fa"></i> Bulevardul Regele Carol I Nr. 9, Timișoara </li>
						<li><i class="fa fa-phone fa"></i> +4 0256 496 711</li>
					</ul>
				</div>
			</div>
		</div>	
	</footer>
	
	<div class="sub-footer">
		<div class="container">
			<div class="social-icon">
				<div class="col-md-4">
					<ul class="social-network">
						<li><a href="https://www.facebook.com/Ansamblul-folcloric-Doina-Timisului-Official-523289564377770/" target="_blank" class="fa fa-facebook" title="Facebook"></a></li>
						<li><a href="https://www.instagram.com/ansambluldoinatimisului/" target="_blank" class="fa fa-instagram" title="Instagram"></a></li>
					</ul>	
				</div>
			</div>
			
			<div class="col-md-4 col-md-offset-4">
				<div class="copyright">
					&copy; Doina Timișului 2018
				</div>
				<?php
					if(ISSET($_SESSION['user'])) {
				?>
				<a href="admin.php"><button type="button" class="login-button button-right"><img src="img/admin.png" class="login-img"/> Menu</button></a>
				<?php } else { ?>
				<div class="login">
					<button type="button" class="login-button" data-toggle="modal" data-target="#loginModal"><img src="img/login.png" class="login-img"/> Log in</button>
				</div>
				<div class="modal fade" role="dialog" id="loginModal">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">Log in</h3>
							</div>

							<form method="POST" action="login.php">
								<div class="modal-body">
									<div class="form-group">
										<input type="text" name="username" class="form-control" placeholder="Username">
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control" placeholder="Password">
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Log in</button>
								</div>
							</form>
						</div>
					</div>
				</div> <?php } ?>
			</div>						
		</div>				
	</div>

	<a href="#" class="to-top"><i class="fa fa-chevron-up"></i></a>
	
    <script src="js/jquery.js"></script>		
    <script src="js/bootstrap.min.js"></script>	
	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {
		}).init();
	</script>
	<script>            
		jQuery(document).ready(function() {
			var duration = 500;
			jQuery(window).scroll(function() {
				if (jQuery(this).scrollTop() > 200) {
					jQuery('.to-top').fadeIn(duration);
				} else {
					jQuery('.to-top').fadeOut(duration);
				}
			});
			
			jQuery('.to-top').click(function(event) {
				event.preventDefault();
				jQuery('html').animate({scrollTop: 0}, duration);
				return false;
			})
		});
	</script>	
  </body>
</html>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Venta CV - Dark Portfolio	</title>
		<meta charset="UTF-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<meta
			name="description"
			content="venta dark portfolio website for web designer, developer and ui ux designer"
		/>
		<meta
			name="keyword"
			content="venta, dark, portfolio, web, web, designer, developer, ui, ux"
		/>
		<meta name="theme-color" content="#000000" />

		<link
			rel="shortcut icon"
			type="image/x-icon"
			href="images/favicon.ico"
		/>
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<!-- font awesome -->
		<link href="css/all.min.css" rel="stylesheet" />
		<link href="css/fontawesome.min.css" rel="stylesheet" />
		<!-- owl carousel2 -->
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
			integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
			integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
			crossorigin="anonymous"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"
		/>
		<link
			rel="stylesheet"
			type="text/css"
			href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"
		/>
		<style type="text/css">
			body {
				position: relative;
			}
			#preloader {
				height: 100vh;
				width: 100vw;
				display: flex;
				justify-content: center;
				align-items: center;
				background: #000;
				position: fixed;
				top: 0;
				left: 0;
				overflow: hidden;
				z-index: 1000;
			}
			#preloader img {
				user-select: none;
				pointer-events: none;
				position: relative;
			}
			#preloader::after {
				content: '';
				position: absolute;
				top: 0;
				left: 0;
				height: 100%;
				width: 100%;
				background: transparent;
			}
			#preloader .loading {
				position: absolute;
				top: 65%;
				left: 0;
				height: 1px;
				background: #f1f1f6;
				/*animation: bar 1s ease infinite;*/
			}
			#preloader p {
				position: absolute;
				top: 60%;
				left: 5%;
				font-size: 1.4rem;
				color: #fff;
				letter-spacing: 3px;
				font-weight: 300;
				font-family: 'Roboto', sans-serif;
				animation: loading-text 0.08s ease infinite;
			}
			@keyframes loading-text {
				0%, 100% {
					transform: translate(-0.5px);
				}
				14% {
					transform: translate(0.85px);
				}
			}
		</style>
	</head>
	<body>
		<!--[if lte IE 9]>
			<p class="browserupgrade">
				You are using an <strong>outdated</strong> browser. Please
				<a href="https://browsehappy.com/">upgrade your browser</a> to
				improve your experience and security.
			</p>
		<![endif]-->

		<!-- Preloader -->
		<section id="preloader">
			<div class="container">
				<div class="row">
					<img src="images/preloader.png" class="img-fluid" />
					<p>Loading...</p>
					<div class="loading"></div>
				</div>
			</div>
		</section>
		<!-- Preloader End -->

		<div id="scrollbar"></div>
		<header
			class="d-lg-none d-md-flex d-flex justify-content-between align-items-center"
		>
			<p id="logo" data-text="Black">Venta</p>
			<button id="menu_open">
				<!-- <i class="fas fa-times"></i> -->
				<i class="fas fa-bars"></i>
			</button>
			<!-- mobile menu -->
			<div class="mob_menu">
				<div class="nav_back"></div>
				<ul class="list-unstyled">
					<li class="text-right">
						<button id="menu_close" style="background: #111;">
							<i class="fas fa-times"></i>
						</button>
					</li>
					<li>
						<a href="#home">Home</a>
					</li>
					<li>
						<a href="#about">About</a>
					</li>
					<li>
						<a href="#skills">Skills</a>
					</li>
					<li>
						<a href="#projects">Projects</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
				</ul>
			</div>
		</header>

		<div class="container-fluid">
			<div class="row">
				<!-- sidenav start -->
				<div class="col-lg-2 d-none d-md-none d-lg-block col-12">
					<aside>
						<p id="logo" data-text="Black">Venta</p>
						<nav>
							<ul>
								<li>
									<a href="#home">Home</a>
								</li>
								<li>
									<a href="#about">About</a>
								</li>
								<li>
									<a href="#skills">Skills</a>
								</li>
								<li>
									<a href="#projects">Projects</a>
								</li>
								<li>
									<a href="#contact">Contact</a>
								</li>
							</ul>
						</nav>
					</aside>
				</div>
				<!-- ------------------Side nav end--------------- -->
				<!-- ----------------------------------------- -->
				<!-- right main section start -->
				<section
					class="col-lg-10 col-md-12 col-12 p-0 px-0 px-md-4 px-lg-0"
					style="background: #000;"
				>
					<!-- home section -->
					<section id="home">
						<div
							class="home-main-container d-flex flex-column justify-content-md-center
							justify-content-end align-items-end"
						>
							<div class="end-container">
								<img
									src="images/mob-header.jpg"
									class="img-fluid d-lg-none d-md-block d-block"
								/>
								<h3 class="intro">Hi! I'm</h3>
								<h1 class="name">Aleph Naught</h1>
								<h4 class="prof">
									Web Developer, UI/UX Designer
								</h4>
								<p>
									Beautifully handcrafted templates for your
									website. Have your dream site in minutes.
								</p>
								<a href="docs/resume.pdf" target="_blank" rel="noopener"
									><i
										class="fa fa-download"
										aria-hidden="true"
									></i>
									Download CV
								</a>
								<a href="#contact">Hire Me</a>
							</div>
						</div>
					</section>
					<!-- home section end -->
					<!-- About start -->
					<section id="about">
						<div class="container-fluid">
							<h1 id="heading" data-text="About me">
								Resume
							</h1>
							<div class="row pb-5">
								<!-- left div start -->
								<div class="left_div col-md-6 col-12">
									<p>
										Product Designer and Digital Creative
										Director working in design field for 13
										years so far, specialized in UI/UX,
										Branding and digital designs. These are
										the words we live by in everything we
										do. Every story we tell, every brand we
										build, and every interaction we create
										must not only look beautiful.
										beautifully, too.
									</p>
									<!-- follow me social icons -->
									<div class="follow_me d-flex mt-1 mb-5 ">
										<a href="#"
											><i class="fab fa-facebook-f"></i
										></a>
										<a href="#"
											><i class="fab fa-twitter"></i
										></a>
										<a href="#"
											><i class="fab fa-instagram"></i
										></a>
										<a href="#"
											><i class="fab fa-linkedin-in"></i
										></a>
										<a href="#"
											><i class="fab fa-github"></i
										></a>
									</div>
									<!-- follow me social icons end -->
								</div>
								<!-- left div end -->

								<!-- right div start -->
								<div class="col-md-6 col-12">
									<div class="details">
										<div class="float-left">
											<ul class="list-unstyled">
												<li>
													<span class="attr"
														>First Name:
													</span>
													<span class="value"
														>Aleph</span
													>
												</li>
												<li>
													<span class="attr"
														>Last Name:
													</span>
													<span class="value"
														>Naught</span
													>
												</li>
												<li>
													<span class="attr"
														>Age:
													</span>
													<span class="value"
														>22</span
													>
												</li>
												<li>
													<span class="attr"
														>Address:
													</span>
													<span class="value"
														>Bhubaneswar, Odisha,
														India</span
													>
												</li>
												<li>
													<span class="attr"
														>Freelance:
													</span>
													<span class="value"
														>Available</span
													>
												</li>
											</ul>
										</div>
										<div class="float-left">
											<ul class="list-unstyled">
												<li>
													<span class="attr"
														>Email:
													</span>
													<span class="value"
														>bhagabatiprasada@gmail.com</span
													>
												</li>
												<li>
													<span class="attr"
														>Phone:
													</span>
													<span class="value"
														>+91 737-781-2476</span
													>
												</li>
												<li>
													<span class="attr"
														>LinkedIn:
													</span>
													<span class="value"
														>bhagabati_prasad</span
													>
												</li>
												<li>
													<span class="attr">
														GitHub:
													</span>
													<span class="value"
														>bhagabati-prasad</span
													>
												</li>
												<li>
													<span class="attr"
														>Codepen:
													</span>
													<span class="value"
														>Bhagabati Prasad</span
													>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- counter-box row -->
							<div class="row my-md-5 my-4 px-2">
								<div class="col-md-3 col-12">
									<div class="counter_box">
										<h1>24<span>+</span></h1>
										<p>Front-end Designed</p>
									</div>
								</div>
								<div class="col-md-3 col-12">
									<div class="counter_box">
										<h1>20<span>+</span></h1>
										<p>Back-end Developed</p>
									</div>
								</div>
								<div class="col-md-3 col-12">
									<div class="counter_box">
										<h1>12<span>+</span></h1>
										<p>Websites Hosted</p>
									</div>
								</div>
								<div class="col-md-3 col-12">
									<div class="counter_box">
										<h1>74<span>+</span></h1>
										<p>Happy Clients</p>
									</div>
								</div>
							</div>
							<!-- counter-box row end -->
						</div>
					</section>

					<!-- Skills section start -->
					<section id="skills">
						<div class="container-fluid">
							<h1 id="heading" data-text="Programming & Skills">
								Skills
							</h1>
							<!-- my skills carousel icons -->
							<div class="row">
								<div class="owl-carousel owl-theme">
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i class="fab fa-js"></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i class="fab fa-node-js"></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i class="fab fa-react"></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i class="fab fa-git"></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i
													class="fab fa-wordpress-simple"
												></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i
													class="fab fa-digital-ocean"
												></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i class="fab fa-php"></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i class="fab fa-python"></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i class="fab fa-html5"></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i class="fab fa-css3-alt"></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i class="fab fa-sass"></i>
											</div>
										</div>
									</div>
									<div class="item">
										<div class="col-md-12 col-12">
											<div class="skill_box_sm">
												<i class="fab fa-bootstrap"></i>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- carousel end -->

							<!-- language category -->
							<div class="row skill_category">
								<div class="col-md-5 col-12">
									<h4 class="sub_heading">
										Programming Languages and Skills
									</h4>
									<ul>
										<!-- Frameworks -->
										<li>
											<span class="categ"
												><i
													class="fa fa-angle-right"
													aria-hidden="true"
												></i>
												Frameworks</span
											>
											<span class="value"
												>Bootstrap | Express | React
												Native* | Flask</span
											>
										</li>
										<!-- Front end -->
										<li>
											<span class="categ"
												><i
													class="fa fa-angle-right"
													aria-hidden="true"
												></i>
												Front-end</span
											>
											<span class="value"
												>Html5 | CSS3 | JavaSCript -
												jQuery, React</span
											>
										</li>
										<!-- Back-end -->
										<li>
											<span class="categ"
												><i
													class="fa fa-angle-right"
													aria-hidden="true"
												></i>
												Back-end</span
											>
											<span class="value"
												>Php | Node.Js/Express |
												Python/Flask</span
											>
										</li>
										<!-- Database -->
										<li>
											<span class="categ"
												><i
													class="fa fa-angle-right"
													aria-hidden="true"
												></i>
												Databases</span
											>
											<span class="value"
												>SQL | MongoDB</span
											>
										</li>
										<!-- Tools -->
										<li>
											<span class="categ"
												><i
													class="fa fa-angle-right"
													aria-hidden="true"
												></i>
												Tools</span
											>
											<span class="value"
												>Git | Docker</span
											>
										</li>
										<!-- Hosting -->
										<li>
											<span class="categ"
												><i
													class="fa fa-angle-right"
													aria-hidden="true"
												></i>
												Hosting</span
											>
											<span class="value"
												>Digital Ocean | AWS*</span
											>
										</li>
										<li class="text-light">
											<p>
												* Currently learning or limited
												experience
											</p>
										</li>
									</ul>
								</div>
								<!-- Right div -->
								<div class="col-md-7 col-12 services">
									<div class="services_heading">
										<h1>
											I provide
										</h1>
										<h1>
											<span>full stack</span> services
										</h1>
									</div>
									<div class="row mr-md-5 mr-0">
										<div class="col-md-6 col-12">
											<div class="service_box">
												<img
													src="images/design.jpg"
													class="img-fluid"
												/>
												<div class="ico">
													<i
														class="fas fa-laptop-code"
													></i>
												</div>
												<h3>Web Design</h3>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="service_box">
												<img
													src="images/ui-design.jpg"
													class="img-fluid"
												/>
												<div class="ico">
													<i
														class="fas fa-pencil-alt"
													></i>
												</div>
												<h3>UI / UX Design</h3>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="service_box">
												<img
													src="images/back-end.jpg"
													class="img-fluid"
												/>
												<div class="ico">
													<i
														class="fas fa-database"
													></i>
												</div>
												<h3>Web Development</h3>
											</div>
										</div>
										<div class="col-md-6 col-12">
											<div class="service_box">
												<img
													src="images/server.jpg"
													class="img-fluid"
												/>
												<div class="ico">
													<i
														class="fas fa-server"
													></i>
												</div>
												<h3>Cloud & VPS Hosting</h3>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!-- skills section end -->

					<!-- Projects start -->
					<section id="projects">
						<div class="container-fluid">
							<h1 id="heading" data-text="Projects">
								Works
							</h1>
							<div class="row">
								<p
									class="col-md-8 col-12 my-4 mb-5 sub_heading"
								>
									Lorem ipsum dolor sit amet, consectetur
									adipisicing elit. Impedit eius veritatis
									iure at aspernatur voluptas autem illum
									ullam odio asperiores.
								</p>
							</div>

							<div class="row">
								<div class="col-md-4 col-12 py-2">
									<img
										src="images/design.jpg"
										class="img-fluid"
									/>
								</div>
								<div class="col-md-4 col-12 py-2">
									<img
										src="images/ui-design.jpg"
										class="img-fluid"
									/>
								</div>
								<div class="col-md-4 col-12 py-2">
									<img
										src="images/back-end.jpg"
										class="img-fluid"
									/>
								</div>
								<div class="col-md-6 col-12 py-2">
									<img
										src="images/project2.png"
										class="img-fluid"
									/>
								</div>
								<div class="col-md-6 col-12 py-2">
									<img
										src="images/project1.png"
										class="img-fluid"
									/>
								</div>
								<div class="col-md-4 col-12 py-2">
									<img
										src="images/ui-design.jpg"
										class="img-fluid"
									/>
								</div>
								<div class="col-md-4 col-12 py-2">
									<img
										src="images/back-end.jpg"
										class="img-fluid"
									/>
								</div>
								<div class="col-md-4 col-12 py-2">
									<img
										src="images/project2.png"
										class="img-fluid"
									/>
								</div>
							</div>
						</div>
					</section>
					<!-- Projects end -->

					<!-- Our Blog -->
					<section id="blog"></section>
					<!-- Our Blog end -->

					<!-- Contact me -->
					<section id="contact">
						<div class="container-fluid">
							<h1 id="heading" data-text="Get in touch">
								Contact
							</h1>
							<div class="row">
								<div class="map_div col-md-6 col-12">
									<p>
										Lorem ipsum dolor sit amet, consectetur
										adipisicing elit. Culpa repudiandae
										consequuntur officia nulla placeat ab
										quas molestias ipsum.
									</p>
									<iframe
										src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d14973.333773522727!2d85.7886584197754!3d20.245001349999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1594663088486!5m2!1sen!2sin"
										frameborder="0"
										style="border:0;"
										allowfullscreen=""
										aria-hidden="false"
										tabindex="0"
									></iframe>
									<div
										class="w-100 contact_div d-flex flex-md-row flex-column flex-wrap"
									>
										<div class="float-left">
											<h6>React us through</h6>
											<ul class="list-unstyled">
												<li>
													<span
														><i
															class="fas fa-map-marker-alt"
														></i
													></span>
													<span
														>Bhubaneswar,
														<br />Odisha,
														India</span
													>
												</li>
												<li>
													<span
														><i
															class="fas fa-phone"
														></i
													></span>
													<span
														>+91 737 781 2476
														<br />+91 824 919
														4704</span
													>
												</li>
												<li>
													<span
														><i
															class="fas fa-at"
														></i
													></span>
													<span
														>bhagabatiprasada@gmail.com</span
													>
												</li>
											</ul>
										</div>
										<div class="float-left">
											<h6>Social networks</h6>
											<ul class="list-unstyled">
												<li>
													<span
														><i
															class="fab fa-facebook-f"
														></i
													></span>
													<span
														>Bhagabati Prasad</span
													>
												</li>
												<li>
													<span
														><i
															class="fab fa-twitter"
														></i
													></span>
													<span>PrasadBhagabati</span>
												</li>
												<li>
													<span
														><i
															class="fab fa-instagram"
														></i
													></span>
													<span
														>bhagabati_prasad</span
													>
												</li>
												<li>
													<span
														><i
															class="fab fa-linkedin-in"
														></i
													></span>
													<span
														>bhagabati-prasad</span
													>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div class="form_div col-md-6 col-12">
									<p>We'd love to hear from you</p>
									<h3>Send us a message</h3>
									<small class="text-white">* Required fields</small>
									<form method="POST" action="_sendmail.php">
										<div class="input_box">
											<input
												type="text"
												name="name"
												placeholder="* Your Full Name"
												spellcheck="false"
											/>
										</div>
										<div class="input_box">
											<input
												type="email"
												name="email"
												placeholder="* your_email@email.com"
												autocomplete="off"
												spellcheck="false"
											/>
										</div>
										<div class="input_box">
											<input
												type="text"
												name="mobile"
												placeholder="Your Mobile"
												autocomplete="off"
											/>
										</div>
										<div class="input_box">
											<input
												type="text"
												name="subject"
												placeholder="* Subject"
												autocomplete="off"
												spellcheck="false"
											/>
										</div>
										<div class="input_box">
											<textarea
												name="message"
												placeholder="* Message"
												autocomplete="off"
											></textarea>
										</div>
										<div class="input_box">
											<button type="submit" id="form_btn">
												Send Message
											</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</section>
					<!-- Contact me end -->

					<!-- Footer start -->
					<footer>
						<p class="text-white text-center m-0">
							Copyright &copy; <span id="copyright"></span> Venta.
							All Rights Reserved. Designed by Bhagabati Prasad.
						</p>
					</footer>
					<!-- Footer end -->

					<!-- ================  E N D  ==================== -->
				</section>
				<!-- right main section end -->
			</div>
		</div>

		<script src="js/bootstrap.min.js"></script>
		<script src="js/jquery.min.js"></script>
		<script type="text/javascript">
			$(window).on("load", function() {
				$("#preloader .loading").animate({width: "10%"}, "slow").animate({width: "40%"}, "slow").animate({width: "70%"}, "slow").animate({width: "100%"}, "slow").fadeTo("slow", 0.2);
				$("#preloader").fadeTo(800, 1).delay(1700).animate({top: "-100%"}, 1000).delay(50).hide(1200);
			});
		</script>
		<script
			src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
			integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
			crossorigin="anonymous"
		></script>
		<script type="text/javascript" src="js/daisy.js"></script>
		<script src="js/myscript.js"></script>
		<script
			type="text/javascript"
			src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.1/jquery-migrate.min.js"
		></script>
		<script
			type="text/javascript"
			src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"
		></script>
	</body>
</html>

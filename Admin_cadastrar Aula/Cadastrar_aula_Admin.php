<!doctype html>
<html class="no-js" lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Agenda || SmartAtuo</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
	<!-- Fonts -->
	<link href="fonts/lato/lato.css" rel="stylesheet">
	<!-- CSS -->
	<!-- Bootstrap CSS
	============================================ -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Icon Font CSS
	============================================ -->
	<link rel="stylesheet" href="css/icofont.css">
	<!-- Plugins CSS
	============================================ -->
	<link rel="stylesheet" href="css/plugins.css">
	<!-- ShortCodes CSS
	============================================ -->
	<link rel="stylesheet" href="css/shortcode/shortcodes.css">
	<!-- Style CSS
	============================================ -->
	<link rel="stylesheet" href="style.css">
	<!-- Responsive CSS
	============================================ -->
	<link rel="stylesheet" href="css/responsive.css">
    <!-- Color Style -->
    <link href="css/color/color-1.css" rel="stylesheet">
	<!-- Modernizer JS
	============================================ -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>

	<link href='css/core/main.min.css' rel='stylesheet' />
	<link href='css/daygrid/main.min.css' rel='stylesheet' />
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/personalizado.css">

	<script src='js/core/main.min.js'></script>
	<script src='js/interaction/main.min.js'></script>
	<script src='js/daygrid/main.min.js'></script>
	<script src='js/core/locales/pt-br.js'></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
	<script src="js/personalizado.js"></script>

</head>
<body>
<!-- Pre Loader
============================================ -->
<div class="preloader">
	<div class="loading-center">
		<div class="loading-center-absolute">
			<div class="object object_one"></div>
			<div class="object object_two"></div>
			<div class="object object_three"></div>
		</div>
	</div>
</div>
<!-- Body main wrapper start -->
<div class="wrapper fix">
<!-- Header 1
============================================ -->
<div class="header-area header-absolute header-transparent">
	<div class="header-top hidden-xs">
		<div class="container">
			<div class="row">
				<!-- Header Top -->
				<div class="header-top-wrapper fix">
					<div class="header-top-left text-left col-sm-6">
						<p><i class="icofont icofont-envelope"></i><span>info@smartauto.com</span></p>
						<p><i class="icofont icofont-ui-call"></i><span>+55 99999-9993</span></p>
					</div>
					<div class="header-top-right text-right col-sm-6">
						<p><i class="icofont icofont-clock-time"></i><span>Mon - Sat : 8am - 9pm</span></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="header-bottom sticky">
		<div class="container">
			<div class="row">
				<!-- Header Bottom -->
				<div class="col-xs-12">
					<div class="navbar-header">
						<a href="index.html" class="logo navbar-brand"><img id="logo_img" src="img/logo/color-1.png" alt="logo" /></a>
					</div>
					<div class="main-menu mean-menu float-right">
						<nav>
							<ul>
								<li class="active"><a href="index.html">home</a></li>
							<!--	<li><a href="about.html">about</a></li>
								<li><a href="gallery.html">gallery<i class="icofont icofont-simple-down"></i></a></li>-->
								<li><a href="service.html">serviços</a></li>
								<!--
								<li><a href="blog.html">blog<i class="icofont icofont-simple-down"></i></a>
									<ul>
										<li><a href="blog.html">Blog</a></li>
										<li><a href="blog-details.html">Blog Details</a></li>
									</ul>
								</li>
							-->
								<li><a href="contact.html">LOGOUT</a></li>
							</ul>
						</nav>
					</div>
					<div class="mobile-menu"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- Page Banner Area
============================================ -->
<div class="page-banner-area overlay overlay-black overlay-70">
	<div class="container">
		<div class="row">
			<div class="page-banner text-center col-xs-12">
				<h1>AGENDE SUA AULA</h1>
				<ul>
					<li><a href="#">home</a></li>
					<li><span>AGENDA</span></li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- Contatc Area
============================================ -->
<div id="contact-area" class="contact-area bg-gray">
	<div class="container pb-90 pt-90">
		<!-- Section Title -->
		<div class="row">
			<div class="section-title text-center col-xs-12 mb-45">
				<h3 class="heading">Dirija Já</h3>
				<div class="excerpt">
					<p>Use sempre cinto de segurança, e nunca beba bebidas alcóolicas antes de dirigir</p>
				</div>
				<i class="icofont icofont-traffic-light"></i>
			</div>
		</div>
		<?php
		if (isset($_SESSION['msg'])) {
		    echo $_SESSION['msg'];
		    unset($_SESSION['msg']);
		}
		?>
		<div id='calendar'></div>

		<div class="modal fade" id="visualizar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		    <div class="modal-dialog modal-lg" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Detalhes do Aula</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		                <div class="visevent">
		                    <dl class="row">
		                        <dt class="col-sm-3">ID do evento</dt>
		                        <dd class="col-sm-9" id="id"></dd>

		                        <dt class="col-sm-3">Nome Aluno</dt>
		                        <dd class="col-sm-9" id="title"></dd>

		                        <dt class="col-sm-3">Início da aula</dt>
		                        <dd class="col-sm-9" id="start"></dd>

		                        <dt class="col-sm-3">Fim da aula</dt>
		                        <dd class="col-sm-9" id="end"></dd>
		                    </dl>
		                    <button class="btn btn-warning btn-canc-vis">Editar</button>
		                </div>
		                <div class="formedit">
		                    <span id="msg-edit"></span>
		                    <form id="editevent" method="POST" enctype="multipart/form-data">
		                        <input type="hidden" name="id" id="id" >
		                        <div class="form-group row">
		                            <label class="col-sm-2 col-form-label">Aluno</label>
		                            <div class="col-sm-10">
		                                <input type="text" name="title" class="form-control" id="title" placeholder="Nome do aluno">
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-sm-2 col-form-label">Professor</label>
		                            <div class="col-sm-10">
		                                <select name="professor" class="form-control" id="professor">
		                                <option value="">Selecione</option>			
		                                <option style="color:#FFD700;" value="Daniela">Daniela</option>
		                                <option style="color:#0071c5;" value="Renan">Renan</option>
		                                <option style="color:#FF4500;" value="Lelia">Lelia</option>
		                                <option style="color:#8B4513;" value="Fabiano">Fabiano</option> 
		                                <option style="color:#1C1C1C;" value="Vagner">Vagner</option>
		                                </select>
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-sm-2 col-form-label">Início da aula</label>
		                            <div class="col-sm-10">
		                                <input type="text" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
		                            </div>
		                        </div>
		                        <div class="form-group row">
		                            <label class="col-sm-2 col-form-label">Final da aula</label>
		                            <div class="col-sm-10">
		                                <input type="text" name="end" class="form-control" id="end"  onkeypress="DataHora(event, this)">
		                            </div>
		                        </div>

		                        <div class="form-group row">
		                            <div class="col-sm-10">
		                                <button type="button" class="btn btn-primary btn-canc-edit">Cancelar</button>
		                                <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Cadastrar</button>                                    
		                            </div>
		                        </div>
		                    </form>                            
		                </div>
		            </div>
		        </div>
		    </div>
		</div>

		<div class="modal fade" id="cadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		    <div class="modal-dialog modal-lg" role="document">
		        <div class="modal-content">
		            <div class="modal-header">
		                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Aula</h5>
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                    <span aria-hidden="true">&times;</span>
		                </button>
		            </div>
		            <div class="modal-body">
		                <span id="msg-cad"></span>
		                <form id="addevent" method="POST" enctype="multipart/form-data">
		                    <div class="form-group row">
		                        <label class="col-sm-2 col-form-label">Aluno</label>
		                        <div class="col-sm-10">
		                            <input type="text" name="title" class="form-control" id="title" placeholder="Nome do aluno">
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label class="col-sm-2 col-form-label">Professor</label>
		                        <div class="col-sm-10">
		                            <select name="professor" class="form-control" id="professor">
		                                <option value="">Selecione</option>			
		                                <option style="color:#FFD700;" value="Daniela">Daniela</option>
		                                <option style="color:#0071c5;" value="Renan">Renan</option>
		                                <option style="color:#FF4500;" value="Lelia">Lelia</option>
		                                <option style="color:#8B4513;" value="Fabiano">Fabiano</option>	
		                                <option style="color:#1C1C1C;" value="Vagner">Vagner</option>
		                            </select>
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label class="col-sm-2 col-form-label">Início da aula</label>
		                        <div class="col-sm-10">
		                            <input type="text" name="start" class="form-control" id="start" onkeypress="DataHora(event, this)">
		                        </div>
		                    </div>
		                    <div class="form-group row">
		                        <label class="col-sm-2 col-form-label">Final da aula</label>
		                        <div class="col-sm-10">
		                            <input type="text" name="end" class="form-control" id="end"  onkeypress="DataHora(event, this)">
		                        </div>
		                    </div>

		                    <div class="form-group row">
		                        <div class="col-sm-10">
		                            <button type="submit" name="CadEvent" id="CadEvent" value="CadEvent" class="btn btn-success">Cadastrar</button>                                    
		                        </div>
		                    </div>
		                </form>
		            </div>
		        </div>
		    </div>
			</div>	
		</div>
	</div>
				<!--
				<p class="form-messege"></p>
			</div>
		</div>
	</div>
	<div id="contact-map"></div>
</div>
<!-- CTA Area
============================================ 
<div class="cta-area pb-40 pt-40">
	<div class="container">
		<div class="row">
			<div class="call-to-action text-left col-md-10 col-md-offset-1 col-xs-12">
				<h3>try to get our amazing free lesson</h3>
				<a href="#" class="btn transparent ">get  lesson</a>
			</div>
		</div>
	</div>
</div>
<!-- Footer Area
============================================ -->
<!--<div class="footer-area overlay overlay-black overlay-70 pt-90">
	<div class="container">
		<div class="row">
			<div class="footer-widget text-left col-md-3 col-sm-6 col-xs-12">
				<h4 class="widget-title">Sobre nós</h4>
				<div class="about-widget">
					<p>It is a long established fact that is a reader will be distracted by the readable content of page when looking at its layout. it’s the more fact that is reader will be by the readable looking its layout.</p>
					<div class="widget-social fix">
						<a href="#"><i class="icofont icofont-social-facebook"></i></a>
						<a href="#"><i class="icofont icofont-social-pinterest"></i></a>
						<a href="#"><i class="icofont icofont-social-twitter"></i></a>
						<a href="#"><i class="icofont icofont-social-rss"></i></a>
					</div>
				</div>
			</div>
			<div class="footer-widget text-left col-md-3 col-sm-6 col-xs-12">
				<h4 class="widget-title">quick contact</h4>
				<div class="contact-widget">
					<h5>address:</h5>
					<p>Flor. 4,  House. 15,  Block-C. <br />Banasree Main Road,  Dhaka.</p>
					<h5>phone:</h5>
					<p>+880 1912 345 678 <br />+880 1912 345 678</p>
					<h5>e-mail</h5>
					<p>
						<a href="#">driveonskill@email.com</a>
						<a href="#">www.driveon.com</a>
					</p>
				</div>
			</div>
			<div class="footer-widget text-left col-md-3 col-sm-6 col-xs-12">
				<h4 class="widget-title">blog post</h4>
				<div class="blog-widget">
					<div class="widget-blog fix">
						<a href="#" class="image float-left"><img src="img/blog-widget/1.jpg" alt="" /></a>
						<div class="content fix">
							<a href="#">new project</a>
							<p>It is a long established fact that is a reader will be...</p>
						</div>
					</div>
					<div class="widget-blog fix">
						<a href="#" class="image float-left"><img src="img/blog-widget/2.jpg" alt="" /></a>
						<div class="content fix">
							<a href="#">google maps</a>
							<p>It is a long established fact that is a reader will be...</p>
						</div>
					</div>
					<div class="widget-blog fix">
						<a href="#" class="image float-left"><img src="img/blog-widget/3.jpg" alt="" /></a>
						<div class="content fix">
							<a href="#">learn first</a>
							<p>It is a long established fact that is a reader will be...</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-bottom text-center col-xs-12">
			<p class="copyright">Copyright <i class="fa fa-copyright"></i> 2018 <a href="https://freethemescloud.com/" target="_blank" ></a> All rights reserved. </p>
		</div>
	</div>
</div>
</div>
-->
<!-- Body main wrapper end -->

<!-- JS -->

<!-- jQuery JS
============================================ -->
<script src="js/vendor/jquery-1.12.0.min.js"></script>
<!-- Bootstrap JS
============================================ -->
<script src="js/bootstrap.min.js"></script>
<!-- Plugins JS
============================================ -->
<script src="js/plugins.js"></script>
<!-- Ajax Mail JS
============================================ -->
<script src="js/ajax-mail.js"></script>
<!-- WOW JS


============================================ -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAdWLY_Y6FL7QGW5vcO3zajUEsrKfQPNzI"></script>
<script src="js/map.js"></script>
<!-- Main JS
============================================ -->
<script src="js/main.js"></script>

</body>
</html>

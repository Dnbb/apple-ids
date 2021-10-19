<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="utf-8" />
		<title>Cuentas</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../style.css" />
		<link href='../assets/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
		<style>
		
      	body, html {
        min-width: 100%;
        min-height: 100%;
        font: Arial 14px;
		padding-left: 20px;
		padding-right: 20px;
		padding-bottom: 15px;
		padding-top: 15px;
      	}

		.sidebar.open ~ .home-section{
  		left: 250px;
  		width: calc(100% - 250px);
		}
		
		/* Footer */

	#footer {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		padding: 5em 5em 3em 5em ;
		width: calc(100% + 2em);
		margin: 0 0 3em -2em;
		opacity: 0.75;
	}

		#footer > * {
			width: calc(50% - 2em);
			margin-left: 2em;
		}

		#footer .copyright {
			width: 100%;
			margin: 2.5em 0 2em 0;
			font-size: 0.8em;
			text-align: center;
		}

		@media screen and (max-width: 1280px) {

			#footer {
				padding: 4em 4em 2em 4em ;
			}

		}

		@media screen and (max-width: 980px) {

			#footer {
				padding: 4em 3em 2em 3em ;
				display: block;
				margin: 0 0 3em 0;
				width: 100%;
			}

				#footer > * {
					width: 100%;
					margin-left: 0;
					margin-bottom: 3em;
				}

				#footer .copyright {
					text-align: left;
				}

		}

		@media screen and (max-width: 736px) {

			#footer {
				padding: 3em 2em 1em 2em ;
			}

		}

		@media screen and (max-width: 480px) {

			#footer {
				padding: 3em 1.5em 1em 1.5em ;
			}

		}

		@media screen and (max-width: 480px) {

			#footer {
				padding: 2.5em 1em 0.5em 1em ;
			}

		}

		p, h2, h1, button special, b, h2, br, li, footer {
		color: white;
		}
		
		h1 {
		margin-top: 15px;
		}
		
		ilo {
		color: rgba(106,241,255,.93);
		}
		
		blaki {
		color: black;
		}
		
		a {
		color: inherit;
		}
		
		.specialo {
		background-color: rgba(106,150,255,.93);
		box-shadow: inset 0 0 0 1px rgba(106,150,255,.93);
		color: black;
		}
		
		iframe {
		border-radius: 8px;
		}
		
		.box {
		margin-left: 200px;
		margin-right: 200px;
		}
		
		h1 {
		font-size: 3.9em;
		}
	
		h2 {
		font-size: 2.5em;
		}
		
		/* Posts */

	.posts {
		display: -moz-flex;
		display: -webkit-flex;
		display: -ms-flex;
		display: flex;
		-moz-flex-wrap: wrap;
		-webkit-flex-wrap: wrap;
		-ms-flex-wrap: wrap;
		flex-wrap: wrap;
		margin: 0 0 2em -6em;
		width: calc(100% + 6em);
	}

		.posts article {
			-moz-flex-grow: 0;
			-webkit-flex-grow: 0;
			-ms-flex-grow: 0;
			flex-grow: 0;
			-moz-flex-shrink: 1;
			-webkit-flex-shrink: 1;
			-ms-flex-shrink: 1;
			flex-shrink: 1;
			margin: 0 0 6em 6em;
			position: relative;
			width: calc(33.33333% - 6em);
		}

			.posts article:before {
				background: rgba(210, 215, 217, 0.75);
				content: '';
				display: block;
				height: calc(100% + 6em);
				left: -3em;
				position: absolute;
				top: 0;
				width: 1px;
			}

			.posts article:after {
				background: rgba(210, 215, 217, 0.75);
				bottom: -3em;
				content: '';
				display: block;
				height: 1px;
				position: absolute;
				right: 0;
				width: calc(100% + 6em);
			}

			.posts article > :last-child {
				margin-bottom: 0;
			}

			.posts article .image {
				display: block;
				margin: 0 0 2em 0;
			}

				.posts article .image img {
					display: block;
					width: 100%;
				}

		@media screen and (min-width: 1681px) {

			.posts article:nth-child(3n + 1):before {
				display: none;
			}

			.posts article:nth-child(3n + 1):after {
				width: 100%;
			}

			.posts article:nth-last-child(1), .posts article:nth-last-child(2), .posts article:nth-last-child(3) {
				margin-bottom: 0;
			}

				.posts article:nth-last-child(1):before, .posts article:nth-last-child(2):before, .posts article:nth-last-child(3):before {
					height: 100%;
				}

				.posts article:nth-last-child(1):after, .posts article:nth-last-child(2):after, .posts article:nth-last-child(3):after {
					display: none;
				}

		}

		@media screen and (max-width: 1680px) {

			.posts article {
				width: calc(50% - 6em);
			}

				.posts article:nth-last-child(3) {
					margin-bottom: 6em;
				}

		}

		@media screen and (min-width: 481px) and (max-width: 1680px) {

			.posts article:nth-child(2n + 1):before {
				display: none;
			}

			.posts article:nth-child(2n + 1):after {
				width: 100%;
			}

			.posts article:nth-last-child(1), .posts article:nth-last-child(2) {
				margin-bottom: 0;
			}

				.posts article:nth-last-child(1):before, .posts article:nth-last-child(2):before {
					height: 100%;
				}

				.posts article:nth-last-child(1):after, .posts article:nth-last-child(2):after {
					display: none;
				}

		}

		@media screen and (max-width: 736px) {

			.posts {
				margin: 0 0 2em -4.5em;
				width: calc(100% + 4.5em);
			}

				.posts article {
					margin: 0 0 4.5em 4.5em;
					width: calc(50% - 4.5em);
				}

					.posts article:before {
						height: calc(100% + 4.5em);
						left: -2.25em;
					}

					.posts article:after {
						bottom: -2.25em;
						width: calc(100% + 4.5em);
					}

					.posts article:nth-last-child(3) {
						margin-bottom: 4.5em;
					}

		}

		@media screen and (max-width: 480px) {

			.posts {
				margin: 0 0 2em 0;
				width: 100%;
			}

				.posts article {
					margin: 0 0 4.5em 0;
					width: 100%;
				}

					.posts article:before {
						display: none;
					}

					.posts article:after {
						width: 100%;
					}

					.posts article:last-child {
						margin-bottom: 0;
					}

						.posts article:last-child:after {
							display: none;
						}

		}
		
		/* Mini Posts */

	.mini-posts article {
		border-top: solid 1px rgba(210, 215, 217, 0.75);
		margin-top: 2em;
		padding-top: 2em;
	}

		.mini-posts article .image {
			display: block;
			margin: 0 0 1.5em 0;
		}

			.mini-posts article .image img {
				display: block;
				border-radius: 8px;
				width: 100%;
			}
			
			.posts article .image img {
				display: block;
				border-radius: 8px;
				width: 100%;
			}

		.mini-posts article:first-child {
			border-top: 0;
			margin-top: 0;
			padding-top: 0;
		}

		#intro {
		background-color: transparent;
		}
		
    </style>
	</head>
	<body>
	<div class="sidebar">
    <div class="logo-details">
      <i class='bx bxl-apple icon'></i>
        <div class="logo_name">Apple ID'S</div>
        <i class='bx bx-menu' id="btn" ></i>
    </div>
    <ul class="nav-list">
      <li>
        <a href="#">
          <i class='bx bx-at'></i>
          <span class="links_name">Cuentas</span>
        </a>
         <span class="tooltip">Cuentas</span>
      </li>
      <li>
       <a href="#">
         <i class='bx bx-calendar-event' ></i>
         <span class="links_name">Fechas Eventos</span>
       </a>
       <span class="tooltip">Fechas</span>
     </li>
     <li>
       <a href="notificaciones.php">
         <i class='bx bx-message-alt-detail' ></i>
         <span class="links_name">Mensajes O Alertas</span>
       </a>
       <span class="tooltip">Mensajes</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bx-info-circle' ></i>
         <span class="links_name">Datos</span>
       </a>
       <span class="tooltip">Datos</span>
     </li>
     <li>
       <a href="#">
         <i class='bx bxs-folder-open' ></i>
         <span class="links_name">Archivos Virtuales</span>
       </a>
       <span class="tooltip">Archivos</span>
     </li>
     <li>
       <a href="galeria.php">
         <i class='bx bx-image' ></i>
         <span class="links_name">Galeria Virtual</span>
       </a>
       <span class="tooltip">Galeria</span>
     </li>
     <li>
       <a href="contacto.php">
         <i class='bx bx-envelope' ></i>
         <span class="links_name">Contacto</span>
       </a>
       <span class="tooltip">Contacto</span>
     </li>
<li>
       <a href="#">
         <i class='bx bx-user' ></i>
         <span class="links_name">¿Quienes Somos?</span>
       </a>
       <span class="tooltip">¿Nosotros?</span>
     </li>
	  <li>
       <a href="donaciones.php">
         <i class='bx bx-money' ></i>
         <span class="links_name">Donaciones</span>
       </a>
       <span class="tooltip">Donar</span>
     </li>
     <li class="profile">
         <div class="profile-details">
           <img src="../img/profile.jpg" alt="profileImg">
           <div class="name_job">
             <div class="name">Invitado</div>
             <div class="job">Proximamente</div>
           </div>
<div>
<a href="../index.html">
         <i class='bx bx-log-out' id="log_out"></i>
<span class="links_names"></span>
       </a>
     </li>
    </ul>
  </div>
								<section id="intro" class="home-section">
									<div class="content">
									<header class="major">
									<center center="auto">
										<h2 class="major"><b>Cuentas  <a href="https://apple.com" class="bx bxl-apple icon"></a></b></h2>
										<p>Si una cuenta esta bloqueada, se desbloqueara en 1 o 2 dias como maximo. No te desesperes si 1 o 2 cuentas estan bloqueadas, posiblemente las otras cuentas no lo esten.<br><br>
Para ver que apps contiene el Apple ID, da click en el boton que dice <b>Ver Imagen</b>
									</header>
									<p><br />
									<div class="mini posts">
									<article type="special">
									<center center="auto">
										<div class="12u"><a class="image"><img src="../img/apple-id/apple01.png" alt="" /></a></div>
											<h3><b>Apple ID No.1</b></h3>
											<p>Correo: <b>Example2021@gmail.com</b>
											<br />Contraseña: <b>Example2021123</b><br />
											<div class="button">Ver Imagen</button></p>
										</article>
										<article>
										<center center="auto">
										<div class="12u"><a class="image"><img src="../img/apple-id/apple01.png" alt="" /></a></div>
											<h3><b>Apple ID No.2</b></h3>
											<p>Correo: <b>Example2021@gmail.com</b>
											<br />Contraseña: <b>Example2021123</b><br />
											<div class="button">Ver Imagen</button></p>
										</article>
										<article>
										<center center="auto">
										<div class="12u"><a class="image"><img src="../img/apple-id/apple01.png" alt="" /></a></div>
											<h3><b>Apple ID No.2</b></h3>
											<p>Correo: <b>Example2021@gmail.com</b>
											<br />Contraseña: <b>Example2021123</b><br />
											<div class="button">Ver Imagen</button></p>
										</article>
										<article>
										<center center="auto">
										<div class="12u"><a class="image"><img src="../img/apple-id/apple01.png" alt="" /></a></div>
											<h3><b>Apple ID No.2</b></h3>
											<p>Correo: <b>Example2021@gmail.com</b>
											<br />Contraseña: <b>Example2021123</b><br />
											<div class="button">Ver Imagen</button></p>
										</article>
										<article>
										<center center="auto">
										<div class="12u"><a class="image"><img src="../img/apple-id/apple01.png" alt="" /></a></div>
											<h3><b>Apple ID No.2</b></h3>
											<p>Correo: <b>Example2021@gmail.com</b>
											<br />Contraseña: <b>Example2021123</b><br />
											<div class="button">Ver Imagen</button></p>
										</article>
										<article>
										<center center="auto">
										<div class="12u"><a class="image"><img src="../img/apple-id/apple01.png" alt="" /></a></div>
											<h3><b>Apple ID No.2</b></h3>
											<p>Correo: <b>Example2021@gmail.com</b>
											<br />Contraseña: <b>Example2021123</b><br />
											<div class="button">Ver Imagen</button></p>
										</article>
										<article>
										<center center="auto">
										<div class="12u"><a class="image"><img src="../img/apple-id/apple01.png" alt="" /></a></div>
											<h3><b>Apple ID No.2</b></h3>
											<p>Correo: <b>Example2021@gmail.com</b>
											<br />Contraseña: <b>Example2021123</b><br />
											<div class="button">Ver Imagen</button></p>
										</article>
										<article>
										<center center="auto">
										<div class="12u"><a class="image"><img src="../img/apple-id/apple01.png" alt="" /></a></div>
											<h3><b>Apple ID No.2</b></h3>
											<p>Correo: <b>Example2021@gmail.com</b>
											<br />Contraseña: <b>Example2021123</b><br />
											<div class="button">Ver Imagen</button></p>
										</article>
									</div>
								<!--<center center="auto">
						<iframe src="eventos/evento.app.html" width="700" height="405" allowfullscree allowtransparency allow="autoplay" scrolling="no" frameborder="0"></iframe>
								
<div class="box alt">
<div class="row 50%">
									<div class="2u"><span class="image fit"><img src="images/visa.jpg" alt="" /></span></div>
									<div class="3u"><span class="image fit"><img src="images/mastercard.jpg" alt="" /></span></div>
									<div class="2u"><span class="image fit"><img src="images/american.jpg" alt="" /></span></div>
									</div>-->
									
						</div>
						</div>
					</div>
						
						<footer id="footer">
						<p class="copyright">&copy; <script type="text/javascript">  function onBtnl() {alert('https://Dnbb_01.github/personal/Index.html');}</script>
<a onclick="onBtnl()">Dnbb </a><script>document.write(new Date().getFullYear())</script></p>
					</footer>
						</section>
						<!--Scrips-->
			<script src="../assets/js/jquery-3.2.1.js"></script>
    		<script src="../assets/js/script.js"></script>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
					</body>
</html>
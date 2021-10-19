<!DOCTYPE HTML>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Notificaciones</title>
    <link rel="stylesheet" href="../style.css">
    <link href='../assets/css/boxicons.min.css' rel='stylesheet'>
     <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
<!--[if lte IE 9]><link rel="stylesheet" href="../assets/css/ie9.css" /><![endif]-->
		<noscript><link rel="stylesheet" href="../assets/css/noscript.css" /></noscript>
   </head>
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

		p, h2, h1, button special, b, h2, br, li, footer {
		color: white;
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
		margin-left: 60px;
		margin-right: 60px;
		}
		
		h1 {
		font-size: 3.9em;
		}
	
		h2 {
		font-size: 2.5em;
		}
		
		.home-section {
		background-color: transparent;
		}
		
		h7 {
		font-size: 30px;
		}
		
		pk {
		padding-left: 80px;
		}
		
		.tooltip {
		color: black;
		}
		
		li {
		color: ;
		}
		
		msg {
		color: ;
		}
		
		pla {
		color: rgba(255,255,255,.5)
		}
		
		pele {
		font-family: "Source Sans Pro", sans-serif;/*Poppins*/
		}
		
		msg #nene {
		padding-left: 55px;
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
        <a href="cuentas.php">
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
       <a href="#">
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
       <a href="#">
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
  <section class="home-section">
								<section special id="intro" class="main">
									<div class="content">
									<header class="major">
									<center center="auto">
										<h2 class="major"><b>Mensajes O Alertas</b></h2><br><br>
										<p>Aqui recibiras mensajes o notificaciones sobre las mejoras, nuevas opciones o anuncios sobre la página.</p>
									</header>
									</center>
									<br>
									<p><pk><b>Notificaciones</b></pk></p>
									<div class="box">
									<li class='bx bx-bell'> <pele>Primera apretura de la pagina, bienvenid@</pele></li><br><br>
									<li class='bx bx-bell'> <pele>Esperamos que la pagina sea de tu agrado</pele></li>
									</div>
									<br>
									<p><pk><b>Mensajes</b></pk></p>
									<div class="box">
									<msg class='bx bx-message-check'><b> Dnbb:</b> ¡Hola!, esperemos que la pagina sea de tu agrado, estamos arreglando algunos errores que aun posee, si encuentras un bug o error en la pagina informanos desde <a href="contacto.php"><b><i>contacto</i></b></a></msg><br><br>
									<msg class='bx bx-message-check'><b> <nene>Programador:</b> <nene>¡Hola!, espero que sea de tu agrado esta <nene>pagina, para que no tengas problemas con el contenido de la pagina te recomiendo que utilizes tu telefono en horizontal asi podras visualizarla comodamente, corregire este error para que no tengas que tener tu telefono en horizontal cada vez que visites la pagina. Si encuentras algun error del cual yo no sepa dirigete a <a href="contacto.php"><b><i>contacto</i></b></a> y envianos un correo.</msg></nene>
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
						<!-- Scripts -->
			<script src="../assets/js/jquery-3.2.1.js"></script>
    		<script src="../assets/js/script.js"></script>
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<script src="../assets/js/main.js"></script>
						
					</body>
</html>
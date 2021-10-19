<!DOCTYPE HTML>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title>Donaciones</title>
    <link rel="stylesheet" href="../style.css">
    <!-- Boxicons CDN Link -->
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
		padding-top: 20px;
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
		
		.field {
		margin-bottom: -60px;
		margin-left: 60px;
		margin-right: 60px;
		}
		
		.tooltip {
		color: black;
		}
		
		pla {
		color: rgba(255,255,255,.5)
		}
		
		.button {
		margin-bottom: 0.5em;
		}
		
		p {
		padding-top: 6em;
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
       <a href="#">
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
									<article>
									<center center="auto">
								<h2 class="major">Donaciones</h2>
								<p>Selecciona la cantidad que deseas Donar.<br>
El metodo que se utiliza es Mercado Pago, no nesesitas una cuenta para poder donar.												<div><a href="https://mpago.la/1YxdLv3" class="button small">$5 MXN</a>
																<a href="https://mpago.la/1AqieVL" class="button small">$10 MXN</a>
																<a href="https://mpago.la/2W1uAqb" class="button small">$15 MXN</a>
																<a href="https://mpago.la/2K9Ghmz" class="button small">$20 MXN</a>
																<a href="https://mpago.la/1xcTLa2" class="button small">$25 MXN</div></a>
																<div><a href="https://mpago.la/1FgYVsG" class="button small">$30 MXN</a>
																<a href="https://mpago.la/2y358Zb" class="button small">$35 MXN</a>
																<a href="https://mpago.la/139hkRF" class="button small">$40 MXN</a>
																<a href="https://mpago.la/1sNFYpL" class="button small">$45 MXN</a>
																<a href="https://mpago.la/1yAWanM" class="button small">$50 MXN</div></a>
																<div><a href="https://mpago.la/1D8UM9n" class="button small">$55 MXN</a>
																<a href="https://mpago.la/1d7qdZH" class="button small">$60 MXN</a>
																<a href="https://mpago.la/1RwusmQ" class="button small">$65 MXN</a>
																<a href="https://mpago.la/1M2ksnH" class="button small">$70 MXN</a>
																<a href="https://mpago.la/1SVTBr4" class="button small">$75 MXN</div></a>
																<div><a href="https://mpago.la/1pQgnPK" class="button small">$80 MXN</a>
																<a href="https://mpago.la/2B93nS1" class="button small">$85 MXN</a>
																<a href="https://mpago.la/2GfHEMr" class="button small">$90 MXN</a>
																<a href="https://mpago.la/2Gv7hB2" class="button small">$95 MXN</a>
																<a href="https://mpago.la/2hb5k6b" class="button small">$100 MXN</div></a>
																<br>Gracias por donar a esta pagina, tu donacion nos ayuda mucho <i class='bx bx-happy-alt' ></i>
</p>
							</article>
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
					<div id="bottom">
						<footer id="footer">
						<k class="copyright">&copy; <script type="text/javascript">  function onBtnl() {alert('https://Dnbb_01.github/personal/Index.html');}</script>
<a onclick="onBtnl()">Dnbb </a><script>document.write(new Date().getFullYear())</script></k>
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
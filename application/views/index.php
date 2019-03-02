
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Proyecto infracción</title>

	<!-- Bootstrap -->

	<link href="{urlCss}/bootstrap.min1.css" rel="stylesheet">
	<link rel="stylesheet" href="{urlCss}/font-awesome.min.css">
	<link rel="stylesheet" href="{urlCss}/animate.css">
	<link rel="stylesheet" href="{urlCss}/overwrite.css">
	<link href="{urlCss}/animate.min.css" rel="stylesheet">
	<link href="{urlCss}/style1.css" rel="stylesheet" />
	<link rel="stylesheet" href="{urlCss}/font-awesome.min.css">
	<!-- =======================================================
      Theme Name: Bikin
      Theme URL: https://bootstrapmade.com/bikin-free-simple-landing-page-template/
      Author: BootstrapMade
      Author URL: https://bootstrapmade.com
    ======================================================= -->
</head>

<body>
<header id="">
	<nav class="navbar navbar-fixed-top" role="banner">
		<div class="container">
			<div class="navbar-header" style="">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="">Proyecto infracción</a>
			</div>
			<div class="collapse navbar-collapse navbar-right">
				<ul class="nav navbar-nav">
					<li class="active"><a href="">Inicio</a></li>
					<li><a href="#slider">Informacion</a></li>
					<li><a href="#feature">Buscar Vehiculo</a></li>

					<li><a href="{urlPanel}" onclick='{modalLogin}'>{nameBtnLogin}</a></li>

					<?php
						if(isset($this->session->id)) { ?>
							<li><a href="{url}/logoun">Cerrar Sesion</a></li>
					<?php } ?>

				</ul>
			</div>
		</div>
		<!--/.container-->
	</nav>
	<!--/nav-->
</header>
<!--/header-->
<div class="slider" id="slider">
	<div id="about-slider">
		<div id="carousel-slider" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators visible-xs">
				<li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
				<li data-target="#carousel-slider" data-slide-to="1"></li>
				<li data-target="#carousel-slider" data-slide-to="2"></li>
			</ol>

			<div class="carousel-inner">
				<div class="item active">
					<img src="{urlImg}/multas_2017-web.jpg" class="img-responsive" alt="" style="width: 80%;position: relative; left: 120px;top:20px;">

				</div>
			</div>
			<a class="left carousel-control hidden-xs" href="#carousel-slider" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class=" right carousel-control hidden-xs" href="#carousel-slider" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		<!--/#carousel-slider-->
	</div>
	<!--/#about-slider-->
</div>
<!--/#slider-->

<div id="feature">
	<div class="container">
		<div class="row">
			<div class="text-center">
				<h3>Consulta de Multas de Tránsito</h3>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit Lorem ipsum dolor sit<br>amet consectetur adipisicing elit</p>
			</div>
			<div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s" onclick='tipoMulta(1)'>
				<div class="text-center">
					<div class="hi-icon-wrap hi-icon-effect">
						<!--<i class="fa fa-laptop"></i> -->
						<img src="{urlImg}/multas-de-tránsito-1.png" width="100">
						<h2>Multa de transito</h2>
						<p>Realice la buscaqueda con su cedula</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInRight" data-wow-offset="0" data-wow-delay="0.3s"  onclick='tipoMulta(2)'>
				<div class="text-center">
					<div class="hi-icon-wrap hi-icon-effect">
						<!--<i class="fa fa-heart-o"></i>--><p></p><p></p>
						<img src="{urlImg}/multasTransito.png" width="100">
						<h2>Consulta Tu vehiculo</h2>
						<p>Realice la buscaqueda con la placa del vehiculo</p>
					</div>
				</div>
			</div>
			<div class="col-md-4 wow fadeInLeft" data-wow-offset="0" data-wow-delay="0.3s"  onclick='tipoMulta(3)'>
				<div class="text-center">
					<div class="hi-icon-wrap hi-icon-effect">
						<p></p>
						<img src="{urlImg}/informacion-formato-ap.png" width="200">
						<h2>Tramite de formato de pago</h2>
						<p>Realice la buscaqueda con el numero de recibo de la multa</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>


<footer>
	<div id="contact">
		<div class="container">
			<div class="text-center">
				<h3>Contact Us</h3>
				<p>Fusce fermen tum neque a rutrum varius odio pede</p>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.2s">
					<h2>Contact us any time</h2>
					<p>In a elit in lorem congue varius. Sed nec arcu. Etiam sit amet augue. Fusce fermen tum neque a rutrum varius odio pede ullamcorp-er tellus ut dignissim nisi risus non tortor. Aliquam mollis neque.</p>
				</div>

				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.4s">
					<h2>Contact Info</h2>
					<ul>
						<li><i class="fa fa-home fa-2x"></i> Office # 38, Suite 54 Elizebth Street, Victoria State Newyork, USA 33026</li>
						<hr>
						<li><i class="fa fa-phone fa-2x"></i> +38 000 129900</li>
						<hr>
						<li><i class="fa fa-envelope fa-2x"></i> info@domain.net</li>
					</ul>
				</div>

				<div class="col-md-4 wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
					<div id="sendmessage">Your message has been sent. Thank you!</div>
					<div id="errormessage"></div>
					<form action="" method="post" role="form" class="contactForm">
						<div class="form-group">
							<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
							<div class="validation"></div>
						</div>
						<div class="form-group">
							<input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
							<div class="validation"></div>
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
							<div class="validation"></div>
						</div>
						<div class="form-group">
							<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
							<div class="validation"></div>
						</div>

						<button type="submit" class="btn btn-theme pull-left">SEND MESSAGE</button>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!--/#contact-->

	<div class="social-icon">
		<div class="container">
			<div class="col-md-6 col-md-offset-3">
				<ul class="social-network">
					<li><a href="#" class="fb tool-tip" title="Facebook"><i class="fa fa-facebook"></i></a></li>
					<li><a href="#" class="twitter tool-tip" title="Twitter"><i class="fa fa-twitter"></i></a></li>
					<li><a href="#" class="gplus tool-tip" title="Google Plus"><i class="fa fa-google-plus"></i></a></li>
					<li><a href="#" class="linkedin tool-tip" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
					<li><a href="#" class="ytube tool-tip" title="You Tube"><i class="fa fa-youtube-play"></i></a></li>
					<li><a href="#" class="dribbble tool-tip" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
					<li><a href="#" class="pinterest tool-tip" title="Pinterest"><i class="fa fa-pinterest-square"></i></a></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="text-center">
		<div class="copyright">
			&copy; Bikin Theme. All Rights Reserved.
			<div class="credits">
				<!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bikin
                -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</div>



	<div class="modals">
		<!-- Modal -->
		<div class="modal fade" id="login" role="dialog">
			<div class="modal-dialog">

				<!-- Modal content-->
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Iniciar Sesíon</h4>
					</div>
					<div class="modal-body">
						<form id="formLogin">
							<div class="form-group" id="error"></div>
							<div class="form-group">
								<label>Usuario</label>
								<input id="usuario" name="usuario" class="form-control" type="text" value="" placeholder="Usuario" required="required">
							</div>
							<div class="form-group">
								<label>Contraseña</label>
								<input id="password" name="password" class="form-control" value="" type="password" placeholder="Contraseña" required="required">
							</div>
							<div class="form-group">
								<input id="btnLogin" class="btn btn-success btn-sm" type="submit" value="Iniciar Sesíon">
								<input data-dismiss="modal" class="btn btn-danger btn-sm" type="button" value="Cerrar">
							</div>
						</form>
					</div>

				</div>

			</div>
		</div>
	</div>



	<div class="modal fade col-lg-12" id="multaModal" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" onclick=' $("#labelCedula").html("");$("#tablemulta").html("");' data-dismiss="modal">&times;</button>
					<h4 class="modal-title" id="titleModalMulta"></h4>
				</div>
				<div class="modal-body">
					<form id="formMulta">
						<div class="form-group" id="tipoMulta">
						</div>
						<div class="form-group">
							<input class="btn btn-success btn-sm" type="submit" value="Buscar Informacion">
							<input data-dismiss="modal" class="btn btn-danger btn-sm" onclick='$("#labelCedula").html("");$("#tablemulta").html("");' type="submit" value="Cerrar">
						</div>
					</form>
				</div>
				<div class="modal-body" id="informMulta" style="display: none;">
					<h6>Informacion pertinentes de infracciones cometidas por el titular de la cedula: <label id="labelCedula"></label></h6>
					<table class="table table-responsive">
						<thead>
						<tr>
							<th>Documento</th>
							<th>Nombre</th>
							<th>Valor</th>
							<th>Detalle </th>
							<th>Fecha</th>
							<th>Accion</th>
						</tr>
						</thead>
						<tbody id="tablemulta" style="font-size: 10px;">
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>




	<div class="row" id="impresion" style="display: none; position: relative; top:20px;">
		<div class="col-md-12 col-lg-12 col-sm-12" style="position: relative; top:100px;">
			<div class="white-box">
				<h3 class="box-title">Factura Multa</h3>
				<div class="table-responsive">
					<table class="table">
						<hr>
						<h6 class="box-title">Datos Personales</h6>
						<thead>
						<tr>
							<th>#</th>
							<th>Documento</th>
							<th>Primer Nombre</th>
							<th>Segundo Nombre</th>
							<th>Primer Apelldio</th>
							<th>Segundo Apellido</th>
						</tr>
						</thead>
						<tbody id="tabla1">
						</tbody>
					</table>

					<hr>
					<h6 class="box-title">Datos agente</h6>
					<table class="table">
						<thead>
						<tr>
							<th>#</th>
							<th>Documento</th>
							<th>Nombre</th>
							<th>Correo Electronico</th>
						</tr>
						</thead>
						<tbody id="tabla2">
						</tbody>
					</table>
					<hr>
					<h6 class="box-title">Datos de infraccion</h6>
					<table class="table">
						<thead>
						<tr>
							<th>Placa</th>
							<th>Codigo</th>
							<th>Detalle</th>
							<th>Valor</th>
							<th>Fecha</th>
							<th>Estado</th>
						</tr>
						</thead>
						<tbody id="tabla3">
						</tbody>
					</table>
				</div>
				<br><br><br>

				<b>Debes cancelar el pago en la oficinas con un valor de $ <small id="val"></small>
					<br>Fecha Generacion de Factura <small id="fechaA"></small>
					<br><br><br>
					<b>
						<hr>
						<label>Firma: </label><br>
						<span style="position: relative; left: 1px; top:8px;" id="firma"></span><br>____________________
						<br>
						<label>C.C: <small id="cedu"></small></label>
						<hr>

						<img width="100" id="bcTarget" src="">

			</div>
		</div>
	</div>




</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{urlJs}/jquery-2.1.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{urlJs}/bootstrap.min.js"></script>
<script src="{urlJs}/parallax.min.js"></script>
<script src="{urlJs}/wow.min.js"></script>
<script src="{urlJs}/jquery.easing.min.js"></script>
<script type="text/javascript" src="{urlJs}/fliplightbox.min.js"></script>
<script src="{urlJs}/functions.js"></script>

<script src="{urlJs}notify.min.js"></script>
<script src="{urlJs}myscript.js"></script>
<script src="https://cdn.jsdelivr.net/jsbarcode/3.3.7/JsBarcode.all.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.debug.js" integrity="sha384-NaWTHo/8YCBYJ59830LTz/P4aQZK1sS0SneOgAvhsIl3zBu8r9RevNg5lHCHAuQ/" crossorigin="anonymous"></script>




<script>


	{loader}

	var url = '{urlPost}';



	$("#formMulta").on("submit",function (form) {
		form.preventDefault();
		var obj = new Object();
		if($("#cedula").val() != undefined){
			obj.key = 'documento';
			obj.value = $("#cedula").val();
		}else  if($("#placa").val() != undefined){
			obj.key = 'placa';
			obj.value = $("#placa").val();
		}else{
			obj.key = 'code';
			obj.value = $("#codigo").val();
		}
		post.$url = "{urlPost}/getInfraccion";
		post.$sendPost.setNpost(obj);
		var data = post.$sendPost.getPost();
		var string = "";
		$("#labelDocumento").html(obj.value);
		for(var i in data){
			string += '<tr>';
			string += '<td>'+data[i].documento+'</td>';
			string += '<td>'+data[i].pNombre+'</td>';
			string += '<td>$'+data[i].valor+'</td>';
			string += '<td>'+data[i].detalle+'</td>';
			string += '<td>'+data[i].fecha+'</td>';
			var l  = JSON.stringify(data[i]);
			string += "<td><span><a href='#' onclick='imprimir("+l+")' class='text-success fa fa-print fa-fw'>Imprimir</a></span></td>";
			string += '</tr>';
		}
		$("#informMulta").css("display","block");
		$("#tablemulta").html(string);
	});

	function textToBase64Barcode(text){
		var canvas = document.createElement("canvas");
		JsBarcode(canvas, text, {format: "CODE128"});
		return canvas.toDataURL("image/png");
	}

	function imprimir(data = {}){


		var string = "";
		string += '<tr>';
		string += '<td>'+data.persona+'</td>';
		string += '<td>'+data.documento+'</td>';
		string += '<td>'+data.pNombre+'</td>';
		string += '<td>'+data.sNombre+'</td>';
		string += '<td>'+data.pApellido+'</td>';
		string += '<td>'+data.sApellido+'</td>';
		string += '</tr>';
		$("#tabla1").html(string);

		string = "";
		string += '<tr>';
		string += '<td>'+data.usuario+'</td>';
		string += '<td>'+data.nuip+'</td>';
		string += '<td>'+data.nombres+'</td>';
		string += '<td>'+data.email+'</td>';
		string += '</tr>';
		$("#cedu").html(data.nuip);
		$("#firma").html(data.nombres);
		$("#tabla2").html(string);

		string = "";
		string += '<tr>';
		string += '<td>'+data.placa+'</td>';
		string += '<td>'+data.codigo+'</td>';
		string += '<td>'+data.detalle+'</td>';
		string += '<td>$ '+data.valor+'</td>';
		string += '<td>'+data.fecha+'</td>';
		if(data.estado == 1){
			string += '<td>Pagado</td>';
		}else{
			string += '<td>No Pagado</td>';
		}
		string += '</tr>';
		$("#tabla3").html(string);
		$("#val").html("$ "+data.valor);
		var d = new Date();
		$("#fechaA").html(d.getDate()+"/"+(d.getMonth()+1)+"/"+d.getFullYear());
		$("#bcTarget").attr("src",textToBase64Barcode(data.code.toString()));

		setTimeout(function(){
			printDiv("impresion");
		}, 1000);

	}

	$("#formLogin").on("submit",function (form) {
		form.preventDefault();
		var obj = new Object();
		obj.username = $("#usuario").val();
		obj.password = $("#password").val();
		post.$url = "{urlPost}/login";
		post.$sendPost.setNpost(obj);
		var data = post.$sendPost.getPost();
		if(data){
			window.location.href = '{url}'+'/panel';
		}else{
			$("#error").html("<p style='color: red'>error usuario y/o contraseña invalida</p>");
		}
	});



	$("#formLogin").on("submit",function (form) {
		form.preventDefault();
		var obj = new Object();
		obj.username = $("#usuario").val();
		obj.password = $("#password").val();

		if(obj.username.length>3 && obj.password.length > 3){
			post(url+"/login",obj,"POST",csrf_token).then(data => {
				if(data.status){
					$.notify(data.success,"success");
					window.location.href = url+"/panel"
				}else{
					$.notify(data.error,"error");
				}
			});
		}else{
			$.notify("no puede haber campos vacios| usuario o la contraseña deben ser mayores que 3 digistros","error");
		}
	});



	function  tipoMulta(tipo) {
		$("#multaModal").modal();
		switch (tipo) {
			case 1: {
				$("#titleModalMulta").html("Buscar informacion de tu infraccion mediante tu cedula");
				$("#tipoMulta").html('<label>Cedula</label><input id="cedula" name="cedula" class="form-control" type="number" value="" placeholder="Cedula" required="required" minlength="8" maxlength="10">');
				break;
			}
			case 2:{
				$("#titleModalMulta").html("Buscar informacion de tu infraccion mediante la placa de tu vehiculo");
				$("#tipoMulta").html('<label>Placa</label><input id="placa" name="placa" class="form-control" type="text" value="" placeholder="Placa" required="required" >');
				break;
			}
			case 3:{
				$("#titleModalMulta").html("Buscar informacion de tu infraccion mediante el codigo de infraccion");
				$("#tipoMulta").html('<label>codigo Multa</label><input id="codigo" name="codigo" class="form-control" type="number" value="" placeholder="Codigo Multa" required="required">');
				break;
			}
		}

		post.$url = "{urlPost}/getDocumentoPlaca";
		post.$sendPost.setPost();
		var data = post.$sendPost.getPost();


		setTimeout(function(){
			if($("#placa") != undefined){
				autocomplete(document.getElementById("cedula"),data[0].documento);
			}else{
				autocomplete(document.getElementById("placa"), data[1].placa);
			}
		}, 1000);



	}
</script>

</body>
</html>

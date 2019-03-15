<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" type="image/png" sizes="16x16" href="{urlPanel}/plugins/images/favicon.png">
	<title>Ample Admin Template - The Ultimate Multipurpose admin template</title>
	<!-- Bootstrap Core CSS -->
	<link href="{urlPanel}/bootstrap//dist/css/bootstrap.min.css" rel="stylesheet">
	<!-- Menu CSS -->
	<link href="{urlPanel}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
	<!-- toast CSS -->
	<link href="{urlPanel}/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
	<!-- morris CSS -->
	<link href="{urlPanel}/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
	<!-- chartist CSS -->
	<link href="{urlPanel}/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
	<link href="{urlPanel}/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
	<!-- animation CSS -->
	<link href="{urlPanel}/css/animate.css" rel="stylesheet">
	<!-- Custom CSS -->
	<link href="{urlPanel}/css/style.css" rel="stylesheet">
	<!-- color CSS -->
	<link href="{urlPanel}/css/colors/default.css" id="theme" rel="stylesheet">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->
	<style>

		#chart5 {

			border-radius: 10px;
			padding-top: 10px;
		}
	</style>
</head>

<body class="fix-header">
<!-- ============================================================== -->
<!-- Preloader -->
<!-- ============================================================== -->
<div class="preloader">
	<svg class="circular" viewBox="25 25 50 50">
		<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
	</svg>
</div>
<!-- ============================================================== -->
<!-- Wrapper -->
<!-- ============================================================== -->
<div id="wrapper">
	<!-- ============================================================== -->
	<!-- Topbar header - style you can find in pages.scss -->
	<!-- ============================================================== -->
	<nav class="navbar navbar-default navbar-static-top m-b-0">
		<div class="navbar-header" style="background: #0BA9F9!important;">
			<div class="top-left-part">
				<!-- Logo -->
				<a class="logo" href="javascript:void(0)">
					<!-- Logo icon image, you can use font-icon also --><b>
						<!--This is dark logo icon--><img src="{urlImg}/servicios-virtuales.png" width="150"  alt="home" class="dark-logo" /><!--This is light logo icon--><img src="{urlImg}/servicios-virtuales.png"  width="150" alt="home" class="light-logo" />
					</b></span> </a>
			</div>
			<!-- /Logo -->
			<ul class="nav navbar-top-links navbar-right pull-right">
				<li>
					<a class="profile-pic" href="{url}/logoun"><b class="hidden-xs">Cerrar Sesion</b></a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-header -->
		<!-- /.navbar-top-links -->
		<!-- /.navbar-static-side -->
	</nav>
	<!-- End Top Navigation -->
	<!-- ============================================================== -->
	<!-- Left Sidebar - style you can find in sidebar.scss  -->
	<!-- ============================================================== -->
	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav slimscrollsidebar">
			<div class="sidebar-head">
				<h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
			</div>
			<ul class="nav" id="side-menu">
				<li style="padding: 70px 0 0;">
					<a href="" class="waves-effect"><i class="fa fa-clock-o fa-fw" aria-hidden="true"></i>Panel <Administracion></Administracion></a>
				</li>

				<?php if($this->session->rol == 2){?>
						<li>
							<a href="#gestionUsuario" id="aGestionUsuario" class="waves-effect" onclick="$('.gestion').css('display','none');$('#gestionUsuario').css('display','block')">
								<i class="text-blue fa fa-user fa-fw" aria-hidden="true"></i>Usuarios
							</a>
						</li>

						<li>
							<a href="#gestionLyetes" id="aGestionLeyes" class="waves-effect" onclick="$('.gestion').css('display','none');$('#gestionLeyes').css('display','block')">
								<i class="text-success fa fa-eye fa-fw" aria-hidden="true"></i>Leyes
							</a>
						</li>
				<?php } ?>

				<li>
					<a href="#gestionInfraccion" id="aGestionInfraccion" class="waves-effect" onclick="$('.gestion').css('display','none');$('#gestionInfraccion').css('display','block')">
						<i class="text-warning fa fa fa-road fa-fw" aria-hidden="true"></i>infraccion
					</a>
				</li>

				<li>
					<a href="#gestionReporte" id="aGestionReporte" class="waves-effect" onclick="$('.gestion').css('display','none');$('#gestionReporte').css('display','block')">
						<i class="text-warning fa fa fa-road fa-fw" aria-hidden="true"></i>Graficos
					</a>
				</li>

			</ul>
		</div>

	</div>
	<!-- ============================================================== -->
	<!-- End Left Sidebar -->
	<!-- ============================================================== -->
	<!-- ============================================================== -->
	<!-- Page Content -->
	<!-- ============================================================== -->
	<div id="page-wrapper">
		<div class="container-fluid">
			<div class="row bg-title">
				<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
					<h4 class="page-title">Panel Administracion</h4> </div>
				<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
					<ol class="breadcrumb">
						<li><a href="#">Panel Administracion</a></li>
					</ol>
				</div>
				<!-- /.col-lg-12 -->
			</div>
			<!-- /.row -->
			<!-- ============================================================== -->
			<!-- Different data widgets -->
			<!-- ============================================================== -->
			<!-- .row -->
			<!-- ============================================================== -->
			<!-- table -->
			<!-- ============================================================== -->


			<div class="row gestion" id="gestionUsuario" style="display: none">
				<div class="col-md-12 col-lg-12 col-sm-12">
					<div class="white-box">
						<h3 class="box-title">Gestion Usuario</h3>
						<button class="btn btn-sm btn-info" onclick="$('#exampleModal').modal();$('.formgestion').css('display','none');$('#formUsuario').css('display','block');">Registrar usuario</button>
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
									<th>#</th>
									<th>Documento</th>
									<th>Usuario</th>
									<th>Imagen</th>
									<th>Email</th>
									<th>Nombres</th>
									<th>Apellidos</th>
									<th>Edad</th>
									<th>Accion</th>
								</tr>
								</thead>
								<tbody id="tablaVerUsuarios">
								</tbody>
							</table>
						</div>
					</div>
				</div
			</div>
		</div>


		<div class="row gestion" id="gestionLeyes" style="display: none">
				<div class="col-md-12 col-lg-12 col-sm-12">
					<div class="white-box">
						<h3 class="box-title">Gestion Leyes</h3>
						<button class="btn btn-sm btn-info" onclick="$('#exampleModal').modal();$('.formgestion').css('display','none');$('#formLeyes').css('display','block');">Registrar leyes</button>
						<div class="table-responsive">
							<table class="table">
								<thead>
								<tr>
									<th>#</th>
									<th>Codigo</th>
									<th>Detalle</th>
									<th>Valor</th>
									<th>Accion</th>
								</tr>
								</thead>
								<tbody id="tablaVerLeyes">
								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>


			<div class="row gestion" id="gestionReporte" style="display: none">
				<div class="col-md-12 col-lg-12 col-sm-12">
					<div class="white-box">
						<h3 class="box-title">Gestionar Infraccion</h3>
						<br>
						<button onclick="cargarGrafica(1);" class="btn btn-sm btn-info">Serie temporal</button>&nbsp;&nbsp;&nbsp;
						<button onclick="cargarGrafica(2);" class="btn btn-sm btn-info">Diagrama Torta</button>&nbsp;&nbsp;&nbsp;
						<hr>
						<center><h3>Serie de Tiempo Mutas Vs Mes</h3></center>
						<div id="chart5" class="ct-chart ct-major-tenth"></div>
						<hr>
					</div>
				</div>
			</div>


			<div class="row gestion" id="gestionInfraccion" style="display: none">
				<div class="col-md-12 col-lg-12 col-sm-12">
					<div class="white-box">
						<h3 class="box-title">Gestionar Infraccion</h3>
						<br>
						<button class="btn btn-sm btn-info" onclick="$('#exampleModal').modal();$('.formgestion').css('display','none');$('#formInfraccion').css('display','block');">Registrar Infraccion</button>
						<hr><br>
						<div class="table-responsive">
							<form class="form-horizontal form-material" id="formInfraccionView" name="formInfraccionView">

								<div class="form-group">
									<label class="col-md-12">Buscar Infraccion</label>
									<div class="col-md-12">
										<select class="form-control form-control-line" id="selectFind">
											<option>Seleccione una Opcion</option>
											<option value="nuip">Documento Agente</option>
											<option value="username">Usuario Agente</option>
											<option value="placa">Placa Vehiculo</option>
											<option value="codigo">Codigo de Infraccion</option>
											<option value="documento">Documento de infractor</option>
											<option value="pNombre">Primer Nombre de infractor</option>
											<option value="pApellido">Primer Apellido de infractor</option>
											<option value="fecha">Fecha de Infraccion</option>
										</select>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-12">Buscar por <b id="findForStrong"></b></label>
									<div class="col-md-12">
										<input required="required"  type="search" id="find" name="find" placeholder="Buscar " class="form-control form-control-line" maxlength="10" minlength="4">
									</div>
								</div>

							</form>
							<br>
							<table class="table">
								<thead>
								<tr>
									<th>#</th>
									<th>Documento Titular</th>
									<th>Documento Agente Transito</th>
									<th>Foto agente</th>
									<th>Nombre Titular</th>
									<th>Foto Titular</th>
									<th>Placa Vehiculo</th>
									<th>Valor Infraccion</th>
									<th>Detalle de Infraccion</th>
									<th>Fecha Infraccion</th>
									<th>Accion</th>
								</tr>
								</thead>
								<tbody id="tablaVerInfracciones">
								</tbody>
							</table>
						</div>
					</div>
				</div>

		</div>
	</div>

	<!-- /.container-fluid -->
</div>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form class="form-horizontal form-material formgestion" id="formUsuario" name="formUsuario" style="display: none">
						<div class="form-group">

							<div class="col-md-12">
								<label class="">Foto policia</label><br>
								<br>
								<img src="" id="imgFoto" width="100">
								<input type="hidden" id="img" name="img">
								<br>
								<input required="required"  type="file" id="imgInput" class="form-control form-control-line">
							</div>

							<div class="col-md-6">
								<br>
								<label class="">Documento</label>
								<input type="hidden" value="" name="id">
								<input required="required"  type="number" id="nuip" name="nuip" placeholder="Numero de Documento" class="form-control form-control-line" maxlength="10" minlength="8">
							</div>

							<div class="col-md-6">
								<br>
								<label class="">Usuario</label>
								<input required="required"  type="text" placeholder="Usuario" class="form-control form-control-line" name="username" id="username" minlength="4">
							</div>
							<div class="col-md-6">
								<br>
								<label class="">Contraseña</label>
								<input required="required"  type="password" placeholder="Contraseña" class="form-control form-control-line" name="password" id="password" minlength="4">
							</div>
							<div class="col-md-6">
								<br>
								<label class="">Correo electronico</label>
								<input required="required"  type="email" placeholder="Correo electronico" class="form-control form-control-line" name="email" id="email" minlength="4">
							</div>
							<div class="col-md-6">
								<br>
								<label class="">Nombres</label>
								<input required="required"  type="text" placeholder="Nombres" class="form-control form-control-line" name="nombres" id="nombres" minlength="4">
							</div>

							<div class="col-md-6">
								<br>
								<label class="">Apellidos</label>
								<input required="required"  type="text" placeholder="Apellidos" class="form-control form-control-line" name="apellidos" id="apellidos" minlength="4">
							</div>
							<div class="col-md-6">
								<br>
								<label class="">Edad</label>
								<input required="required"  type="number" placeholder="Edad" class="form-control form-control-line" name="edad" id="edad" min="18" minlength="4">
							</div>
							<div class="col-md-6">
								<br>
								<label class="">Rol</label>
								<select class="form-control form-control-line" id="rol">
									<option value="1">Agente Transito</option>
									<option value="2">Administrador</option>
								</select>
							</div>

						</div>


						<div class="form-group">
							<div class="col-sm-12">
								<input required="required"  type="submit" name="btnFormUsuario" class="btn btn-success" value="Guardar Usuario">
							</div>
						</div>
					</form>

					<form class="form-horizontal form-material formgestion" id="formLeyes" name="formLeyes" style="display: none">
						<div class="form-group">
							<label class="col-md-12">Codigo</label>
							<div class="col-md-12">
								<input type="hidden" name="id">
								<input required="required"  type="text" id="codigo" name="codigo" placeholder="Codigo" class="form-control form-control-line" maxlength="10" minlength="4">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-12">Datalle</label>
							<div class="col-md-12">
								<textarea required="required"  type="text" placeholder="detalle" class="form-control form-control-line" name="detalle" id="detalle" minlength="4"></textarea>
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-12">$ Precio</label>
							<div class="col-md-12">
								<input required="required"  type="number" placeholder="$ precio" class="form-control form-control-line" name="valor" id="valor" min="50000" minlength="5">
							</div>
						</div>
						<div class="form-group">
							<div class="col-sm-12">
								<input required="required"  type="submit" name="btnFormLeyes" class="btn btn-success" value="Guardar Ley">
							</div>
						</div>
					</form>

					<form class="form-horizontal form-material formgestion" id="formInfraccion" name="formInfraccio" style="display: none">
						<div class="form-group">

							<div class="col-md-6">
								<br>
								<label class="">Agente de policia</label>
								<input type="hidden" name="id">
								<input required="required" disabled="disabled" type="text" value="<?=$this->session->username?>" class="form-control form-control-line">
								<input required="required" disabled="disabled" type="hidden" name="usuario" id="usuario" value="<?=$this->session->id?>" class="form-control form-control-line">
							</div>

							<div class="col-md-6">
								<br>
								<label class="">Documento de agente</label>
								<input required="required" disabled="disabled" placeholder="documento"  type="text" value="<?=$this->session->nuip?>" class="form-control form-control-line">
							</div>

							<div class="col-md-6">
								<br>
								<label class="">placa Vehiculo</label>
								<input required="required" type="text" name="placa" id="placa" placeholder="Placa Vehiculo" class="form-control form-control-line">
							</div>

							<div class="col-md-6">
								<br>
								<label class="">Documento Dueño Vehiculo</label>
								<input required="required" disabled="disabled" type="text" name="documentoPlaca" id="documentoPlaca" placeholder="Documento Dueño Vehiculo" class="form-control form-control-line">
							</div>

							<div class="col-md-6">
								<br>
								<label class="">Codigo De infraccion</label>
								<input required="required" type="text" name="ley" id="ley" placeholder="Ley De infraccion" class="form-control form-control-line">
							</div>


							<div class="col-md-6">
								<br>
								<label class="">Detalle De Codigo</label>
								<input required="required" disabled="disabled" type="text" name="detalleLey" id="detalleLey" placeholder="Detalle De Codigo" class="form-control form-control-line">
							</div>

						</div>


						<div class="form-group">
							<label class="col-md-12">Estado de Infraccion</label>
							<div class="col-md-12">
								<select required="required" name="estado" id="estado"  class="form-control form-control-line">
									<option value="1">Pago</option>
									<option value="0">No pago</option>
								</select>
							</div>
						</div>

						<div class="form-group">
							<div class="col-sm-12">
								<input required="required"  type="submit" name="btnFormLeyes" class="btn btn-success" value="Guardar Infraccion">
							</div>
						</div>
					</form>


				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Cerrar</button>
				</div>
			</div>
		</div>
	</div>

<footer class="footer text-center"> 2017 &copy; Ample Admin brought to you by wrappixel.com </footer>
</div>
<!-- ============================================================== -->
<!-- End Page Content -->
<!-- ============================================================== -->
</div>
<!-- ============================================================== -->
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->

<script src="{urlPanel}/plugins/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="{urlPanel}/bootstrap//dist/js/bootstrap.min.js"></script>
<!-- Menu Plugin JavaScript -->
<script src="{urlPanel}/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
<!--slimscroll JavaScript -->
<script src="{urlPanel}/js/jquery.slimscroll.js"></script>
<!--Wave Effects -->
<script src="{urlPanel}/js/waves.js"></script>
<!--Counter js -->
<script src="{urlPanel}/plugins/bower_components/waypoints/lib/jquery.waypoints.js"></script>
<script src="{urlPanel}/plugins/bower_components/counterup/jquery.counterup.min.js"></script>
<!-- chartist chart -->
<script src="{urlPanel}/plugins/bower_components/chartist-js/dist/chartist.min.js"></script>
<script src="{urlPanel}/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.min.js"></script>
<!-- Sparkline chart JavaScript -->
<script src="{urlPanel}/plugins/bower_components/jquery-sparkline/jquery.sparkline.min.js"></script>
<!-- Custom Theme JavaScript -->
<script src="{urlPanel}/js/custom.min.js"></script>
<script src="{urlPanel}/js/dashboard1.js"></script>
<script src="{urlPanel}/plugins/bower_components/toast-master/js/jquery.toast.js"></script>
<script src="{urlJs}myscript.js"></script>
<script src="{urlJs}notify.min.js"></script>
<script src="https://cdn.jsdelivr.net/jsbarcode/3.3.7/JsBarcode.all.min.js"></script>
</body>

<script>
	{loader}


	function cargarGrafica(tipo = 1){
		post.$url = "{urlPost}/gestionInfraccion/2";
		post.$sendPost.setNpost();
		data = JSON.parse(post.$data);
		var fec = Object([]);
		fec.en = 0,fec.fe=0,fec.ma=0,fec.ab=0,fec.my = 0,fec.jn=0,fec.ju=0,fec.ag=0,fec.se=0,fec.oc=0,fec.no=0,fec.di=0;
		for(var i in data){
			var f = new Date(data[i].fecha).toLocaleDateString().split("/");
			switch (f[1]) {
				case "1" : fec.en += 1;break;
				case "2" : fec.fe += 1;break;
				case "3" : fec.ma += 1;break;
				case "4" : fec.ab += 1;break;
				case "5" : fec.my += 1;break;
				case "6" : fec.jn += 1;break;
				case "7" : fec.ju += 1;break;
				case "8" : fec.ag += 1;break;
				case "9" : fec.se += 1;break;
				case "10" : fec.oc += 1;break;
				case "11" : fec.no += 1;break;
				case "12" : fec.di += 1;break;
			}
		}
		var fec = [fec.en,fec.fe,fec.ma,fec.ab,fec.my,fec.jn,fec.ju,fec.ag,fec.se,fec.oc,fec.no,fec.di];

		var label = ['Enero', 'Febrero', 'Marzo', 'Abril','Mayo','Junio', 'Julio', 'Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

		var l = [];
		for(var i in fec){
			if(fec[i]>0){
				l.push(label[i]);
			}
		}

		var data1 = {
			labels: l,
			series: [fec],
			distributeSeries: true,
			axisY: {onlyInteger: true,}
		};

		if(tipo == 1){
			new Chartist.Line('#chart5', data1, {
				low: 0,
				showArea: true,
				axisY: {onlyInteger: true,}
			});
		}else{
			var a = [];
			for(var i in data){
				a.push(data[i].username);
			}
			a = a.filter( onlyUnique );
			var b = [];
			for(var i in a){
				var count = 2;
				for(var j in data){
					if(data[j].username == a[i]){
						count++;
					}
				}
				b.push(count);
			}

			var data1 = {
				labels: a,
				series: b
			};

			new Chartist.Pie('#chart5', data1);
		}

	}


	function onlyUnique(value, index, self) {
		return self.indexOf(value) === index;
	}


	$("textarea").keyup(function () {
		$("textarea").css("overflow","hidden").css("height",10).css("height",$("textarea").prop('scrollHeight')+"px");
	});



	$(document).ready(function () {
		loader("usuario",{});
		loader("leyes",{});
		loader("infraccion",{});

		post.$url = "{urlPost}/gestionInfraccion/6";
		post.$sendPost.setNpost({"key":"placa","clase":"vehiculos"});
		data = post.$sendPost.getPost();
		autocomplete(document.getElementById("placa"), data);

		post.$sendPost.setNpost({"key":"codigo","clase":"leyes"});
		data = post.$sendPost.getPost();
		autocomplete(document.getElementById("ley"), data);

	});


	function getFormData(form){
		var config = {};
		$(form+' input').each(function () {
			if(this.value != "" && this.name != ""){
				config[this.id] = this.value;
			}
		});
		$(form+' select').each(function () {
			if(this.value != "" && this.name != ""){
				config[this.id] = this.value;
			}
		});
		$(form+' textarea').each(function () {
			if(this.value != "" && this.name != ""){
				config[this.id] = this.value;
			}
		});

		$(form+' [name=id]').each(function () {
			config[this.name] = this.value;
		});
		return config;
	}

	$("#formUsuario").on("submit",function (form) {
		form.preventDefault();
		$(".form-control").css("border","0");
		if($("#formUsuario [type=submit]").val() != "Actualizar Informacion"){
			post.$url = "{urlPost}/gestionUsuario/1";
		}else{
			post.$url = "{urlPost}/gestionUsuario/3";
		}
		post.$sendPost.setNpost(getFormData("#formUsuario"));
		var data = post.$sendPost.getPost();
		if(data.error != undefined || data.success != undefined){
			$.notify(data.error);
			$("#"+data.key).focus();
			$("#"+data.key).css("border","1px solid red");
		}else{
			$.notify("Operacion exitosa","success");
			loader("usuario",data);
		}
	});

	$("#formInfraccion").on("submit",function (form) {
		form.preventDefault();
		if($("#formInfraccion [type=submit]").val() != "Actualizar Informacion"){
			post.$url = "{urlPost}/gestionInfraccion/1";
		}else{
			post.$url = "{urlPost}/gestionInfraccion/3";
		}
		if($("#documentoPlaca").val().length == 0){
			$.notify("No existe Este vehiculo");
			return false;
		}
		post.$sendPost.setNpost(getFormData("#formInfraccion"));
		var data = post.$sendPost.getPost();
		$.notify("Operacion realizada con exito","success");
		loader("infraccion",data);
	});


	$("#formLeyes").on("submit",function (form) {
		form.preventDefault();
		$(".form-control").css("border","0");
		if($("#formLeyes [type=submit]").val() != "Actualizar Informacion"){
			post.$url = "{urlPost}/gestionLeyes/1";
		}else{
			post.$url = "{urlPost}/gestionLeyes/3";
		}
		post.$sendPost.setNpost(getFormData("#formLeyes"));
		var data = post.$sendPost.getPost();

		if(data.error != undefined){
			$.notify(data.error);
			$("#"+data.key).focus();
			$("#"+data.key).css("border","1px solid red");
		}else{
			$.notify("Operacion exitosa","success");
			loader("leyes",data);
		}
	});


	var loaderLeyes = function (data) {
		if(data.length == undefined){
			post.$url = "{urlPost}/gestionLeyes/2";
			post.$sendPost.setPost();
			data = post.$sendPost.getPost();
		}
		var string = "";
		var table = "leyes";
		var urlDelete = "gestionLeyes/4";
		var form = "#formLeyes";
		for(var i in data){
			string += '<tr>';
			string += "<td>"+data[i].id+"</td>";
			string += "<td>"+data[i].codigo+"</td>";
			string += "<td>"+data[i].detalle+"</td>";
			string += "<td>"+data[i].valor+"</td>";
			string += "<td><a href='javascript:void(0)' class='text-success fa fa-edit fa-fw' onclick='editar("+JSON.stringify(data[i])+","+JSON.stringify(form)+")'>Editar</a><br><a href='javascript:void(0)' class='text-danger fa fa-remove fa-fw' onclick='eliminar("+data[i].id+","+JSON.stringify(urlDelete)+","+JSON.stringify(table)+")'>Eliminar</a></td>";
			string += '</tr>';
		}
		$("#tablaVerLeyes").html(string);
	};


	var loaderInfraccion = function (data) {
		if(data.length == undefined){
			post.$url = "{urlPost}/gestionInfraccion/2";
			post.$sendPost.setPost();
			data = post.$sendPost.getPost();
		}
		var string = "";
		var table = "infraccion";
		var urlDelete = "gestionInfraccion/4";
		var form = "#formInfraccion";
		for(var i in data){
			string += '<tr>';
			string += '<td>'+data[i].idInfraccion+'</td>';
			string += '<td>'+data[i].documento+'</td>';
			string += '<td>'+data[i].nuip+'</td>';
			string += "<td><img src='"+data[i].img+"' width='50' style='position: relative; bottom: 10px;'></td>";
			string += '<td>'+data[i].pNombre+'</td>';
			string += "<td><img src='"+data[i].imgPersona+"' width='50' style='position: relative; bottom: 10px;'></td>";
			string += '<td>'+data[i].placa+'</td>';
			string += '<td>$ '+data[i].valor+'</td>';
			string += '<td>'+data[i].detalle+'</td>';
			var d = new Date(data[i].fecha)
			string += '<td>'+d.toLocaleDateString()+'</td>';
			var l  = JSON.stringify(data[i]);

			string += "<td><a href='#ley' class='text-success fa fa-edit fa-fw' onclick='editar("+JSON.stringify(data[i])+","+JSON.stringify(form)+")'>Editar</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0)' class='text-danger fa fa-remove fa-fw' onclick='eliminar("+data[i].idInfraccion+","+JSON.stringify(urlDelete)+","+JSON.stringify(table)+")'>Eliminar</a></td>";
			string += '</tr>';
		}
		$("#tablaVerInfracciones").html(string);
	};


	var loaderUsuario = function(data = {}) {
		if(data.length == undefined){
			post.$url = "{urlPost}/gestionUsuario/2";
			post.$sendPost.setPost();
			data = post.$sendPost.getPost();
		}
		var string = "";
		var table = "usuario";
		var urlDelete = "gestionUsuario/4";
		var form = "#formUsuario";
		for(var i in data){
			if(data[i].rol < 2){
				string += '<tr>';
				string += "<td>"+data[i].id+"</td>";
				string += "<td>"+data[i].nuip+"</td>";
				string += "<td>"+data[i].username+"</td>";
				string += "<td><img src='"+data[i].img+"' width='70' height='50' style='position: relative; bottom: 10px;'></td>"
				string += "<td>"+data[i].email+"</td>";
				string += "<td>"+data[i].nombres+"</td>";
				string += "<td>"+data[i].apellidos+"</td>";
				string += "<td>"+data[i].edad+"</td>";
				string += "<td><a href='javascript:void(0)' class='text-success fa fa-edit fa-fw' onclick='editar("+JSON.stringify(data[i])+","+JSON.stringify(form)+")'>Editar</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href='javascript:void(0)' class='text-danger fa fa-remove fa-fw' onclick='eliminar("+data[i].id+","+JSON.stringify(urlDelete)+","+JSON.stringify(table)+")'>Eliminar</a></td>";
				string += '</tr>';
			}
		}
		$("#tablaVerUsuarios").html(string);
	};



	var editar = function (data = {},form = "") {
		$(form+" [type=submit]").val("Actualizar Informacion");

		$('.formgestion').css('display','none');
		if(form == "#formUsuario"){
			$("#nuip").val(data.nuip);
			$("#username").val(data.username);
			$("#password").val(data.password);
			$("#email").val(data.email);
			$("#nombres").val(data.nombres);
			$("#apellidos").val(data.apellidos);
			$("#edad").val(data.edad);
			$("#img").val(data.img);
			$("#imgFoto").attr("src",data.img);
			$("#imgInput").prop("required",false);
			$("[name=id]").val(data.id);
			$(form).css("display","block");
		}

		if(form == "#formInfraccion"){

			$("#placa").val(data.placa);
			$("#documentoPlaca").val(data.documento);
			$("#ley").val(data.codigo);
			$("#detalleLey").val(data.detalle);
			$("[name=id]").val(data.idInfraccion);
			$(form).css("display","block");
		}

		if(form == "#formLeyes"){

			$("#codigo").val(data.codigo);
			$("#detalle").val(data.detalle);
			$("#valor").val(data.valor);
			$("[name=id]").val(data.id);
			$(form).css("display","block");
		}

		$("#exampleModal").modal();
	};

	var eliminar = function(id,url,table = ""){
		var obj = {"id":id};
		post.$url = "{urlPost}/"+url;
		post.$sendPost.setNpost(obj);
		var data = post.$sendPost.getPost();
		$.notify(data.text,data.estado);
		if(data.estado != "error" || data.estado != "success"){
			loader(table,data);
		}
	};


	function loader(table = "usuario",data = {}) {
		switch (table) {
			case "usuario":{
				loaderUsuario(data);
				return true;
			}
			case "leyes":{
				loaderLeyes(data);
				break;
			}
			case "infraccion" :{
				loaderInfraccion(data);
			}
		}
	}

	$("#formInfraccionView").on("submit",function (form) {
		form.preventDefault();
	});

	$("#find").keyup(function () {
		if(this.value.length>2){
			post.$url = "{urlPost}/gestionInfraccion/5";
			var select = $("#selectFind").val();
			if(this.value.length > 2){
				var obj = {};
				obj[""+select+""] = this.value;
				post.$sendPost.setNpost(obj);
				data = post.$sendPost.getPost();
				loader("infraccion",data);
			}
		}
	});

	$("#selectFind").change(function () {

		post.$url = "{urlPost}/gestionInfraccion/6";
		var clase = "";
		switch (this.value) {
			case "nuip":{
				$("#findForStrong").html("Documento Agente");
				$("#find").attr("placeholder", "Documento Agente");
				$("#find").attr("type", "number");
				clase = "usuarios";
				break;
			}
			case "username":{
				$("#findForStrong").html("Usuario de Agente");
				$("#find").attr("placeholder", "Usuario de Agente");
				$("#find").attr("type", "text");
				clase = "usuarios";
				break;
			}
			case "placa":{
				$("#findForStrong").html("Placa Vehiculo");
				$("#find").attr("placeholder", "Placa Vehiculo");
				$("#find").attr("type", "text");
				clase = "vehiculos";
				break;
			}
			case "codigo":{
				$("#findForStrong").html("Codigo infraccion");
				$("#find").attr("placeholder", "Codigo infraccion");
				$("#find").attr("type", "text");
				clase = "leyes";
				break;
			}
			case "documento":{
				$("#findForStrong").html("Documento Infractor");
				$("#find").attr("placeholder", "Documento Infractor");
				$("#find").attr("type", "number");
				clase = "personas";
				break;
			}
			case "pNombre":{
				$("#findForStrong").html("Primer Nombre Infractor");
				$("#find").attr("placeholder", "Primer Nombre Infractor");
				$("#find").attr("type", "text");
				clase = "personas";
				break;
			}
			case "pApellido":{
				$("#findForStrong").html("Segundo Nombre Infractor");
				$("#find").attr("placeholder", "Segundo Nombre Infractor");
				$("#find").attr("type", "text");
				clase = "personas";
				break;
			}
			case "fecha":{
				$("#findForStrong").html("Fecha de infraccion");
				$("#find").attr("placeholder", "Fecha de infraccion");
				$("#find").attr("type", "text");
				clase = "infraccion";
				break;
			}
		}
		post.$sendPost.setNpost({"key":this.value,"clase":clase});
		data = post.$sendPost.getPost();
		autocomplete(document.getElementById("find"), data);
	});

	$("#placa").keyup(function () {
		if(this.value.length > 5){
			post.$url = "{urlPost}/gestionInfraccion/7";
			post.$sendPost.setNpost({"key":this.value});
			data = post.$sendPost.getPost();
			if(data == null){
				$("#documentoPlaca").val("");
			}else{
				$("#documentoPlaca").val(data.documento);
			}

		}
	});

	$("#ley").keyup(function () {
		post.$url = "{urlPost}/gestionInfraccion/8";
		post.$sendPost.setNpost({"key":this.value});
		data = post.$sendPost.getPost();
		$("#detalleLey").val(data.detalle);
	});


	function textToBase64Barcode(text){
		var canvas = document.createElement("canvas");
		JsBarcode(canvas, text, {format: "CODE128"});
		return canvas.toDataURL("image/png");
	}

	$("#imgInput").change(function () {
		var FR= new FileReader();
		FR.addEventListener("load", function(evt) {
			$("#imgFoto").attr("src",evt.target.result);
			$("#img").val(evt.target.result);
		});
		FR.readAsDataURL(this.files[0]);
	});



</script>

</html>

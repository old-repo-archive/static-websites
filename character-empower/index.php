<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<title>Elije tu nuevo equipo - Inventario</title>

<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" type="text/css" href="css/fileinput.min.css">
<link rel="stylesheet" type="text/css" href="css/estilo.css">

</head>
<body>

<div id="inventario">

	<section id="inv-header" class="center-block">
	</section>
	<section id="inv-slots" class="center-block" data-raza="default" data-tier="default" data-congato="no">
		<div id="pet" class="slot pull-left">
			<a href="#"></a>
		</div>
		<div id="pendant" class="slot pull-left">
			<a href="#"></a>
		</div>
		<div id="casco" class="slot pull-left">
			<a href="#"></a>
		</div>
		<div id="alas" class="slot pull-right">
			<a href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div id="manoder" class="slot pull-left">
			<a href="#"></a>
		</div>
		<div id="armor" class="slot pull-left">
			<a href="#"></a>
		</div>
		<div id="manoizq" class="slot pull-right">
			<a href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div id="guantes" class="slot pull-left">
			<a href="#"></a>
		</div>
		<div id="ring1" class="slot slot pull-left">
			<a href="#"></a>
		</div>
		<div id="pants" class="slot pull-left">
			<a href="#"></a>
		</div>
		<div id="ring2" class="slot pull-left">
			<a href="#"></a>
		</div>
		<div id="botas" class="slot pull-right">
			<a href="#"></a>
		</div>
		<div class="clearfix"></div>
		<div id="misc"class="slot pull-right">
			<a href="#"></a>
		</div>

		<div id="controles">
		</div>

	</section>
	<section id="inv-body" class="center-block">

		<form class="login center-block" method="GET">
			<!--<div class="form-group text-center">
			<div class="btn-group btn-group-justified" role="group">
				<label class="radio-inline btn btn-danger btn-xs">
				  <input type="radio" class="sr-only" name="servidor" id="inlineRadio1" value="alpha">
				  Servidor: Alpha
				</label>
				<label class="radio-inline btn btn-danger btn-xs">
				  <input type="radio" class="sr-only" name="servidor" id="inlineRadio2" value="beta">
				  Servidor: Beta
				</label>
			</div>
			</div>-->
			<div class="form-group">
				<div class="input-group">
			      <div class="input-group-addon"><span class="glyphicon glyphicon-cog"></span> Servidor</div>
					<select name="servidor" class="form-control">
						<option value="alpha" selected>Alpha</option>
						<option value="beta">Beta</option>
					</select>
				</div>
			</div>
		  <div class="form-group">
		    <label class="sr-only" for="usuario">Usuario</label>
		    <div class="input-group">
		      <div class="input-group-addon"><span class="glyphicon glyphicon-user"></span></div>
		      <input type="text" class="form-control" id="usuario" placeholder="Usuario">
		    </div>
		  </div>
		  <div class="form-group">
		    <label class="sr-only" for="usuario">Usuario</label>
		    <div class="input-group">
		      <div class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></div>
		      <input type="paswword" class="form-control" id="password" placeholder="Contraseña">
		    </div>
		  </div>
		  <button type="submit" class="btn btn-danger center-block">Entrar</button>
		</form>

		<div id="pedido" class="hidden">

			<form id="ticketec" class="hidden" method="GET">
				<h4>Adjunta tu ticket <span class="glyphicon glyphicon-question-sign"></span></h4>
				<input type="hidden" name="server" value="logged-user-server"></input>
				<input type="hidden" name="user" value="logged-user"></input>
				<div class="form-group">
					<input id="escanneo" type="file" name="ticket[]" accept="image/*">
<div id="errorBlock43" class="help-block"></div>
				</div>
				<input type="hidden" name="ticketenviado" value="si"></input>
		  		<button type="submit" class="btn btn-danger center-block">Enviar</button>
			</form>

			<form id="confirm" class="hidden" method="GET">

			</form>

		</div>

		<div id="detalles" class="hidden">
		<form id="palserver">
			<div id="personaje" class="dropdown">
			  <button class="btn btn-danger btn-xs dropdown-toggle" type="button" id="dropPjs" data-toggle="dropdown" aria-expanded="false">Personaje: <span class="caret"></span>
			  </button>
			  <ul class="dropdown-menu" role="menu" aria-labelledby="dropPjs">
			    <li role="presentation" class="dropdown-header">Evolucionados</li>
			    <li role="presentation"><a role="menuitem" href="#" data-raza="BM" data-pj="Bolvar"><span class="label label-default">BM</span> Bolvar</a></li>
			    <li role="presentation"><a role="menuitem" href="#" data-raza="SM" data-pj="Arthas"><span class="label label-default">SM</span> Arthas</a></li>
			    <li role="presentation"><a role="menuitem" href="#" data-raza="MG" data-pj="Deathwing"><span class="label label-default">MG</span> Deathwing</a></li>
			    <li role="presentation" class="dropdown-header">Sin evolucionar</li>
			    <li role="presentation" class="disabled"><a role="menuitem" href="#" data-raza="DL" data-pj="Illidan"><span class="label label-default">DL</span> Illidan</a></li>
			    <li role="presentation" class="disabled"><a role="menuitem" href="#" data-raza="RF" data-pj="Gurtog"><span class="label label-default">RF</span> Gurtog</a></li>
			  </ul>
			  &nbsp;&nbsp;<span id="pj"></span>
			</div>
		</form>
		</div>

	</section>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/fileinput.min.js"></script>
<script src="js/equipamiento.js"></script>
<script>
$(document).ready(function() {
	//start codigo ejemplo -temporal-
		//haciendo la lista de detalles
			$(".login").addClass("hidden");
			//para mostrar el ticketec
			//$("#ticketec").removeClass("hidden").parent().removeClass("hidden");
			//para ir directo a los detalles
			$("#detalles").removeClass("hidden");

	$(".login").find("button").on("click", function(e) {
		e.preventDefault();
		$(this).parent().fadeOut(1000, function() {
			$(this).hide();
			$("#detalles").fadeIn(500).removeClass("hidden");
		});
	});
	//end codigo ejemplo

//detalles y equipamiento
//ESTAN EN equipamiento.js


//tickets
	$('#ticketec h4').find("span").tooltip({
		placement: "right",
		html: "true",
		title: "El ticket obtenido una vez depositada la donación, debe ser escanneado y pasado a formato de imagen JPG, PNG o PDF. <br/> La imagen debe ser claramente legible."
	});
	// Disable preview and customize your own error container and messages.
$("#escanneo").fileinput({
    //showPreview: false,
	browseClass: "btn btn-danger btn-block",
	showCaption: false,
	showRemove: false,
	showUpload: false,
	previewFileType: "image",
	browseLabel: " Subir ticket escanneado",
	browseIcon: '<i class="glyphicon glyphicon-picture"></i>',
    allowedFileExtensions: ["jpg", "JPG", "jpeg", "JPEG", "png", "PNG", "pdf"],
    elErrorContainer: "#errorBlock43",
    msgInvalidFileExtension: 'El formato de "{name}" es incorrecto. Solo archivos "{extensions}" son admitidos.',
    // you can configure `msgErrorClass` and `msgInvalidFileExtension` as well
    //AJAX
        dropZoneEnabled: false,
        uploadAsync: false,
        uploadUrl: "subir.php", // your upload server url
        uploadExtraData: function() {
            return {
                server: $("input[name='server']").val(),
                user: $("input[name='user']").val()
            };
        }
});

});
</script>
</body>
</html>
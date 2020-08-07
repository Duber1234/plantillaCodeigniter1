<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Plantilla - <?= $page_title?></title>

</head>

 
<?php $this->load->view('globals/scripts');  //aqui esta el inicio del body ?>

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&display=swap" rel="stylesheet">
<!-- mi codigo va aqui -->

<?php $data=json_decode(file_get_contents("https://sigma-studios.s3-us-west-2.amazonaws.com/test/colombia.json"),true); ?>
<div align="center">
	<br>
	<img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-logo.png" width="150px">
</div>

	<h1 style="text-align: center;" ><?=$page_title?></h1>
	<div  align="center">
	<h5 style="text-align: center;font-size: 10px;width: 50%;">Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. </h5>
	</div>
<div class="contenido">
	<table align="center" width="100%">
		<tr>
			<td width="50%" align="right">
				
				<img src="https://sigma-studios.s3-us-west-2.amazonaws.com/test/sigma-image.png" style="width: 70%;margin-left: 10px;">	
				
			</td>

			<td>  
				<form method="post">
				<div class="shadow-lg p-5 mb-5 bg-white rounded" id="formulario"  align="left" style="width: 90%">
					<div class="form-group">
						<label for="contacto_state" >Departamento*</label>
						<select class="js-example-basic-single form-control" name="contacto_state" id="contacto_state" required>
							<option value="">Seleccionar</option>
							<?php foreach ($data as $key => $value) {?>
						  	<option value="<?=$key?>"><?=$key?></option>
						<?php }?>
						</select>
					</div>
					<div class="form-group">
						<label for="contacto_city">Ciudad*</label>
						<select class="js-example-basic-single form-control" name="contacto_city" id="contacto_city" required>
							<option>Seleccionar</option>
						</select>
					</div>
					<div class="form-group">
						<label for="contacto_nombre">Nombre*</label>
						<input type="text" name="contacto_nombre" id="contacto_nombre"  class="form-control" placeholder="Nombre" required>
					</div>
						<div class="form-group">
						<label for="contacto_email">Email*</label>
						<input type="email" name="contacto_email" id="contacto_email" class="form-control" placeholder="Email" required>
					</div>
					<div align="center">
					<button  type="submit" class="btn btn-primary rounded-pill" style="background-color: #e51a4c;"> &nbsp&nbspEnviar&nbsp&nbsp</button>
					</div>
				</div>
				</form>			
			</td>
		</tr>
	</table>
	
	
	

</div>
<script type="text/javascript">
	$(document).ready(function() {
    $('.js-example-basic-single').select2();
    var datos= <?= json_encode($data,JSON_UNESCAPED_UNICODE)?>;
    $("#contacto_state").on('select2:select',function(e){
    	var opciones='<option value="">Seleccionar</option>';
    	$.each(datos[e.params.data.text],function(index,value){
    			opciones+="<option value='"+value+"'>"+value+"</option>";
    	});
    	$("#contacto_city").html(opciones);
		$('#contacto_city').trigger('change');
});
});
</script>
<style type="text/css">
	h1 h5{
		font-family: 'Roboto', sans-serif;
	}
	label{
		font-weight: 1000;
	}
</style>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION['usuario'])) {
    header("Location: index.php");
       echo'<script type="text/javascript">
    alert("Debes iniciar sesion");
    window.location.href="index.php";
    </script>';

exit();
}
if (!isset($_SESSION['tiempo'])) {
    $_SESSION['tiempo']=time();
}
else if (time() - $_SESSION['tiempo'] > 1900) {
    session_destroy();
    /* Aquí redireccionas a la url especifica */
    header("Location: index.php");
    die();  
}
$_SESSION['tiempo']=time();
?>

<?php



include("configuracion.php");
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$query1 = "SELECT * FROM useros WHERE id_usuarios =".$id; 
	if($result = mysqli_query($link, $query1)){ 
		while($usuario = mysqli_fetch_assoc($result)){ 
                $correoe = $usuario['correoe'];  
                $clave = $usuario['clave'];
                $Razon_Social = $usuario['Razon_Social'];
                $represante_legal = $usuario['represante_legal'];
                $Domicilio_fiscal= $usuario['Domicilio_fiscal'];
                $escritura_publica=$usuario['escritura_publica'];
                $Detallar_material = $usuario['Detallar_material'];
                $inicio_funcionamiento = $usuario['inicio_funcionamiento'];
                $material_requerido = $usuario['material_requerido'];
                $Descuentos_otorgara = $usuario['Descuentos_otorgara'];
                $corte_venta = $usuario['corte_venta'];
                $gastos_envio = $usuario['gastos_envio'];
                $formas_pago = $usuario['formas_pago'];
                $entrega_listas = $usuario['entrega_listas'];
                $fecha_firma = $usuario['fecha_firma'];
                $rfc = $usuario['rfc'];
                $nombre_colegio = $usuario['nombre_colegio'];
                $firma_testigo = $usuario['firma_testigo'];
                $telefono = $usuario['telefono'];
               
 


		}
	}

}

if(isset($_POST['sw']) == 1){ 

	$query2 = "UPDATE useros SET correoe='".$_POST['correoe']."',
    clave='".$_POST['clave']."',Razon_Social='".$_POST['Razon_Social']."' ,
    represante_legal='".$_POST['represante_legal']."',Domicilio_fiscal='".$_POST['Domicilio_fiscal']."' ,
    escritura_publica='".$_POST['escritura_publica']."',Detallar_material='".$_POST['Detallar_material']."' ,
    inicio_funcionamiento='".$_POST['inicio_funcionamiento']."',material_requerido='".$_POST['material_requerido']."' ,
    material_requerido='".$_POST['material_requerido']."',Descuentos_otorgara='".$_POST['Descuentos_otorgara']."' ,
    corte_venta='".$_POST['corte_venta']."',gastos_envio='".$_POST['gastos_envio']."' ,
    formas_pago='".$_POST['formas_pago']."',entrega_listas='".$_POST['entrega_listas']."' ,
    fecha_firma='".$_POST['fecha_firma']."',rfc='".$_POST['rfc']."' ,
    nombre_colegio='".$_POST['nombre_colegio']."',firma_testigo='".$_POST['firma_testigo']."' ,
    telefono='".$_POST['telefono']."'  
    
    WHERE id_usuarios=".$_POST['id'];
	if(mysqli_query($link, $query2)){ 
        header("Location: admin.php");
      
	}else{ 
		echo "Ocurrio un error al intentar actualizar"; 
        var_dump($query2);
	}
}



mysqli_close($link);
?>




<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>





<style type="text/css">

</style>
</head>

<body class="no-skin">







</ul>

</div>






<body>
	<div style="background-color:transparent  ;">
		<h3>Editar Orden de servicio</h3> 			 <div class="pull-right">
                <button onclick="goBack()" class="btn btn-primary">Atras</button>

            </div>
<script>
function goBack() {
  window.history.back();
}
</script>
		<center><form action="upd1.php" method="post" >
        <div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Razon Social del colegio
</label><br>
<input  type="text" class="form-control" placeholder="" name="Razon_Social" value="<?php if(isset($Razon_Social)) echo $Razon_Social; ?>" required=""/>
</div><br>

<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Nombre completo del represante legal del colegio
</label><br>
<input  type="text" class="form-control" placeholder="" name="represante_legal" value="<?php if(isset($represante_legal)) echo $represante_legal; ?>" required=""/>
</div><br>



<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Domicilio fiscal completo del colegio.</label><br>
<textarea  type="text" class="form-control" cols="30" rows="6" value="<?php if(isset($Domicilio_fiscal)) echo $Domicilio_fiscal; ?>" placeholder="ejmplo: numero 11 de fecha 01 de enero de 2002, otorgada ante la fe de la Lic. Jose Perez Perez, Notario Público, número 2 (dos) del Distrito Federal (ahora Ciudad de México) y registrada ante al Registro Público de la Personas Morales bajo el folio número 151515." name="Domicilio_fiscal" required=""><?php if(isset($Domicilio_fiscal)) echo $Domicilio_fiscal; ?></textarea>
</div><br>



<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Numero de escritura publica y fecha, numero de notario publico y nombre</label><br>
<input  type="text" class="form-control" value="<?php if(isset($escritura_publica)) echo $escritura_publica; ?>" placeholder="ejemplo:número 11, de fecha 11 de Enero de 2020, otorgada ante la fe del Notario Público número 2 (dos) de la Ciudad de México, Licenciada Jose Perez Perez." name="escritura_publica" required=""/>
</div><br>

<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
RFC de la razon social del colegio</label><br>
<input  type="text" class="form-control"value="<?php if(isset($rfc)) echo $rfc; ?>" name="rfc" required=""/> 
</div><br>


<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detallar el material a comercializar.</label><br>
<textarea  type="text" class="form-control"  ols="30" rows="6" placeholder="ejemplo:Libros de texto en inglés.
Libros de texto en francés.
Libros de texto en otros idiomas." name="Detallar_material" required=""  value="<?php if(isset($Detallar_material)) echo $Detallar_material; ?>"><?php if(isset($Detallar_material)) echo $Detallar_material; ?></textarea>
</div><br>
<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Fecha de inicio de funcionamiento asi como la fecha propuesta de cierre del carro de compras.</label><br>
<input  type="text" class="form-control" value="<?php if(isset($inicio_funcionamiento)) echo $inicio_funcionamiento; ?>" laceholder="ejemplo: día 30 del mes de enero de 2021 y sucesivamente, la fecha de término será el día 23 del mes de abril de 2021." name="inicio_funcionamiento" required=""/>
</div><br>
<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detalle del material requerido.</label><br>
<input  type="text" class="form-control" value="<?php if(isset($material_requerido)) echo $material_requerido; ?>" laceholder="ejemplo, frances otros idiomas." name="material_requerido" required=""/>
</div><br>
<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Descuentos que se otorgaran al colegio por material solicitado.</label><br>
<input  type="text" class="form-control"value="<?php if(isset($Descuentos_otorgara)) echo $Descuentos_otorgara; ?>" placeholder="ejemplo: Ingles conforme a la tabla de descuento, Material en francés.- Conforme a la tabla de descuentos.
Material en otros idiomas.- Conforme a la tabla de descuentos." name="Descuentos_otorgara" required=""/>
</div><br>


<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Se hará un corte de venta una vez finalizado el término de la venta ,<br> asimismo el monto del descuento que le corresponde a EL COLEGIO, así como la fecha en que deberá de ser pagado.</label><br>
<input  type="text" class="form-control"value="<?php if(isset($corte_venta)) echo $corte_venta; ?>" placeholder="" name="corte_venta" required=""/>
</div><br>

<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detalle del costo de los gastos de envio.</label><br>
<input  type="text" class="form-control"value="<?php if(isset($gastos_envio)) echo $gastos_envio; ?>" placeholder="" name="gastos_envio" required=""/>
<br>


<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detalle de las formas de pago.</label><br>
<input  type="text" class="form-control"value="<?php if(isset($formas_pago)) echo $formas_pago; ?>" cols="30" rows="6" placeholder="Tarjeta de Credito, Pay Pal,  Deposito bancario  transferencia electronica." name="formas_pago" required="" />
<br>


<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detallar la fecha de entrega de listas de libros.</label><br>
<input  type="text" class="form-control"value="<?php if(isset($entrega_listas)) echo $entrega_listas; ?>" placeholder="" name="entrega_listas" required=""/>
<br>

<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detallar la fecha de firma del convenio.</label><br>
<input  type="text" class="form-control" placeholder="" name="fecha_firma" value="<?php if(isset($fecha_firma)) echo $fecha_firma; ?>" required=""/>
<br>


<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Nombre completo del colegio.</label><br>
<input  type="text" class="form-control" value="<?php if(isset($nombre_colegio)) echo $nombre_colegio; ?>" placeholder="" name="nombre_colegio" required=""/>
<br>







<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Nombre completo y firma del testigo del colegio.</label><br>
<input  type="text" class="form-control" value="<?php if(isset($firma_testigo)) echo $firma_testigo; ?>" name="firma_testigo" required=""/>
<br>







<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Correo Electronico
</label><br>
<input  type="email" value="<?php if(isset($correoe)) echo $correoe; ?>"  placeholder="" name="correoe" required=""/>
</div>
<br>


<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Telefono</label><br>
<input  type="text" value="<?php if(isset($telefono)) echo $telefono; ?>" placeholder="" name="telefono" required=""/>
</div>
<br>


<div class="icon1">
<i class="fa fa-lock" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Password
</label><br>
<input type="password"  value="<?php if(isset($clave)) echo $clave; ?>" placeholder="Minimo de 8 caracteres" name="clave" required=""/>
</div>




<br><br>
			<input class="btn btn-success" type="submit" name="actualizar" value="Actualizar" /><br /><br />
			<input type="hidden" name="id" value="<?php if(isset($id)) echo $id; ?>" />
			<input type="hidden" name="sw" value="1" />
            </form>

			
    </form>
	</div>



</body>
</html>
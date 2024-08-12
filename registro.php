<?php
date_default_timezone_set('America/Mexico_City');


?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



<!-- Registro -->


          <h4 class="modal-title">Crea una cuenta</h4>

<form action="conexion.php" method="post">
<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Razon Social del colegio
</label><br>
<input  type="text" class="form-control" placeholder="" name="Razon_Social" required=""/>
</div><br>

<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Nombre completo del represante legal del colegio
</label><br>
<input  type="text" class="form-control" placeholder="" name="represante_legal" required=""/>
</div><br>



<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Domicilio fiscal completo del colegio.</label><br>
<textarea  type="text" class="form-control" cols="30" rows="6" placeholder="ejmplo: numero 11 de fecha 01 de enero de 2002, otorgada ante la fe de la Lic. Jose Perez Perez, Notario Público, número 2 (dos) del Distrito Federal (ahora Ciudad de México) y registrada ante al Registro Público de la Personas Morales bajo el folio número 151515." name="Domicilio_fiscal" required=""></textarea>
</div><br>



<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Numero de escritura publica y fecha, numero de notario publico y nombre</label><br>
<input  type="text" class="form-control" placeholder="ejemplo:número 11, de fecha 11 de Enero de 2020, otorgada ante la fe del Notario Público número 2 (dos) de la Ciudad de México, Licenciada Jose Perez Perez." name="escritura_publica" required=""/>
</div><br>

<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
RFC de la razon social del colegio</label><br>
<input  type="text" class="form-control" name="rfc" required=""/> 
</div><br>


<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detallar el material a comercializar.</label><br>
<textarea  type="text" class="form-control"  cols="30" rows="6" placeholder="ejemplo:Libros de texto en inglés.
Libros de texto en francés.
Libros de texto en otros idiomas." name="Detallar_material" required=""></textarea>
</div><br>
<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Fecha de inicio de funcionamiento asi como la fecha propuesta de cierre del carro de compras.</label><br>
<input  type="text" class="form-control" placeholder="ejemplo: día 30 del mes de enero de 2021 y sucesivamente, la fecha de término será el día 23 del mes de abril de 2021." name="inicio_funcionamiento" required=""/>
</div><br>
<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detalle del material requerido.</label><br>
<input  type="text" class="form-control" placeholder="ejemplo, frances otros idiomas." name="material_requerido" required=""/>
</div><br>
<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Descuentos que se otorgaran al colegio por material solicitado.</label><br>
<input  type="text" class="form-control" placeholder="ejemplo: Ingles conforme a la tabla de descuento, Material en francés.- Conforme a la tabla de descuentos.
Material en otros idiomas.- Conforme a la tabla de descuentos." name="Descuentos_otorgara" required=""/>
</div><br>


<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Se hará un corte de venta una vez finalizado el término de la venta ,<br> asimismo el monto del descuento que le corresponde a EL COLEGIO, así como la fecha en que deberá de ser pagado.</label><br>
<input  type="text" class="form-control" placeholder="" name="corte_venta" required=""/>
</div><br>

<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detalle del costo de los gastos de envio.</label><br>
<input  type="text" class="form-control" placeholder="" name="gastos_envio" required=""/>
<br>


<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detalle de las formas de pago.</label><br>
<input  type="text" class="form-control" cols="30" rows="6" placeholder="Tarjeta de Credito, Pay Pal,  Deposito bancario  transferencia electronica." name="formas_pago" required="" />
<br>


<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detallar la fecha de entrega de listas de libros.</label><br>
<input  type="text" class="form-control" placeholder="" name="entrega_listas" required=""/>
<br>

<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Detallar la fecha de firma del convenio.</label><br>
<input  type="text" class="form-control" placeholder="" name="fecha_firma" required=""/>
<br>


<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Nombre completo del colegio.</label><br>
<input  type="text" class="form-control" placeholder="" name="nombre_colegio" required=""/>
<br>







<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Nombre completo y firma del testigo del colegio.</label><br>
<input  type="text" class="form-control" placeholder="" name="firma_testigo" required=""/>
<br>







Crea un usuario y contraseña para entrar
<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Usuario
</label><br>
<input  type="text"  placeholder="" name="usuario" required=""/>
</div>
<br>
<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Correo Electronico
</label><br>
<input  type="email" " placeholder="" name="correoe" required=""/>
</div>
<br>


<div class="icon1">
<i class="fa fa-user" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Telefono</label><br>
<input  type="email" " placeholder="" name="telefono" required=""/>
</div>
<br>


<div class="icon1">
<i class="fa fa-lock" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Password
</label><br>
<input type="password"   placeholder="Minimo de 8 caracteres" name="Password" required=""/>
</div>
<br>
<div class="icon1">
<i class="fa fa-lock" aria-hidden="true"></i>
<i class="fas fa-user"></i>
Confirma Password
</label><br>
<input type="password"   placeholder="" name="repassword" required=""/>
</div>

<input type="hidden" class="form-control" placeholder="" name="levely" value="3" required=""/>


<br>
<div class="bottom">

<center>
<input type="submit"  name="enviar" class="btn btn-primary" value="Crear Datos" /><br><br>


</form>		
<img src="logo.png" class="contine" width="120px">



 
  
  <!-- fin Registro -->





<script type="text/javascript">
if('ontouchstart' in document.documentElement) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
</script>
<script src="assets/js/bootstrap.min.js"></script>

<!-- page specific plugin scripts -->

<!--[if lte IE 8]>
<script src="assets/js/excanvas.min.js"></script>
<![endif]-->
<script src="assets/js/jquery-ui.custom.min.js"></script>
<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.sparkline.index.min.js"></script>
<script src="assets/js/jquery.flot.min.js"></script>
<script src="assets/js/jquery.flot.pie.min.js"></script>
<script src="assets/js/jquery.flot.resize.min.js"></script>



<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>

<!-- inline scripts related to this page -->


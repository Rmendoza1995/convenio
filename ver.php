<?php
session_start();

if (!isset($_SESSION['usuario'])) {
header("Location: index.php");
echo'<script type="text/javascript">
alert("Debes Iniciar Sesion");
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
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<?php 
include("configuracion.php");

if(isset($_SESSION['usuario'])){
$usuario =$_SESSION['usuario'];
$query1 = "SELECT * FROM useros WHERE usuario='".$_SESSION['usuario']."'"; 
if($result = mysqli_query($link, $query1)){ 
while($usuariow = mysqli_fetch_assoc($result)){ 
$represante_legal = $usuariow['represante_legal']; 
$Razon_Social = $usuariow['Razon_Social'];
$Domicilio_fiscal = $usuariow['Domicilio_fiscal'];
$escritura_publica = $usuariow['escritura_publica'];
$rfc = $usuariow['rfc'];
$material_requerido = $usuariow['material_requerido'];
$inicio_funcionamiento = $usuariow['inicio_funcionamiento'];
$Descuentos_otorgara = $usuariow['Descuentos_otorgara'];
$corte_venta = $usuariow['corte_venta'];
$gastos_envio = $usuariow['gastos_envio'];
$formas_pago = $usuariow['formas_pago'];
$entrega_listas = $usuariow['entrega_listas'];
$nombre_colegio = $usuariow['nombre_colegio'];
$firma_testigo = $usuariow['firma_testigo'];
$Detallar_material = $usuariow['Detallar_material'];
$fecha_firma = $usuariow['fecha_firma'];
$telefono = $usuariow['telefono'];


}
}

}


?>
<script>
function goBack() {
window.history.back();
}
</script>
<a href="logout.php"class="btn btn-primary">Cerrar Sesion</a>

<?php 
$query22 = "SELECT * FROM useros WHERE usuario='".$_SESSION['usuario']."' ";

if($result = mysqli_query($link, $query22)):  
?>
<?php 
//la variable $user contiene el contenido de $result en un array asociativo
while($usuarior = mysqli_fetch_assoc($result)): 
?>

<a href="upd1.php?id=<?php echo $usuarior['id_usuarios'] ?>"   class='btn btn-success'>Editar</a> 


<?php endwhile; ?>
<?php mysqli_free_result($result); ?>
<?php endif; ?>

<center>
<h2 >CONVENIO DE VENTA EN LÍNEA</h2></center>

<div style="text-align: justify; padding:70px;">
<img src="logo.png" width="150px" >
<br><br>Convenio de Venta en línea que celebran por una parte <b>EDITORIAL DELTI, S. A. de C. V.</b>, que en lo sucesivo se denominará como <b>“EDITORIAL DELTI”</b>, representada en este acto por Alba Rosa Vargas Ovalle, en su carácter de Representante Legal, y por la otra
<?php if(isset($Razon_Social)) echo $Razon_Social; ?>          


en lo sucesivo se denominará como <B>“EL COLEGIO”</b>, representado en este acto por <?php if(isset($represante_legal)) echo $represante_legal; ?>,en su carácter de Representante Legal y a quienes en su conjunto se les denominará las “PARTES”, al tenor de las siguientes:<br>          
<br><br> <CENTER><b>D E C L A R A C I O N E S</b></CENTER>
<br><br>I. Declara EL COLEGIO por conducto de su Representante Legal: <br> 
a)    Que es una Asociación Civil constituida conforme a la legislación mexicana, mediante escritura pública número.<br><?php if(isset($escritura_publica)) echo $escritura_publica; ?>  
<br><br>c)    Que tiene por fines en su objeto social todo lo relacionado con la educación.
<br><br>b) Que para efectos de este instrumento señala como su domicilio el ubicado en: <?php if(isset($Domicilio_fiscal)) echo $Domicilio_fiscal; ?>
<br><br>d)    Que su Representante Legal es       <?php if(isset($represante_legal)) echo $represante_legal; ?>, y que cuenta con todas las facultades legales, mismas que a la fecha no le han sido modificadas ni revocadas, por lo que no tiene impedimento para celebrar el presente convenio, según consta en la Escritura Pública
<br><?php if(isset($escritura_publica)) echo $escritura_publica; ?>    
<br><br>
e)Que el Registro Federal de Contribuyentes de su representada, expedido por la Secretaría de Hacienda y Crédito Público es: <?php if(isset($rfc)) echo $rfc; ?><br>
f)Que cuenta con la disponibilidad presupuestal suficiente para cumplir con los compromisos de pago derivados de este convenio.<br>
g)<b>EL COLEGIO</b> manifiesta que cuenta con elementos suficientes para cumplir con las obligaciones que deriven de sus relaciones laborales con los trabajadores que utilice en la ejecución de los servicios y de que no ejecuta obra o servicios de forma exclusiva para <b>EDITORIAL DELTI</b>, por lo que se reconoce como único patrón de los trabajadores en términos del Artículo 13 de la Ley Federal del Trabajo.<br> <br>
II. Declara EDITORIAL DELTI por conducto de su Representante Legal: 
 <br>
<br> a) Que es una Sociedad Anónima de Capital Variable constituida conforme a la legislación mexicana, mediante escritura pública número 80,891 de fecha 06 de septiembre de 1989, otorgada ante la fe del Lic. J. Felipe Carrasco Zanini Rincón, Notario Público, número 03 (tres) del Distrito Federal (hoy Ciudad de México) y registrada ante el Registro Público de la Propiedad y del Comercio bajo el folio mercantil número 130,346.
<br><br>b) Que para efectos de este instrumento señala como su domicilio el ubicado en Avenida Prolongación San Antonio, número 170, Piso 1, Colonia Carola, Alcaldía Álvaro Obregón, C. P. 01180, Ciudad de México. 
<br><br> c)Que tiene por fines en su objeto social entre otros la compra y venta de libros de texto en inglés y otros idiomas, así como todo lo relacionado con la educación.
<br><br>d) Que su Representante Legal es Alba Rosa Vargas Ovalle, y que cuenta con todas las facultades legales, mismas que a la fecha no le han sido modificadas ni revocadas, por lo que no tiene impedimento para celebrar el presente convenio, según consta en la Escritura Pública número 52, 393, de fecha 16 de enero del 2012, otorgada ante la fe del Notario Público número 118 (ciento dieciocho) del Distrito Federal (ahora Ciudad de México), Licenciado Ramón Aguilera Soto.
<br><br> e)Que el Registro Federal de Contribuyentes de su representada, expedido por la Secretaría de Hacienda y Crédito Público es: <b>EDE-890908-640.</b>
<br><br> f)Que tiene capacidad jurídica para contratar y reúne las condiciones técnicas y económicas para obligarse al cumplimiento de todas y cada una de las cláusulas que se establezcan en este convenio. 
<br><br> g)EDITORIAL DELTI manifiesta que cuenta con elementos suficientes para cumplir con las obligaciones que deriven de sus relaciones laborales con los trabajadores que utilice en la ejecución de los servicios y de que no ejecuta obra o servicios de forma exclusiva para EL COLEGIO, por lo que se reconoce como único patrón de los trabajadores en términos del Artículo 13 de la Ley Federal del Trabajo. 
<br><br>   III. Declaran las PARTES:
 
<br> a.Que desean celebrar el presente convenio para asumir responsabilidades, derechos y obligaciones que en el mismo se establecen ya que cuentan con la capacidad legal y financiera suficiente.
<br> b.Que desean celebrar el presente convenio para efectuar una venta en línea a EL COLEGIO con libros propiedad de EDITORIAL DELTI bajo los términos y condiciones que más adelante se establecerán.
<br> c.  Que EL COLEGIO se obliga a proporcionar a EDITORIAL DELTI la información necesaria para la elaboración del carro de compra para su venta en línea y envío. 
De acuerdo con las declaraciones anteriormente hechas, las PARTES se reconocen mutua y recíprocamente la personalidad para suscribir el presente convenio, no mediando entre ellos incapacidad legal o vicios del consentimiento alguno. 
Ambas PARTES han acordado celebrar el presente convenio, al tenor de las siguientes:
<center><b>C L Á U S U L A S</b></center>
PRIMERA. OBJETO.- El presente convenio tiene por objeto establecer los términos y condiciones bajo los cuales EDITORIAL DELTI realizará la comercialización, por medio de venta en línea para la comunidad EL COLEGIO, del material que se describe a continuación: 
<br><?php if(isset($Detallar_material)) echo $Detallar_material; ?><br>
El material se ofertará a la comunidad de <b>EL COLEGIO</b> por medio de un carro de compras para el ciclo escolar correspondiente. <br>
<center><b>Condiciones del carro de compras</b></center>
1. El carro de compras se hospedará en la siguiente dirección electrónica:<a href="https://e-commerce.delti.com.mx"> https://e-commerce.delti.com.mx.</a>
2. La fecha de inicio de funcionamiento de dicha plataforma web para el año 2021 será a partir del día <?php if(isset($entrega_listas)) echo $entrega_listas; ?><br>

Una vez vencido el término del carro de compras, EDITORIAL DELTI no podrá garantizar<br> disponibilidad del material; de ser el caso, EL CLIENTE podrá solicitar nuevas compras de forma personal,<br> las cuales estarán sujetas a disponibilidad. Entiéndase como CLIENTE, a los padres de familia de EL COLEGIO.
3. Como apoyo adicional, EDITORIAL DELTI proporcionará un Ejecutivo de Atención, con un horario sujeto a cambios previo acuerdo por LAS PARTES de lunes a viernes de 9:00 a 14:00 y de 15:00 a 18:30 horas, y sábados de 10:00 a 14:00 horas, para dar atención a través del teléfono y correo electrónico que serán indicados en la Circular Informativa y la Guía Práctica para padres de familia. 
SEGUNDA. PRECIOS.- Los precios que manejará EDITORIAL DELTI en el carro de compras serán precios de lista, mismos que serán modificados anualmente. 
TERCERA. DESCUENTOS.- Por la venta de libros de texto en inglés, <?php if(isset($material_requerido)) echo $material_requerido; ?> que adquiera la comunidad de EL COLEGIO a través del carro de compras, EDITORIAL DELTI entregará a EL COLEGIO un descuento bajo el siguiente esquema:
<br><p style="border: black 3px solid;">
<?php if(isset($Descuentos_otorgara)) echo $Descuentos_otorgara; ?><br>
El descuento que le corresponde a EL COLEGIO conforme a este esquema, será pagado como se indica a continuación:<?php if(isset($corte_venta)) echo $corte_venta; ?>
<br><br>
El pago se realizará únicamente por transferencia bancaria al número de cuenta relacionado<br> directamente a <b>EL COLEGIO</b>, conforme a su razón social tal como figura en el presente instrumento,<br> por lo tanto las PARTES acuerdan que por ningún motivo <b>EDITORIAL DELTI</b> <br>podrá realizar la transferencia del descuento otorgado a un número de cuenta ajeno a EL COLEGIO, ni se podrá realizar el pago en efectivo.

</p>
<br>
Se adjunta lista de Editoriales y Descuentos <b>ANEXO I.</b><br>
<b>EDITORIAL DELTI</b> emitirá un reporte de la venta respectiva. El reporte deberá de ser revisado y autorizado por ambas <b>PARTES</b>,<br> para posteriormente servir como soporte para el pago correspondiente.<br> Ninguna de las <b>PARTES</b> será responsable ni existirá penalización alguna si hubiere un incidente en el reporte. De ser el caso, cualquiera de las <b>PARTES</b> dará aviso inmediato<br> para llevar a cabo las adecuaciones y/o correcciones pertinentes. 
<br>
EL COLEGIO se compromete a entregar a EDITORIAL DELTI un CFDI por el pago que reciba por el monto<br> que le corresponde del descuento otorgado, con el IVA de forma expresa y por separado<br> (excepto a lo señalado en el artículo 15, fracción VII de la Ley del IVA), dicho CFDI<br> deberá emitirse con clave de producto 80141600 según el catalogo del SAT y concepto del producto “Actividades de ventas y promoción de negocios”<br> y deberá de ser entregado 5 (cinco) días hábiles antes de recibir el pago para la revisión del mismo,<br> no se podrá emitir ningún pago si EL COLEGIO no ha emitido el CFDI,<br> si el CFDI no esta conforme a las leyes fiscales vigentes o en su caso los datos del CFDI son incorrectos, sin que esto signifique un atraso en el pago.
<br><br>Asimismo, las PARTES acuerdan que sin excepción alguna el CFDI deberá ser emitido directamente por EL COLEGIO, conforme a la razón social dada de alta ante el SAT y tal como figura en el presente instrumento, esto con la intención que el CFDI sea emitido por la misma persona moral a la que se le realizará la transferencia por el descuento otorgado. 
<br><br> <b>CUARTA. ENTREGA Y/O ENVÍOS.-</b> La entrega del material se podrá realizar directamente en la librería de EDITORIAL DELTI ubicada en San Antonio o por servicio de paquetería.
<br>Para la entrega del material por servicio de paquetería se deberá de realizar a solicitud de los padres de familia por medio del carro de compras, en dicha plataforma se deberá de realizar el pago del costo del envío e indicar la dirección donde<br> el padre de familia requiere que llegue el material. El precio del costo por envío correspondiente al año 2021
<br><br>
El tiempo de entrega del material a EL CLIENTE será de 7 a 9 días hábiles. <b>EDITORIAL DELTI</b><br> es susceptible de modificar la fecha de entrega de la mercancía sin responsabilidad alguna, ya que el material a entregar corresponde<br> a una empresa de mensajería externa a <b>EDITORIAL DELTI.</b> En caso de retraso o posible retraso en la entrega, <br>se informará inmediatamente a EL COLEGIO y al EL CLIENTE.
<br>Para cualquier duda o reclamación, EL CLIENTE podrá proceder como se indica a continuación:
<br> 1. Los padres de familia podrán enviar sus dudas o reclamos directamente a su Ejecutivo de Atención, a la dirección de correo electrónico que para tal efecto se les indique en la guía para padres de familia,<br> en caso que exista un error en los datos señalados para la entrega del material o en los datos para el pago atribuible al padre de familia, <b>EDITORIAL DELTI</b> no será responsable.

<br>QUINTA. PAGO.- EDITORIAL DELTI a través del carro de compras aceptará las siguientes formas de pago: <br>
<?php if(isset($formas_pago)) echo $formas_pago; ?><br>


Las formas de pago estipuladas en la presente cláusula podrán modificarse por acuerdo previo por ambas PARTES.<br>
                                                                       
<b>SEXTA. VIGENCIA.-</b>El presente convenio tiene vigencia obligatoria para las PARTES a partir (vigencia) del 14 de enero de 2021 al 23 de abril de 2022, siendo obligatorio para las partes su cumplimiento al 30 de noviembre de 2021.<br>No obstante, los precios en el carro de compras variarán anualmente. EDITORIAL DELTI dará aviso a EL COLEGIO de los nuevos precios correspondientes al ciclo escolar en cuestión. 
<br><br>
Ninguna de las PARTES será responsable por cualquier retraso o incumplimiento de este convenio que resulte de caso fortuito o fuerza mayor, en la inteligencia de que, una vez superados estos eventos, se reanudará la prestación de los servicios objeto del presente instrumento contractual, si así lo manifiestan ambas partes.
SÉPTIMA. En caso que EL COLEGIO incumpliera con la vigencia establecida en el presente convenio y/o con el objeto del mismo, deberá de indemnizar a EDITORIAL DELTI con una pena convencional del 10% (diez por ciento) del valor del pedido agregado para cubrir todos los daños y perjuicios que este ocasionara a EDITORIAL DELTI. Adicionalmente, EL COLEGIO se obliga a dar aviso de la terminación con 30 (treinta)días hábiles de anticipación; en caso contrario, se agregará un 05% (cinco por ciento) a la pena convencional.
<br>
</b>OCTAVA.</b> Las PARTES acuerdan que a más tardar el <?php if(isset($entrega_listas)) echo $entrega_listas; ?>,<br><br>
EL COLEGIO entregará a EDITORIAL DELTI el primer reporte con las listas de libros de texto que ofertará a la comunidad estudiantil. Así mismo deberá entregar un reporte con la matrícula de alumnos estimada, dividida por grados. La información anterior se generará de tiempo en tiempo según se realicen los pedidos, estos reportes se integrarán al presente instrumento legal como anexos que sucesivamente serán ANEXO II, ANEXO III, ANEXO IV, etcétera, con la finalidad de que no exista exceso ni falta de material.
En caso de que los pedidos efectivos del carro de compras superen los estimados en los reportes emitidos por EL COLEGIO, EDITORIAL DELTI es susceptible de modificar la fecha de entrega de la mercancía no reportada, sin responsabilidad alguna, ya que el material está sujeto a disponibilidad, en cuyo caso informará a EL COLEGIO y EL CLIENTE del posible retraso en la entrega.
NOVENA. Ambas PARTES acuerdan que para mayor certeza jurídica las listas definitivas, tanto de los libros como de útiles escolares y material institucional, serán firmadas y rubricadas por sus Representantes y/o Apoderados Legales, o por los funcionarios designados por cada una de las PARTES para tal efecto. 
DÉCIMA. Las PARTES acuerdan que en el caso de que algún producto cause Impuesto al Valor Agregado (I.V.A.), se indicará en la lista de precios y/o descripción del artículo, hecho que los padres de familia podrán verificar al ingresar al carro de compras y podrán verlo desglosado en su CFDI. 
DÉCIMA PRIMERA. Una vez programada la plataforma del carro de compras diseñada para EL COLEGIO con el contenido completo de los artículos, las PARTES acuerdan realizar la verificación de la misma, firmando de conformidad a través de sus Representantes y/o Apoderados Legales o de la persona que estos designen para que pueda abrirse la venta a EL CLIENTE (Padres de familia). Una vez firmado de conformidad, la información no sufrirá cambio alguno, acordando las PARTES que todas las secciones que conforman el carro de compras deberá liberarse conforme a las fechas establecidas en el punto 2 de la cláusula primera de este instrumento. 
Una vez que ambas PARTES hayan verificado el diseño y contenido completo de los artículos para la venta a EL CLIENTE, no será responsabilidad de ninguna de las PARTES la falta de algún contenido. En caso que así sucediera, se deberá actualizar la plataforma web, sujetándose a los tiempos y procesos que conllevan. 
DÉCIMA SEGUNDA. CONTROL DEL PROYECTO.- Las PARTES acuerdan que se llevará a cabo un control de actividades y compromisos a través de un documento denominado Diagrama de Avances ANEXO a este instrumento , que será revisado y firmado por sus Representantes y/o Apoderados Legales o por las personas que estos designen a la firma del presente convenio. 
DÉCIMA TERCERA. CONFIDENCIALIDAD.- El contenido del presente convenio, junto con toda la información que conforme al convenio reciban las PARTES por cualquier medio, así como los documentos, archivos y archivos electrónicos que se generen a partir de dicha información, tendrán el carácter de confidencial y su manejo será restringido para las PARTES o sus respectivos representantes, asesores legales y/o contables, por lo que las PARTES reconocen y aceptan sin reserva ni limitación alguna, que la información y documentación que reciban, obtengan, elaboren, produzcan o preparen en el transcurso, duración o vigencia de sus relaciones comerciales por virtud de este convenio, constituyen y constituirán información confidencial para los efectos de la presente cláusula y en consecuencia, son y serán de la exclusiva propiedad de cada una de ellas, a excepción de aquella producida o elaborada por los clientes y proveedores de cada una de las PARTES, por lo que dicha información confidencial será propiedad exclusiva de dichos clientes y proveedores, respecto de la cual las PARTES se obligan igualmente a abstenerse de realizar cualquier clase de actos que vulneren, violen o siquiera pongan en riesgo dicha información confidencial, guardando con idéntica diligencia y mesura las mismas consideraciones y obligaciones que tienen entre sí.
En caso de incumplimiento a las obligaciones pactadas en esta cláusula la parte afectada tendrá derecho a demandar los daños y perjuicios que le ocasione, independientemente del derecho que tiene de ejercitar las acciones legales que le correspondan de acuerdo con lo establecido en la ley de propiedad industrial, código penal federal y demás legislación aplicable.
DÉCIMA CUARTA. Las PARTES acuerdan que para las ventas posteriores al inicio del ciclo escolar, en caso de presentar artículos agotados en sistema, el CLIENTE confirmará existencias y tiempos de entrega directamente con su Ejecutivo de Atención al correo proporcionado por EDITORIAL DELTI. 
DÉCIMA QUINTA. El presente convenio sólo podrá ser modificado a través de un acuerdo por escrito y firmado por quienes legalmente representen a las PARTES.
DÉCIMA SEXTA. Las PARTES señalan como sus domicilios para todos los efectos legales y contractuales los mencionados en el apartado de Declaraciones del presente instrumento. 
DÉCIMA SÉPTIMA. Para cualquier controversia sobre el presente convenio, las PARTES deciden someterse a la competencia de los tribunales de la Ciudad de México, renunciando a cualquier fuero que por razón de domicilio pudiera corresponderles. 
Las PARTES firman por duplicado el presente Convenio en la Ciudad de México siendo el día <?php if(isset($fecha_firma)) echo $fecha_firma; ?>, quedando en poder de EL COLEGIO un original, y otro en poder de EDITORIAL DELTI.
<br>
<center><b>POR EDITORIAL DELTI, S. A. de C. V.</b></center>



<center>
<table border="1" cellpadding="20" WIDTH="500">
 
  <tr>
    <td width="50%" style="text-align: center;"><b>Alba Rosa Vargas Ovalle </b>
<br>Representante Legal</td>
   
<td width="50%" style="text-align: center;"><b>Felipe Gerardo Ballesteros del Olmo</b>
    <br>Director de Ventas</td>
  </tr>
  <tr>
  <td colspan="2" style="text-align: center;">Representante de Ventas</td>
  </tr>
  <tr>  <td colspan="2" style="text-align: center;">
  <b>Domicilio</b><br>
Avenida Prolongación San Antonio 170, Piso 1 Colonia Carola, Alcaldía Álvaro Obregón, 
C. P. 01180, Ciudad de México.<br>
<b>Teléfono:</b> (55) 36 86 20 00</td>
   
  </tr>
</table><br>
Nombre del colegio:<?php if(isset($nombre_colegio)) echo $nombre_colegio; ?><br><br>


<center>
<table border="1" cellpadding="20" WIDTH="500">
 
  <tr>
    <td width="50%" style="text-align: center;"><b><?php if(isset($represante_legal)) echo $represante_legal; ?> </b>
<br>Representante Legal</td>
   
<td width="50%" style="text-align: center;"><b><?php if(isset($firma_testigo)) echo $firma_testigo; ?></b>
    <br>Testigo</td>
  </tr>
  <tr>
  <td colspan="2" style="text-align: center;">Representante de Ventas</td>
  </tr>
  <tr>  <td colspan="2" style="text-align: center;">
  <b>Domicilio</b><br>
  <?php if(isset($Domicilio_fiscal)) echo $Domicilio_fiscal; ?><br>
<b>Teléfono:</b><?php if(isset($telefono)) echo $telefono; ?> </td>
   
  </tr>
</table



</div>


<script src="assets/js/jquery.ui.touch-punch.min.js"></script>
<script src="assets/js/jquery.easypiechart.min.js"></script>
<script src="assets/js/jquery.sparkline.index.min.js"></script>
<script src="assets/js/jquery.flot.min.js"></script>
<script src="assets/js/jquery.flot.pie.min.js"></script>
<script src="assets/js/jquery.flot.resize.min.js"></script>



<!-- ace scripts -->
<script src="assets/js/ace-elements.min.js"></script>
<script src="assets/js/ace.min.js"></script>


</body>
</html>
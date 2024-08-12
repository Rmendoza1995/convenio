<?php


if(isset($_POST['enviar'])) {
include ("configuracion.php");
$conexion = new mysqli ($server,$user,$pass,$bd);
if (!$conexion) {
$msg="Conexión imposible. Revise las credenciales de conexión";  
} else {
$usuario=!empty($_POST['usuario']) ? $_POST['usuario'] : NULL;
$Password=!empty($_POST['Password']) ? $_POST['Password'] : NULL;
$correoe=!empty($_POST['correoe']) ? $_POST['correoe'] : NULL;


$repassword=!empty($_POST['repassword']) ? $_POST['repassword'] : NULL;
$levely=!empty($_POST['levely']) ? $_POST['levely'] : NULL;







$represante_legal=!empty($_POST['represante_legal']) ? $_POST['represante_legal'] : NULL;
$Razon_Social=!empty($_POST['Razon_Social']) ? $_POST['Razon_Social'] : NULL;
$Domicilio_fiscal=!empty($_POST['Domicilio_fiscal']) ? $_POST['Domicilio_fiscal'] : NULL;
$escritura_publica=!empty($_POST['escritura_publica']) ? $_POST['escritura_publica'] : NULL;
$rfc=!empty($_POST['rfc']) ? $_POST['rfc'] : NULL;
$material_requerido=!empty($_POST['material_requerido']) ? $_POST['material_requerido'] : NULL;
$inicio_funcionamiento=!empty($_POST['inicio_funcionamiento']) ? $_POST['inicio_funcionamiento'] : NULL;
$Descuentos_otorgara=!empty($_POST['Descuentos_otorgara']) ? $_POST['Descuentos_otorgara'] : NULL;
$corte_venta=!empty($_POST['corte_venta']) ? $_POST['corte_venta'] : NULL;
$gastos_envio=!empty($_POST['gastos_envio']) ? $_POST['gastos_envio'] : NULL;
$formas_pago=!empty($_POST['formas_pago']) ? $_POST['formas_pago'] : NULL;
$entrega_listas=!empty($_POST['entrega_listas']) ? $_POST['entrega_listas'] : NULL;
$fecha_firma=!empty($_POST['fecha_firma']) ? $_POST['fecha_firma'] : NULL;
$nombre_colegio=!empty($_POST['nombre_colegio']) ? $_POST['nombre_colegio'] : NULL;
$firma_testigo=!empty($_POST['firma_testigo']) ? $_POST['firma_testigo'] : NULL;
$telefono=!empty($_POST['telefono']) ? $_POST['telefono'] : NULL;













if($usuario && $Password && $repassword )
 { 
$sql = 'SELECT * FROM useros';
 
$rec = $conexion->query($sql); 

$verificar_usuario = FALSE;

while($result = $rec->fetch_object()) { 
if($result->usuario == $usuario) { 
$verificar_usuario = TRUE; 

break; 
}
} 

if(!$verificar_usuario) { 

if($Password == $repassword) { 
    

$sql = "INSERT INTO useros (correoe,usuario, clave,fecha_registro,levely,represante_legal,Razon_Social,Domicilio_fiscal,escritura_publica,rfc,material_requerido,inicio_funcionamiento,Descuentos_otorgara,corte_venta,gastos_envio,formas_pago,entrega_listas,fecha_firma,nombre_colegio,firma_testigo,telefono
)
VALUES ('$correoe','$usuario', '$Password', NOW(),'$levely','$represante_legal','$Razon_Social','$Domicilio_fiscal','$escritura_publica','$rfc','$material_requerido','$inicio_funcionamiento','$Descuentos_otorgara','$corte_venta','$gastos_envio','$formas_pago','$entrega_listas','$fecha_firma','$nombre_colegio','$firma_testigo','$telefono'
);";

if ($conexion->query($sql) && $conexion->affected_rows > 0) {
echo '<script type="text/javascript">
alert("Usted se ha registrado correctamente.");
window.location.href="index.php";
</script>';


} else {
$msg="Error en la inserción";
var_dump($sql);

}
} else { 
$msg="Las claves no son iguales, intente nuevamente.";

} 
} else {

$msg="Este usuario ya ha sido registrado anteriormente."; 

} 

} else {
$msg="Por favor llene todos los campos. Faltan datos en el POST";

}
}

} else {
$msg="";  

}

echo $msg;

?>


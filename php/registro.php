
<?php
include 'conexion.php';
$nombre=$_POST['nombre'];
$telefono=$_POST['telefono'];
$correo=$_POST['correo'];
$mensaje=$_POST['mensaje'];
$consulta="INSERT INTO contacto(nombre,telefono,correo,mensaje) values 
('$nombre','$telefono','$correo','$mensaje')";

$resultado=mysqli_query($conexion,$consulta);

if($resultado){
    echo <<<JAVASCRIPT
    <script type="text/javascript">
        alert("Mensaje Enviado Exitosamente");
    </script>
JAVASCRIPT;
}
    
}else{
    echo <<<JAVASCRIPT
    <script type="text/javascript">
        alert("No se pudo enviar el Mensaje");
    </script>
JAVASCRIPT;

?>
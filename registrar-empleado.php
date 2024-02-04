<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRAR EMPLEADO</title>
</head>
<body>
    <h1>DATOS DEL EMPLEADO</h1>

    <?php 
        $nombre = $_POST['txtNombre'];
        $direccion = $_REQUEST['txtDireccion'];
        $tel = $_POST['txtTelefono'];
        $puesto = $_POST['selectPuestos'];
        $edad = $_POST['txtEdad'];
       
        echo "<ul>";
        echo "<li>Nombre: $nombre</li>";
        echo "<li>Direccion: $direccion</li>";
        echo "<li>Telfono: $tel</li>";
        echo "<li>Puesto: $puesto</li>";
        echo "<li>Edad:" . ($edad+1) ."</li>";

        switch($puesto){
            case "Ayudante General":
                echo "<li>Salario: \$2000</li>";
                break;
            case "Supervisor":
                echo "<li>Salario: \$5000</li>";
                break;
            case "Ing. Sistemas":
                echo "<li>Salario: \$20000</li>";
                break;
            case "RH":
                echo "<li>Salario: \$12000</li>";
                break;
            default:
            echo "<li>Salario: \$0</li>";
        }
        echo "</ul>";
    ?>
    
</body>
</html>
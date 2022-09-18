
<?php

require("Grafica.php");

$modelo = new Grafica();

// obtenemos el parametro y segun el parametro elviamos la informacion
switch ($_REQUEST["op"]) {
    case 'reservas':
        $consulta = $modelo->obtenerTodasLasReservas();
        echo json_encode($consulta);
        break;
    case 'reservas_activas':
        $consulta = $modelo->obtenerReservasActivas();
        echo json_encode($consulta);
        break;
    case 'reservas_canceladas':
        $consulta = $modelo->obtenerReservasCanceladas();
        echo json_encode($consulta);
        break;
    default:
        echo json_encode(null);
        break;
}

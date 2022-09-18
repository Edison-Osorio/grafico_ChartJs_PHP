<?php

class Grafica
{
    private $conexion;

    function __construct()
    {
        require_once('../db/connection.php');
        $this->conexion = $conexion;
    }

    function obtenerTodasLasReservas()
    {
        $sql = "SELECT COUNT(reserva.IdSucursal) AS cantidad, sucursal.nombre from reserva
        INNER JOIN sucursal on reserva.IdSucursal=sucursal.IdSucursal group by reserva.IdSucursal";

        $arreglo = array();
        if ($consulta = $this->conexion->query($sql)) {
            while ($consulta_VU = mysqli_fetch_array($consulta)) {
                $arreglo[] = $consulta_VU;
            }

            return $arreglo;
        }
    }

    function obtenerReservasActivas()
    {
        $sql = "SELECT COUNT(reserva.IdSucursal) AS Cantidad_Reservas,sucursal.nombre from reserva
        INNER JOIN sucursal on reserva.IdSucursal=sucursal.IdSucursal WHERE reserva.estado = 'reservado' group by reserva.IdSucursal;";
        $reservasActivas = array();
        if ($conn = $this->conexion->query($sql)) {
            while ($consult = mysqli_fetch_array($conn)) {
                $reservasActivas[] = $consult;
            }

            return $reservasActivas;
        }
    }

    function obtenerReservasCanceladas()
    {
        $sqlCenceladas = "SELECT COUNT(reserva.IdSucursal) AS Cantidad_Reservas,sucursal.nombre from reserva
        INNER JOIN sucursal on reserva.IdSucursal=sucursal.IdSucursal WHERE reserva.estado = 'cancelado' group by reserva.IdSucursal;";

        $reservasCanceladas = array();
        if ($conn = $this->conexion->query($sqlCenceladas)) {
            while ($consult = mysqli_fetch_array($conn)) {
                $reservasCanceladas[] = $consult;
            }

            return $reservasCanceladas;
        }
    }
}

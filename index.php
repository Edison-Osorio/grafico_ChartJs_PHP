<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Agencia de Viajes </title>

    <link rel="stylesheet" href="./css/styles.css">
</head>

<body>
    <div class="col-lg-12" style="padding-top:20px;">
        <div class="">
            <div class="">
                Diagramas de barra de las reservas
            </div>
            <div class="card-body">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-md-4 buttonReservas">
                            <button class="btn btn-primary" id="verAllReservas">Ver solo todas las reservas</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" id="verReservasActivas"> Ver reservas activas</button>
                        </div>
                        <div class="col-md-4">
                            <button class="btn btn-primary" id="verReservasCanceladas">Ver reservas canceladas</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 mt-5">
                    <div class="row">
                        <div class="col-md-6 ">
                            <h2 class="text-center">Todas las reservas registradas</h2>
                            <canvas class="AllReservas" id="AllReservas" width="200" height="200"></canvas>
                        </div>
                        <div class="col-md-6 activas">
                            <h2 class="text-center">Reservas activas</h2>
                            <canvas id="reservasActivas" width="200" height="200"></canvas>
                        </div>
                        <div class="col-md-6 canceladas">
                            <h2 class="text-center">Reservas canceladas</h2>
                            <canvas id="reservasCanceladas" width="200" height="200"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="js/app.js"></script>
</body>

</html>
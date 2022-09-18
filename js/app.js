const ejecutarDiagramas = () => {
  consultas(
    "./controllers/controlador_reservas.php?op=reservas",
    "./controllers/controlador_reservas.php?op=reservas_activas",
    "./controllers/controlador_reservas.php?op=reservas_canceladas"
  ).then(([AllReservas, reservasActivas, reservasCanceladas]) => {
    diagramaTodasLasReservas(AllReservas);
    diagramaReservasActivas(reservasActivas);
    diagramaReservasCanceladas(reservasCanceladas);
  });
};

const diagramaTodasLasReservas = (AllReservas) => {
  modeloGrafica("AllReservas", AllReservas);
};

const diagramaReservasActivas = (reservasActivas) => {
  modeloGrafica("reservasActivas", reservasActivas);
};
const diagramaReservasCanceladas = (reservasCanceladas) => {
  modeloGrafica("reservasCanceladas", reservasCanceladas);
};

const modeloGrafica = (id, reservas) => {
  var sucursales = [];

  var cantidad = [];

  for (let i = 0; i < reservas.length; i++) {
    sucursales.push(reservas[i][1]);

    cantidad.push(reservas[i][0]);
  }

  const data = {
    labels: sucursales,
    datasets: [
      {
        data: cantidad,
        borderColor: getDataColors(20),
        backgroundColor: getDataColors(),
      },
    ],
  };

  const options = {
    plugins: {
      legend: { display: false },
    },
  };

  new Chart(id, { type: "bar", data, options });
};

const consultas = (...urls) => {
  const promises = urls.map((url) => fetch(url).then((response) => response.json()));
  return Promise.all(promises);
};

const getDataColors = (opacity) => {
  const colors = [
    "#7448c2",
    "#21c0d7",
    "#d99e2b",
    "#cd3a81",
    "#9c99cc",
    "#e14eca",
    "#ffffff",
    "#ff0000",
    "#d6ff00",
    "#0038ff",
  ];
  return colors.map((color) => (opacity ? `${color + opacity}` : color));
};

// Ocultamos y mostramos los daigramas con Jquery
$(".buttonReservas").hide();
$(".activas").hide();
$(".canceladas").hide();

$(document).ready(function () {
  $("#verAllReservas").click(function () {
    $(".activas").hide();
    $(".buttonReservas").hide();
    $(".canceladas").hide();
  });
});

$(document).ready(function () {
  $("#verReservasActivas").click(function () {
    $(".activas").show();
    $(".buttonReservas").show();
    $(".canceladas").hide();
  });
});
$(document).ready(function () {
  $("#verReservasCanceladas").click(function () {
    $(".activas").hide();
    $(".buttonReservas").show();
    $(".canceladas").show();
  });
});

// Ejecutamos todos los diagramas
ejecutarDiagramas();

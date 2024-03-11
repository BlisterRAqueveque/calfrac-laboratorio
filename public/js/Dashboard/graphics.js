var options = {
    series: [{
    data: [4, 6, 10, 3, 5, 15, 2]
  }],
    chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: true,
    }
  },
  dataLabels: {
    enabled: false
  },
  xaxis: {
    categories: ['Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes', 'Sábado', 'Domingo'
    ],
  }
  };

  var chart = new ApexCharts(document.querySelector("#first_graphic"), options);
  chart.render();
// var chart = new ApexCharts(document.querySelector("#first_graphic"), options);
// chart.render();


var options_two = {
    series: [44, 55, 13, 43, 22],
    chart: {
        width: 380,
        type: 'pie',
    },
    labels: ['Ensayo de Fractura', 'Ensayo de Lechada', 'Ensayo de Lodo', 'Ensayo ..', 'Ensayo ...'],
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
            legend: {
                position: 'bottom'
            }
        }
    }]
};

var chart_two = new ApexCharts(document.querySelector("#second_graphic"), options_two);
chart_two.render();
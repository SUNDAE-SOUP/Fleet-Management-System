var correctiveData = {
  name: "CORRECTIVE",
  data: [384, 297, 436, 256]
}

var barChartOptions = {
    series: [
      correctiveData
    ],
    chart: {
    type: 'bar',
    height: 400,
    width: '100%',
    height: '95%',
    colors: "ffbf00",
    toolbar: {
        show: false
    },
  },
  colors: [
    'rgb(64,156,255)'
  ],
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: false,
      columnWidth: "80%",
    }
  },
  tooltip:{
    enabled: true,
  },
  fill: {
    type: 'gradient',
  },
  dataLabels: {
    enabled: true
  },
  legend: {
    show: true,
  },
  yaxis: {
    labels:{
      style:{
        colors: "#1d1d1f",
      },
    },
  },
  xaxis: {
    labels:{
      style:{
        colors: "#1d1d1f"
      },
    },
    categories: ["January", "February", "March", "April"],
  },
};

  var barChartB = new ApexCharts(document.querySelector("#barChartB"), barChartOptions);
  barChartB.render();

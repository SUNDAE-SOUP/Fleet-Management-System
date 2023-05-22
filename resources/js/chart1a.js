var pmsData = {
  name: "PMS",
  data: [256, 384, 297, 436]
}

var barChartOptions = {
    series: [
      pmsData
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
    "#ffbf00"
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

  var barChart = new ApexCharts(document.querySelector("#barChartA"), barChartOptions);
  barChart.render();
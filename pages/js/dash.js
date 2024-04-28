var pieChartCanvas = $("#pieChart").get(0).getContext("2d");
var donutData = {
  labels: ["Label 1", "Label 2", "Label 3"],
  datasets: [
    {
      data: [10, 20, 30],
      backgroundColor: ["#f56954", "#00a65a", "#f39c12"],
    },
  ],
};
var pieOptions = {
  maintainAspectRatio: false,
  responsive: true,
};
new Chart(pieChartCanvas, {
  type: "pie",
  data: donutData,
  options: pieOptions,
});

$(document).ready(function () {
  $("#activityTable").DataTable();
});

$(document).ready(function () {
    $("#acttable").DataTable();
  });
  

var ctx = document.getElementById("myChart").getContext("2d");

var data = {
  labels: ["CFC", "CFGP", "LFCS", "JDHFC"],
  datasets: [
    {
      label: "Dataset",
      data: [65, 59, 80, 81],
      borderColor: "rgb(75, 192, 192)",
      backgroundColor: "rgba(75, 192, 192, 0.2)",
      tension: 0.1,
    },
  ],
};

var options = {
  scales: {
    y: {
      beginAtZero: true,
    },
  },
};

var myChart = new Chart(ctx, {
  type: "bar", 
  data: data,
  options: options,
});

var ctx = document.getElementById("myChart1").getContext("2d");


var data = {
  labels: ["CFC", "CFGP", "LFCS", "JDHFC"],
  datasets: [
    {
      label: "Dataset",
      data: [65, 59, 80, 81],
      borderColor: "rgb(75, 192, 192)",
      backgroundColor: "rgba(75, 192, 192, 0.2)",
      tension: 0.1,
    },
  ],
};

var options = {
  scales: {
    y: {
      beginAtZero: true,
    },
  },
};

var myChart = new Chart(ctx, {
  type: "bar", 
  data: data,
  options: options,
});


var ctx = document.getElementById("myChart2").getContext("2d");


var data = {
  labels: ["CFC", "CFGP", "LFCS", "JDHFC"],
  datasets: [
    {
      label: "Dataset",
      data: [65, 59, 80, 81],
      borderColor: "rgb(75, 192, 192)",
      backgroundColor: "rgba(75, 192, 192, 0.2)",
      tension: 0.1,
    },
  ],
};

var options = {
  scales: {
    y: {
      beginAtZero: true,
    },
  },
};

var myChart = new Chart(ctx, {
  type: "bar", 
  data: data,
  options: options,
});

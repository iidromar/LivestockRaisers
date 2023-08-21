// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';


const data = {
  labels: [
    'الماعز 37%',
    'الضأن 63%',
  ],
  datasets: [{
    label: 'My First Dataset',
    data: [37, 63],
    backgroundColor: [
      'rgb(255, 99, 132)',
      'rgb(54, 162, 235)',
 
    ],
    hoverOffset: 4,
    datalabels: {
      color: '#FFCE56'
  }
  }]
};
// Pie Chart Example
var ctx = document.getElementById("animalsChart");
var myPieChart = new Chart(ctx, {
  type: 'doughnut',
  data: data,

});

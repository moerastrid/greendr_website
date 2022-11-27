<div>
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['2014', '2015', '2016', '2017', '2018', '2019', '2020', '2021'],
      datasets: [{
        label: 'Flavour',
        data: [77, 77, 73, 79, 80, 77, 82, 72],
        borderWidth: 1
      },
      {
        label: 'Clean Energy %',
        data: [66, 63, 56, 60, 61, 61, 66, 64],
        borderWidth: 1
      },
      {
        label: 'Waste',
        data: [14.5, 14.5, 14, 14.4, 14.5, 13, 13.2, 11.8],
        borderWidth: 1
      }]
    },
    options: {
      scales: {
       y: {
         beginAtZero: true
       }
      }
    }
  });


</script>

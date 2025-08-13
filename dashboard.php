<?php include_once 'header.php' ?>


<div class="topcolor p-5 col-md-12">
  <div class="row">
    <div class="col-md-4 ">
      <div class="chart-container">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <div calss="col-md-6"></div>
  </div>
</div>
<div class="row m-3">
  <div class="col-md-6">
    <div class="card p-5 m-1">
      <h3>Actividad por membresía del mes de: <?php echo date('M') ?> </h3>
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Edad</th>
            <th scope="col">Identidad</th>
            <th scope="col">Teléfono</th>
            <th scope="col">Estado</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Mark Otto</th>
            <td>45</td>
            <td>1010101010</td>
            <td>3102225050</td>
            <td class="bg-success text-white">Cubierto</td>
          </tr>
          <tr>
            <th>Peter Mark</th>
            <td>22</td>
            <td>1010101010</td>
            <td>3102225050</td>
            <td class="bg-warning text-white">Pendiente</td>
          </tr>
          <tr>
            <th>Sus Teran</th>
            <td>29</td>
            <td>1010101010</td>
            <td>3102225050</td>
            <td class="bg-danger text-white">Vencido</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card p-3 m-1">
      <h3>Tabla</h3>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card p-3 m-1">
      <h3>Tabla </h3>
    </div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: ['Lun', 'Mar', 'Mir', 'Jue', 'Vie', 'Sáb', 'Dom'],
      datasets: [{
        label: '# Nivel de concurrencia',
        data: [12, 19, 3, 5, 2, 3, 5],
        backgroundColor: [
          'rgba(255, 99, 132, 0.2)',
          'rgba(255, 159, 64, 0.2)',
          'rgba(255, 205, 86, 0.2)',
          'rgba(75, 192, 192, 0.2)',
          'rgba(54, 162, 235, 0.2)',
          'rgba(153, 102, 255, 0.2)',
          'rgba(201, 203, 207, 0.2)'
        ],
        borderColor: [
          'rgb(255, 99, 132)',
          'rgb(255, 159, 64)',
          'rgb(255, 205, 86)',
          'rgb(75, 192, 192)',
          'rgb(54, 162, 235)',
          'rgb(153, 102, 255)',
          'rgb(201, 203, 207)'
        ]
      }]
    },
    options: {
      responsive: true,
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
  });
</script>
</body>

</html>
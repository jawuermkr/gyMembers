<?php include_once 'header.php' ?>


<div class="topcolor p-5 col-md-12">
  <div class="row">
    <div class="col-md-4 ">
      <div class="chart-container">
        <canvas id="myChart"></canvas>
      </div>
    </div>
    <div calss="col-md-3">
    </div>
    <div calss="col-md-3">

    </div>
  </div>
</div>
<div class="row m-3">
  <div class="col-md-6">
    <div class="card p-3 m-1">
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
            <td class="border border-success">Cubierto</td>
          </tr>
          <tr>
            <th>Peter Mark</th>
            <td>22</td>
            <td>1010101010</td>
            <td>3102225050</td>
            <td class="bg-warning">Pendiente</td>
          </tr>
          <tr>
            <th>Sus Teran</th>
            <td>29</td>
            <td>1010101010</td>
            <td>3102225050</td>
            <td class="border border-danger">Vencido</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card p-3 m-1">
      <h3>Sesiones Individuales Restantes</h3>
      <table class="table">
        <thead class="table-dark">
          <tr>
            <th scope="col">Nombre</th>
            <th scope="col">Sesiones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>Mark Otto</th>
            <td class="border border-success">14</td>
          </tr>
          <tr>
            <th>Peter Mark</th>
            <td class="border border-warning">3</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <div class="col-md-3">
    <div class="card p-3 m-1 text-center">
      <h3>Actualidad</h3>
      <hr>
      <h2 class="datos fw-bold">65</h2>
      <p>Total Members</p>
      <hr>
      <h2 class="datos fw-bold">$ 7'800.000</h2>
      <p>Recaudo Mensual</p>
    </div>
  </div>
</div>





<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
  const ctx = document.getElementById('myChart');

  new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['Lun', 'Mar', 'Mir', 'Jue', 'Vie', 'Sáb', 'Dom'],
      datasets: [{
        label: '# Nivel de concurrencia',
        data: [12, 19, 3, 5, 2, 3, 5],
        borderColor: [
          'rgb(75, 192, 192)'
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
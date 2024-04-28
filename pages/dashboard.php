<?php
include 'head.php';
?>
<style>
  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    background-color: #343a40;
    border: 1px solid #aaa;
    border-radius: 4px;
    cursor: default;
    float: left;
    margin-right: 5px;
    margin-top: 5px;
    padding: 0 5px;
  }
</style>

<body class="hold-transition sidebar-mini layout-fixed" data-panel-auto-height-mode="height">
  <div class="content-wrapper" style="min-height: 554.4px;">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
        </div>
      </div>
    </div>
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-6">
            <div class="small-box bg-info">
              <div class="inner">
                <h4>10</h4>
                <p>Total Attendees</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="small-box bg-success">
              <div class="inner">
                <h4>100 <span>%</span></h4>
                <p>Percentage</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="small-box bg-warning">
              <div class="inner">
                <h4><span>P</span>100,000</h4>
                <p>Total Donations</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
            </div>
          </div>
        </div>
        <div class="card card-secondary">
          <div class="card-header">
            <h3 class="card-title">DATA CHART</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <div class="card-body">
            <canvas id="pieChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
          </div>

        </div>
        <div>
          <hr>
        </div>
        <div>
          <div class="card-header">
            <label for="">Activity Information</label>
          </div>
          <br>
          <table id="activityTable" class="display">
            <thead>
              <tr>
                <th>Category</th>
                <th>Sub-Category</th>
                <th>Activity</th>
                <th>Date</th>
                <th>Attendance</th>
                <th>Attendance Percentage</th>
                <th>Total Donations</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Sports</td>
                <td>Football</td>
                <td>Practice</td>
                <td>2024-04-01</td>
                <td>25</td>
                <td>90%</td>
                <td>$1500</td>
                <td>Edit</td>
              </tr>
            </tbody>
          </table>
         <div>
         <div class="card-header">
            <label for="">Total Donation Per Church</label>
          </div>
          <br>
         <canvas id="myChart" width="100" height="25"></canvas>
         </div>
         <div>
         <div class="card-header">
            <label for="">Total Attendance Per Church</label>
          </div>
          <br>
         <canvas id="myChart1" width="100" height="25"></canvas>
         </div>
         <div>
         <div class="card-header">
            <label for="">Total Percentage Per Church</label>
          </div>
          <br>
         <canvas id="myChart2" width="100" height="25"></canvas>
         </div>
        </div>
      </div>
  </div>
  </section>
  </div>
  <script src="/pages/js/dash.js"></script>
</body>
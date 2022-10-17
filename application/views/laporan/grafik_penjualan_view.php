<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laporan WST | Grafik Laporan Penjualan</title>

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- daterange picker -->
    <!-- <link rel="stylesheet" href=".<?php echo base_url() ?>assets/plugins/daterangepicker/daterangepicker.css"> -->

    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    <!-- Google Font: Source Sans Pro -->
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/dist/css/adminlte.min.css">

</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <!-- <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?php echo base_url() ?>assets/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
        </div> -->

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-controlsidebar-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="index3.html" class="brand-link">

                <span class="brand-text font-weight-light">Laporan Penjualan</span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="info">
                        <a href="#" class="d-block">Alexander Pierce</a>
                    </div>
                </div>



                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-database"></i>
                                <p>
                                    Master
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>index.php/user_controller" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>User</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>index.php/customer_controller" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Customer</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>index.php/barang_controller" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Barang</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item ">
                            <a href="#" class="nav-link">
                                <!-- <i class="nav-icon fa fa-credit-card-alt"></i> -->
                                <i class="nav-icon fa fa-money"></i>
                                <p>
                                    Transaksi
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>index.php/penjualan_controller" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Penjualan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item menu-open">
                            <a href="#" class="nav-link active">
                                <i class="nav-icon fa fa-book"></i>
                                <p>
                                    Laporan
                                    <i class="right fas fa-angle-left"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>index.php/laporan_penjualan_controller" class="nav-link ">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Penjualan</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url() ?>index.php/laporan_grafik_controller" class="nav-link active">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Grafik Penjualan</p>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <!-- <h1 class="m-0">Master User</h1> -->
                            <ol class="breadcrumb float-sm-left">
                                <li class="breadcrumb-item">Laporan Penjualan</li>
                                <!-- <li class="breadcrumb-item active">Dashboard v1</li> -->
                            </ol>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="card">
                                <div class="card-body">
                                    <form action="<?php echo base_url() ?>index.php/laporan_grafik_controller" id="filter_form" method="post">
                                        <div class="row">
                                            <div class="col">
                                                <label>Range Tanggal</label>
                                            </div>
                                            <div class="col"></div>
                                            <div class="col">
                                                <label>Barang</label>
                                            </div>
                                            <div class="col">
                                                <label>Customer</label>
                                            </div>
                                            <div class="col">
                                                <label>User</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                <input type="date" id="tanggal_awal" class="form-control" name="tanggal_awal">
                                            </div>
                                            -
                                            <div class="col">
                                                <input type="date" id="tanggal_akhir" class="form-control" name="tanggal_akhir">
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <select name="id_barang" class="form-control select2" style="width: 100%;">
                                                        <option selected="selected"></option>
                                                        <?php
                                                        foreach ($barang->result_array() as $data_barang) :
                                                        ?>
                                                            <option value="<?= $data_barang['id_barang'] ?>"><?= $data_barang['nama'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-group">
                                                    <select name="id_customer" class="form-control select2" style="width: 100%;">
                                                        <option selected="selected"></option>
                                                        <?php
                                                        foreach ($customer->result_array() as $data_customer) :
                                                        ?>
                                                            <option value="<?= $data_customer['id_customer'] ?>"><?= $data_customer['nama'] ?></option>
                                                        <?php endforeach ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <select name="id_user" class="form-control select2" style="width: 100%;">
                                                    <option selected="selected"></option>
                                                    <?php
                                                    foreach ($user->result_array() as $data_user) :
                                                    ?>
                                                        <option value="<?= $data_user['id_user'] ?>"><?= $data_user['nama'] ?></option>
                                                    <?php endforeach ?>
                                                </select>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer">
                                    <button form="filter_form" type="submit" class="btn btn-primary">Filter</button>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Grafik Laporan Penjualan</h3>
                                            <div class="card-tools">
                                            </div>
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body">
                                            <div class="card card-success">

                                                <div class="card-body">
                                                    <div class="chart">
                                                        <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                    </div>
                                                </div>
                                                <!-- /.card-body -->
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="card">
                                <div class="card-body">
                                    <?php
                                    // $var_jumlah = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
                                    // foreach ($penjualan->result_array() as $data_penjualan) {
                                    //     $bulan = $data_penjualan['bulan'] - 1;
                                    //     $var_jumlah[$bulan] = $data_penjualan['jumlah'];
                                    // }
                                    // print_r($var_jumlah);
                                    // 
                                    ?>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <?php
    $array_barang = array();
    foreach ($barang->result_array() as $data_barang) {
        $array_barang += array($data_barang['id_barang'] => $data_barang['kode']);
    }
    // print_r($array_barang);
    // echo "<pre>";
    // print_r($data_penjualan);
    // // echo $menu['nama'];
    // echo "</pre>";
    ?>

    <!-- jQuery -->
    <script src="<?php echo base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
    <!-- ChartJS -->
    <script src="<?php echo base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>
    <!-- Select2 -->
    <script src="<?php echo base_url() ?>assets/plugins/select2/js/select2.full.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="<?php echo base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url() ?>assets/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?php echo base_url() ?>assets/dist/js/demo.js"></script>
    <?php
    $var_jumlah = array(0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0);
    $var_jumlah2 = array();
    foreach ($penjualan->result_array() as $data_penjualan) {
        $bulan = $data_penjualan['bulan'] - 1;
        $var_jumlah[$bulan] += $data_penjualan['jumlah'];
        $var_jumlah2 += [$data_penjualan['bulan'] => $data_penjualan['jumlah']];
    }
    // print_r($var_jumlah);
    ?>

    <script>
        console.log(<?= json_encode($var_jumlah) ?>);
        console.log(<?= json_encode($var_jumlah2) ?>);
        console.log(<?= json_encode($penjualan->result()) ?>);
        var data_set = [{
                label: 'Kardus Large',
                backgroundColor: 'rgba(60,141,188,0.9)',
                borderColor: 'rgba(60,141,188,0.8)',
                pointRadius: false,
                pointColor: '#3b8bba',
                pointStrokeColor: 'rgba(60,141,188,1)',
                pointHighlightFill: '#fff',
                pointHighlightStroke: 'rgba(60,141,188,1)',
                data: <?= json_encode($var_jumlah) ?>
            },
            // {
            //     label: 'Kardus Large',
            //     backgroundColor: 'rgba(60,141,188,0.9)',
            //     borderColor: 'rgba(60,141,188,0.8)',
            //     pointRadius: false,
            //     pointColor: '#3b8bba',
            //     pointStrokeColor: 'rgba(60,141,188,1)',
            //     pointHighlightFill: '#fff',
            //     pointHighlightStroke: 'rgba(60,141,188,1)',
            //     data: <?= json_encode($var_jumlah) ?>
            // }
        ]

        $(function() {
            var areaChartData = {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                datasets: data_set
            }

            //-------------
            //- BAR CHART -
            //-------------
            var barChartCanvas = $('#barChart').get(0).getContext('2d')
            var barChartData = $.extend(true, {}, areaChartData)
            var temp0 = areaChartData.datasets[0]
            // var temp1 = areaChartData.datasets[1]
            // barChartData.datasets[0] = temp1
            barChartData.datasets[0] = temp0

            var barChartOptions = {
                responsive: true,
                maintainAspectRatio: false,
                datasetFill: false
            }

            new Chart(barChartCanvas, {
                type: 'bar',
                data: barChartData,
                options: barChartOptions
            })











            $("#example1").DataTable({
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
            // $('#reservation').daterangepicker()

        });
        var data = [];
        // console.log(<?= json_encode($array_barang) ?>)

        function filter() {}
        console.log(<?= json_encode($penjualan->result()) ?>);
    </script>
</body>

</html>
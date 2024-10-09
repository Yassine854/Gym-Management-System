<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>
    <link rel="icon" type="image/png" href="{{asset('dist/img/sports.png')}}">
    {{-- <link rel="shortcut icon" type="image/png" href="{{asset('favicon.ico')}}"> --}}
    <!-- Font Awesome -->
    <!-- Theme style -->
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
    @yield('link')

    <style>
        #op {
            background-image: url('https://thumbs.dreamstime.com/b/abstract-blur-fitness-gym-background-sunny-day-90863742.jpg');
            background-color: #cccccc;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        #pie,#column,#area1{
            position: relative;
            height: 150px;

        }
        #line{
            position: relative;
            height: 58px;
        }



    </style>
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        @include('layout.header')
        @include('layout.menu')

        <!-- Content Wrapper. Contains page content -->
        <div id="op" class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>@yield('titrepage')</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    @yield('content')
                    <div class="row">
                        <div class="col-12">

                            @yield('contenu')







                            <div class="row text-capitalize">
                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-light">
                                        <div class="inner">
                                            <h2><b>{{ $numSports ?? 0 }}</b></h2>
                                            <p>Number of sports</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-dumbbell"></i>
                                        </div>
                                        <a href="AdminTemp/sports" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-secondary">
                                        <div class="inner">
                                            <h2><b>{{$numCoaches ?? 0}}</b></h2>

                                            <p>Number of coaches</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fas fa-user-shield"></i>
                                        </div>
                                        <a href="AdminTemp/coaches" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-warning">
                                        <div class="inner" style="background-color: #fd7e14">
                                            <h2><b>{{$numMembers ?? 0}}</b></h2>
                                            <p>Number of members</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-user-circle"></i>

                                        </div>
                                        <div class="small-box-footer" style="background-color: #ee3211d8;opacity:0.6">
                                            <a href="AdminTemp/members" style="color: white">More info <i
                                                    class="fas fa-arrow-circle-right"></i></a>
                                        </div>
                                    </div>
                                </div>


                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-success">
                                        <div class="inner">
                                            <h2><b>{{$numSubs ?? 0}}</b></h2>
                                            <p>Number of subscriptions</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-address-card"></i>

                                        </div>
                                        <a href="{{route('subscriptions.index')}}" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>



                                <div class="col-lg-3 col-6">
                                </div>


                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-danger">
                                        <div class="inner">
                                            <h2><b>{{$numEnd ?? 0}}</b></h2>

                                            <p>Number of Ended Subscriptions</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-user-times"></i>
                                        </div>
                                        <a href="{{route('end.index')}}" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-6">
                                    <!-- small box -->
                                    <div class="small-box bg-warning">
                                        <div class="inner">
                                            <h2><b>{{$numProducts ?? 0}}</b></h2>

                                            <p>Number of products</p>
                                        </div>
                                        <div class="icon">
                                            <i class="fa fa-bolt"></i>
                                        </div>
                                        <a href="AdminTemp/products" class="small-box-footer">More info <i
                                                class="fas fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>


                                <div class="col-md-6">
                                    <!-- LINE CHART -->
                                    <div class="card card-info">
                                        <div class="card-header">
                                            <h3 class="card-title">Line Chart</h3>

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
                                            <div class="chart">
                                                <canvas id="lineChart"
                                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                    <div id="line">   @include('layout.line')</div>
                                                    <hr id="hrr">
                                                    <div id="line">   @include('layout.line2')</div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>


                                    <div class="card card-danger">
                                        <div class="card-header">
                                            <h3 class="card-title">Pie Chart</h3>

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
                                            <canvas id="donutChart"
                                                style="min-height: 200px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                             <div id="pie">   @include('layout.pie')</div>
                                        </div>

                                        <!-- /.card-body -->
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="card card-primary">
                                        <div class="card-header">
                                            <h3 class="card-title">Area Chart</h3>

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
                                            <div class="chart">
                                                <canvas id="areaChart"
                                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                    <div id="area1">   @include('layout.area')</div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="card card-success">
                                        <div class="card-header">
                                            <h3 class="card-title">Bar Chart</h3>

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
                                            <div class="chart">
                                                <canvas id="barChart"
                                                    style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                                                    <div id="column">   @include('layout.column')</div>
                                            </div>
                                        </div>
                                        <!-- /.card-body -->
                                    </div>

                                </div>






                                <!-- /.card -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('layout.footer')

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    @section('script')
    <script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
    <script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
    <script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
    <script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
    <!-- AdminLTE App -->
    <script src="{{asset('dist/js/adminlte.min.js')}}"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="{{asset('dist/js/demo.js')}}"></script>
    <!-- Page specific script -->
    @yield('script')






    <script>
        $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });








    </script>
</body>

</html>

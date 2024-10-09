<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Coach</title>
  {{-- <link rel="shortcut icon" type="image/png" href="{{asset('favicon.ico')}}"> --}}
  <!-- Font Awesome -->
  <!-- Theme style -->
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
  <!-- DataTables -->
  <link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
  <link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  @yield('link')
  <link rel="icon" type="image/png" href="{{asset('dist/img/sports.png')}}">
  <style>
    #bc{
      background-image: url('https://thumbs.dreamstime.com/b/abstract-blur-fitness-gym-background-sunny-day-90863742.jpg');
        background-color: #cccccc;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    #white{
        background-color: white;
        border: 2px 2px black;
    }
    #pos{
        position: fixed;
        left: 420px;
        font-family: "Arial Black";
    }
    #bold{
        color: rgb(255, 102, 0);
    }
    #co{
        position: fixed;
        height: 260px;
        width: 200px;
        margin-left: 60px;
        border-radius: 5%;
        box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.295);
    }
    #validationCustom01,#validationCustom02,#validationCustom03,#validationCustom04,#scontract,#econtract{
        padding:10px;
        border-radius:10px;
        box-shadow: 2px 2px rgb(211, 211, 211);
    }
    #backg{
        border-radius: 10%;
        border: 6px,solid,black
    }
</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">


  @include('CoachTemp.layout.header')
  @include('CoachTemp.layout.menu')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" id="bc">
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
            <?PHP $coach = Auth::guard('coach')->user();?>

<div  style="background-color: rgb(245, 228, 198)">
<div id="pos"><h2> Welcome To your dashboard coach <b id="bold">{{$coach->fname}}</b></h2></div>
</div>
<br>
<br>
<br>
            <form >
                <div class="card-body" style="background-color: rgb(245, 228, 198);box-shadow: 4px 4px 4px rgba(0, 0, 0, 0.295);  border-bottom: 1px solid rgba(0, 0, 0, 0.685);
                border-left: 1px solid rgba(0, 0, 0, 0.685);
                border-right: 1px solid rgba(0, 0, 0, 0.685);
                border-top: 1px solid rgba(0, 0, 0, 0.685)">
                <div class="form-row">
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom01">First name:</label>
                    <input type="text" class="form-control" id="validationCustom01" value="{{ucfirst($coach->fname)}}" readonly value="Mark">

                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom02">Last name:</label>
                    <input type="text" class="form-control" id="validationCustom02" value="{{ucfirst($coach->lname)}}" readonly >
                  </div>
                  <div class="col-md-4 mb-3">
                    <label for="co">Photo:</label>
                   <div> <img id="co"  src="{{asset('/image/coach/'.$coach->image)}}"
                            alt="lost it"> </div>
                  </div>
                </div>
                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label for="validationCustom04">Gender:</label>
                        <input type="text" class="form-control" id="validationCustom04" value="{{$coach->gender}}" readonly>
                      </div>
                  <div class="col-md-4 mb-3">
                    <label for="validationCustom03">Coaching:</label>
                    <input type="text" class="form-control" id="validationCustom03" value="{{ucfirst($coach->sports->name)}}" readonly>
                  </div>


                </div>

                <div class="form-row">

                    <div class="col-md-4 mb-3">
                        <label for="scontract">Start of contract:</label>
                        <input readonly type="date" name="scontract" value="{{$coach->scontract}}"class="form-control" id="scontract">
                      </div>

                      <div class="col-md-4 mb-3">
                        <label  for="econtract">End of contract:</label>
                        <input readonly type="date" name="econtract" value="{{$coach->econtract}}"class="form-control" id="econtract">
                      </div>
                </div>
                <br>
                <br>
            </div>
              </form>







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

  @include('CoachTemp.layout.footer')

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
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


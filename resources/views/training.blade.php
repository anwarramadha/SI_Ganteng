<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

</head>
<body>


<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="images/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Pesonalia</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include Bootstrap Datepicker -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    {{Html::style('css/bootstrap.min.css')}}

    <!-- Animation library for notifications   -->
    {{HTML::style('css/animate.min.css')}}


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    {{HTML::style('css/demo.css')}}

    <!-- CSS for floating window-->
    {{HTML::style('css/floating-window.css')}}


    <!--     Fonts and icons     -->
    {{HTML::style('css/font-awesome.css')}}
    {{HTML::style('css/font-awesome.min.css')}}
    {{HTML::style('css/pe-icon-7-stroke.css')}}

    <!--  Light Bootstrap Table core CSS    -->
    {{HTML::style('css/light-bootstrap-dashboard.css')}}

    <!-- CSS for action-bar-->
    {{HTML::style('css/action-bar.css')}}

    <!-- CSS for select option -->
    {{HTML::style('css/select.css')}}

    <!-- Datatable style -->
    {{HTML::style('css/jquery.dataTables.min.css')}}

    <!-- Heading style -->
    {{HTML::style('css/heading.css')}}

</head>

<body>
  <div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="images/sidebar-5.jpg">
    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->
      <div class="sidebar-wrapper">
        <div class="logo">
          <img src="images/people.png" style="width: 90%; height: 90%">
            <a class="simple-text">
              Personalia
            </a>
        </div>
        <ul class="nav">
          <li class="">
              <a href={{ URL::to('/employees') }}>
                  <i class="pe-7s-note2"></i>
                  <p>Employee List</p>
              </a>
          </li>

          <li>
            <a href={{ URL::to('/schedule') }}>
              <i class="pe-7s-alarm"></i>
              <p>Training Schedule</p>
            </a>
          </li>
          <li class="active">
            <a href={{ URL::to('/addtrainingpage') }}>
              <i class="pe-7s-plus"></i>
              <p>Add Training</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="additional-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Add Training</a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('logout') }}"onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                              <p>{{ Auth::user()->name }}</p>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                        <li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>

    <div class="main-panel">
      <div class="container-fluid">
      
              <div class="col-md-6">




                            <form name="form_pegawai" action="/actionadd" method="POST">
                              {!! csrf_field() !!}

                                    <label for="inputtrainer">Trainer Name</label>
                                    <input type="nama" class="form-control" id="inputtrainer" placeholder="Nama trainer" name="nama_trainer">


                                    <label for="inputdate">Training Date</label>
                                    <input type="date" class="form-control" id="inputdate" name="training_date">



                                    <label for="deksripsi">Deskripsi</label>
                                    <input type="text" class="form-control" id="deskripsi" name="deskripsi">

                                <div class="radio">
                                    <label><input type="radio" name="pegawai" value="web">Web Developer</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="pegawai" value="mobile">Android Developer</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="pegawai" value="ios">Ios Developer</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="pegawai" value="all">All Developer</label>
                                </div>
                                <button type="submit" class="btn btn-primary">Add</button>
                                <button type="reset" class="btn btn-primary"> Clear </button>
                            </form>



                  </div>


              </div>
            </div>

  </div>



</body>

    <!--   Core JS Files   -->
    {{HTML::script('js/jquery-1.10.2.js')}}
    {{HTML::script('js/jquery-3.2.0.min.js')}}
    {{HTML::script('js/bootstrap.min.js')}}

	<!--  Checkbox, Radio & Switch Plugins -->
    {{HTML::script('js/bootstrap-checkbox-radio-switch.js')}}

	<!--  Charts Plugin -->
    {{HTML::script('js/chartist.min.js')}}

    <!--  Notifications Plugin    -->
    {{HTML::script('js/bootstrap-notify.js')}}


    <!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
    {{HTML::script('js/light-bootstrap-dashboard.js')}}

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
    {{HTML::script('js/demo.js')}}

    {{HTML::script('js/jquery.dataTables.min.js')}}

    <!--this script is use to handle event click in table -->


    <script type="text/javascript">
        $(document).ready(function() {
            $('#table-content').DataTable( {
                "scrollY":        "65vh",
                "scrollCollapse": true,
                "paging":         false,
                "bFilter": false,
                "bInfo" : false,
                "bSort" : false
            } );
        } );
    </script>
</html>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="images/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Pesonalia</title>

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
          <li class="active">
            <a href={{URL::to('/profil')}}>
              <i class="pe-7s-user"></i>
              <p>Your Profile</p>
            </a>
          </li>
          <li>
            <a href={{URL::to('/profilschedule')}}>
              <i class="pe-7s-alarm"></i>
              <p>Training Schedule</p>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="additional-panel">
      <nav class="navbar navbar-default navbar-fixed">
        <div class="container-fluid">
          <div class="navbar-header">
            <a class="navbar-brand" href="#">Employee Profil</a>
          </div>
          <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-left"></ul>
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
        <div class="panel panel-default">
          <div class="panel-heading">
            <h1 class="panel-title"> Employee Information </h1>
          </div>
          <div class="panel-body">
            <div class="row">
              @foreach ($employeeBioData as $employeeData):
              @if ($employeeData -> jenis_kelamin === "L")
                <php $image ="images/male.png"; ?>
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/male.png" class="img-circle img-responsive"> </div>
              @else
                <php $image ="images/female.png"; ?>
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="images/female.png" class="img-circle img-responsive"> </div>
              @endif
              @endforeach

                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      @foreach ($employeeBioData as $employeeData):
                      <tr>
                        <td>Name:</td>
                        <td> {{ $employeeData -> name }} <td>
                      </tr>
                      <tr>
                        <td>Username:</td>
                        <td>{{ $employeeData -> username_pegawai }}</td>
                      </tr>
                      <tr>
                        <td>Dapartement:</td>
                        <td>{{ $employeeData -> jabatan }}</td>
                      </tr>
                      <tr>
                        <td>Date Enter:</td>
                        <td>{{ $employeeData -> tanggal_masuk }}</td>
                      </tr>
                      <tr>
                        <td>Birthday:</td>
                        <td>{{ $employeeData -> tanggal_lahir }}</td>
                      </tr>
                      <tr>
                        <td>Gender:</td>
                        @if ($employeeData -> jenis_kelamin === "L")
                          <td>Laki - laki</td>
                        @else
                          <td>Perempuan</td>
                        @endif
                      </tr>
                      <tr>
                        <td>Email:</td>
                        <td><a href="#">{{ $employeeData -> email }}</a></td>
                      </tr>
                      <tr>
                        <td>Salary(Rp)</td>
                        <td>{{ $employeeData -> gaji_pegawai }}</td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- tambahin table score pegawai -->
              </div>
            </div>
          </div>
         <div class="panel panel-default">
           <div class="panel-heading">
             <h1 class="panel-title"> Training Score</h1>
           </div>
           <div class="content table-responsive">
             <table id="training-table" class="table table-hover table-striped">
               <col width="10%">
               <col width="10%">
               <col width="20%">
               <col width="20%">
               <col width="40%">
               <thead>
                   <th>No</th>
                   <th>Score</th>
                   <th>Trainer</th>
                   <th>Date</th>
                   <th>Description</th>
               </thead>
               <tbody>
                   <?php $i = 1; ?>
                   @foreach($listPelatihan as $latihan)
                       <tr>
                           <td>{{ $i }}</td>
                           <td>{{ $latihan->nilai_pelatihan}}</td>
                           <td>{{ $latihan->nama_trainer }}</td>
                           <td>{{ $latihan->waktu_pelaksanaan }}</td>
                           <td>{{ $latihan->deskripsi_pelatihan }}</td>
                       </tr>
                       <?php $i++; ?>
                   @endforeach
               </tbody>
              </table>
            </div>
          </div>
         <div class="panel panel-default">
             <div class="panel-heading">
               <h1 class="panel-title"> Project List</h1>
             </div>
             <div class="content table-responsive">
                  <table id="project-table" class="table table-hover table-striped">
                     <col width="10%">
                     <col width="20%">
                     <col width="20%">
                     <col width="40%">
                     <col width="10%">
                     <thead>
                         <th>No</th>
                         <th>Role</th>
                         <th>Start Date</th>
                         <th>Description</th>
                         <th>Scale</th>
                     </thead>
                     <tbody>
                       <?php $i = 1; ?>
                       @foreach($listProyek as $pengerjaan)
                       <tr>
                           <td>{{ $i }}</td>
                           <td>{{ $pengerjaan->peran}}</td>
                           <td>{{ $pengerjaan->waktu_pengerjaan}}</td>
                           <td>{{ $pengerjaan->deskripsi_proyek}}</td>
                           <td>{{ $pengerjaan->skala_proyek}}</td>
                       </tr>
                       <?php $i++;?>
                       @endforeach
                     </tbody>
                  </table>
             </div>
         </div>
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

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
                      <a href="#">
                          <i class=""></i>
                          <p>Your Profile</p>
                      </a>
                  </li>

                  <li>
                    <a href="#">
                      <i class=""></i>
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
                        <a class="navbar-brand" href="#">Profil Employee</a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                        </ul>

                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <a href="#">
                                    <p>Log out</p>
                                </a>
                            </li>
                            <li class="separator hidden-lg hidden-md"></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>

        <div class="main-panel">


                <div class="container-fluid">
                  <!-- taro profil pegawai disini -->


          <div class="panel panel-info">
            <div class="panel-heading">
              <h1 class="panel-title"> Informasi Pegawai </h1>
            </div>
            <div class="panel-body">
              <div class="row">
                <div class="col-md-3 col-lg-3 " align="center"> <img alt="User Pic" src="" class="img-circle img-responsive"> </div>

                <!--<div class="col-xs-10 col-sm-10 hidden-md hidden-lg"> <br>
                  <dl>
                    <dt>DEPARTMENT:</dt>
                    <dd>Administrator</dd>
                    <dt>HIRE DATE</dt>
                    <dd>11/12/2013</dd>
                    <dt>DATE OF BIRTH</dt>
                       <dd>11/12/2013</dd>
                    <dt>GENDER</dt>
                    <dd>Male</dd>
                  </dl>
                </div>-->
                <div class=" col-md-9 col-lg-9 ">
                  <table class="table table-user-information">
                    <tbody>
                      <tr>
                        <td>Nama:</td>
                        <td>Ade Surya Ramadhani</td>
                      </tr>
                      <tr>
                        <td>Username:</td>
                        <td>adesu</td>
                      </tr>
                      <tr>
                        <td>Posisi:</td>
                        <td>Web Developer</td>
                      </tr>
                      <tr>
                        <td>tanggal bergabung:</td>
                        <td>06/23/2013</td>
                      </tr>
                      <tr>
                        <td>Tanggal Lahir</td>
                        <td>01/24/1988</td>
                      </tr>
                      <tr>
                        <td>Jenis Kelamin</td>
                        <td>Laki-laki</td>
                      </tr>
                      <tr>
                        <td>Email</td>
                        <td><a href="#">info@support.com</a></td>
                      </tr>

                    </tbody>
                  </table>
                </div>

                <!-- tambahin table score pegawai -->

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

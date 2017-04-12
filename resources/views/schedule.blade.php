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
                    <li>
                        <a href={{URL::to('/employees')}}>
                            <i class="pe-7s-note2"></i>
                            <p>Employee List</p>
                        </a>
                    </li>

                    <li class="active">
                        <a href={{URL::to('/schedule')}}>
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
                        <a class="navbar-brand" href="#">Training Schedule</a>
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
            <div class="content">
                <div class="container-fluid">
                    <div class="row" style="margin-bottom: 0px;">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title">Training Schedule</h4>
                                </div>

                                <div class="content table-responsive table-full-width">
                                </div>

                                <div class="content table-responsive table-full-width">
                                    <table id="table-content" class="table table-hover table-striped display">

                                        <!-- <p id="sub-header" style="margin-bottom: 35px;"></p> -->
                                        <div style="padding-top: 15px;"></div>
                                         <div id="table-click-event" class="action-bar" style="display: none;">
                                            <ul id="action-bar-parent" class="action-bar clearfix">
                                                <li>
                                                    <a>
                                                        <span id="record-name"> &nbsp&nbsp Document</span>   
                                                    </a> 
                                                </li>

                                                <li>
                                                    <a class="edit-button" href="#">
                                                        <span class="fontawesome-edit"> Edit</span>
                                                    </a>
                                                </li>

                                                <li>
                                                    <a class="detail-button" href="#">
                                                        <span class="fa fa-info-circle" aria-hidden="true"></span>
                                                        <span> More Detail</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>


                                        <thead id="table-head">
                                            <th>Number</th>
                                            <th>Trainer</th>
                                            <th>Date</th>
                                            <th>Description</th>
                                         </thead>

                                        <tbody>
                                            <?php $i = 1; ?>
                                            @foreach($pelatihan as $latihan) 
                                                <tr>
                                                    <td>{{ $i }}</td>
                                                    <td>{{ $latihan->nama_trainer }}</td>
                                                    <td>{{ $latihan->waktu_pelaksanaan }}</td>
                                                    <td>{{ $latihan->deskripsi_pelatihan }}</td>
                                                </tr>

                                                <?php $i++; ?>
                                            @endforeach
                                        </tbody>

                                        <input id="table-checked-identifier" type="hidden" value="-1">
                                        <input id="id-pegawai" type="hidden">
                                    </table>

                                </div>
                            </div>
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
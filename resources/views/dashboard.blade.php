<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
    <link rel="icon" type="image/png" href="images/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>ULP - Direktorat Logistik ITB</title>

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
        <div class="sidebar" data-color="blue">

        <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


        	<div class="sidebar-wrapper">
                <div class="logo">
                    <img src="images/Logo_Institut_Teknologi_Bandung.png" style="height : 50px; width : 40px; float: left; margin-top: 10px; margin-right: 3px;">
                    <a class="simple-text">
                        Sistem Logistik ITB
                    </a>
                </div>

                <ul class="nav">
                    <li>
                        <a href="dashboard.html">
                            <i class="pe-7s-graph"></i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="active">
                        <a href="table.html">
                            <i class="pe-7s-note2"></i>
                            <p>Daftar Paket</p>
                        </a>
                    </li>
                </ul>
        	</div>
        </div>

        <div class="additional-panel">
            <nav class="navbar navbar-default navbar-fixed">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">Daftar Paket</a>
                    </div>

                   

                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-left">
                            <li>
                               <a href="">
                                    <i class="fa fa-search"></i>
                                    <p class="hidden-lg hidden-md">Search</p>
                                </a>
                            </li>
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
            
            <div class="content">
                <div class="container-fluid">
                    <div class="row" style="margin-bottom: 0px;">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="header">
                                    <h4 class="title" style="width:20px; border-right:2px solid #666666; margin-right:5px;" >Daftar Paket Pengadaan</h4>
                                    
                                    <select class="no-border" id="year-selector">
                                        <option>2014</option>
                                        <option>2015</option>
                                    </select>
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
                                                    <a href="#">
                                                        <span class="fontawesome-download"> Download</span>
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

                                                <li>
                                                    <a href="#">
                                                        <span class="fontawesome-remove"> Delete</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <thead id="table-head">
    							            <th>ID</th>
    							            <th>Name</th>
    							            <th>Salary</th>
    							            <th>Country</th>
    							            <th>City</th>
    								     </thead>

                                        <tbody id="2014">
                                            <tr>
                                            	<td>1</td>
                                            	<td>Dakota Rice</td>
                                            	<td>$36,738</td>
                                            	<td>Niger</td>
                                            	<td>Oud-Turnhout</td>
                                            </tr>
                                            <tr>
                                            	<td>2</td>
                                            	<td>Minerva Hooper</td>
                                            	<td>$23,789</td>
                                            	<td>Curaçao</td>
                                            	<td>Sinaai-Waas</td>
                                            </tr>
                                            <tr>
                                            	<td>3</td>
                                            	<td>Sage Rodriguez</td>
                                            	<td>$56,142</td>
                                            	<td>Netherlands</td>
                                            	<td>Baileux</td>
                                            </tr>
                                            <tr>
                                            	<td>4</td>
                                            	<td>Philip Chaney</td>
                                            	<td>$38,735</td>
                                            	<td>Korea, South</td>
                                            	<td>Overland Park</td>
                                            </tr>
                                            <tr>
                                            	<td>5</td>
                                            	<td>Doris Greene</td>
                                            	<td>$63,542</td>
                                            	<td>Malawi</td>
                                            	<td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                            	<td>6</td>
                                            	<td>Mason Porter</td>
                                            	<td>$78,615</td>
                                            	<td>Chile</td>
                                            	<td>Gloucester</td>
                                            </tr>
                                            
                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>
                                        </tbody>

                                        <tbody id="2015">

                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>

                                            <tr>
                                                <td>4</td>
                                                <td>Philip Chaney</td>
                                                <td>$38,735</td>
                                                <td>Korea, South</td>
                                                <td>Overland Park</td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Doris Greene</td>
                                                <td>$63,542</td>
                                                <td>Malawi</td>
                                                <td>Feldkirchen in Kärnten</td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>Mason Porter</td>
                                                <td>$78,615</td>
                                                <td>Chile</td>
                                                <td>Gloucester</td>
                                            </tr>
                                        </tbody>

                                        <input id="table-checked-identifier" type="hidden" value="-1">
                                    </table>

                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- <div class="additional-panel">
        <footer class="footer">
            <div class="container-fluid">
                
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <a href="#">Informatics</a>, made with love for a better web
                </p>
            </div>
        </footer>
    </div> -->

    <!-- The Modal -->
    <!--floating window for edit ta record-->
    <div id="edit-record">
        <div id="edit-record-floatWrap">
            <div id="edit-record-floatContent">
                <a class="close"><img src="images/fancybox.png" width="100%" height="100%"></a>
                <div id="edit-record-mainFloat">
                    <h2 style=" margin-left: 30px;" >Edit record</h2>
                    <!-- <form id="edit-record-field" method="POST">
                        <div class="form-group">
                            <label for="text">Record Name</label>
                            <input id="edit-record-name" type="text" class="form-control">
                        </div>
                    </form> -->
                    <div style="position: absolute; bottom: 10px; width: 100%; text-align: right; padding-right: 20px">
                        <button class="btn btn-primary btn-fill" >OK</button>
                        <button class="btn btn-default">CANCEL</button>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- floating window for show more detail of record -->
    <div id="show-more-detail">
        <div id="show-more-floatWrap">
            <div id="show-more-floatContent">
                <a class="close"><img src="images/fancybox.png" width="100%" height="100%"></a>
                <div id="show-more-mainFloat">
                    <h2 style=" margin-left: 30px;" >Record detail</h2>
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
        var tbl = document.getElementById("table-content");
        var ident = document.getElementById("table-checked-identifier");

        $('html').click(function(e) {

             //user click inside of table
            //table header will replaced by action bar
            if(e.target.tagName === "TD" || e.target.tagName === "TR") {
                if (tbl != null) {
                    tableOnclick(e.target);
                }

            } else { //user click outside table
                        //action bar will replaced by table header

                var oldIdentifierValue = document.getElementById("table-checked-identifier").value;

                if (oldIdentifierValue != -1)
                    tbl.rows[oldIdentifierValue].removeAttribute("style");

                //show table header and remove action bar
                if (ident.value != -1) {
                    showTableHead();
                    document.getElementById("table-checked-identifier").value = -1; 
                }
            }
            
        });
    	

        function tableOnclick(eventVal) {
            for (var i = 0; i < tbl.rows.length; i++) {
                for (var j = 0; j < tbl.rows[i].cells.length; j++) {
                    if (ident.value == -1) {
                        if (tbl.rows[i].cells[j].innerHTML == eventVal.innerHTML) {
                            getval(tbl.rows[i].cells[1], tbl.rows[i]);
                        }
                    }
                    else 
                        tbl.rows[i].onclick = function () { getval(this.cells[1], this); };
                 }
            }
        }

		function showTableHead() {
            //hide the action bar
            $('#table-click-event').hide();

            //show table head
            $('#table-head').show();
    	}


        //show the action bar and hide the table head
        function getval(cel, rowSelected) {

            $('#table-head').hide();
            //show the action bar
            $('#table-click-event').show();

            //show the record name to action bar 
            document.getElementById("record-name").innerHTML = cel.innerHTML;

            //get old index value of table to remove color
            var oldIdentifierValue =  document.getElementById("table-checked-identifier").value;

            document.getElementById("table-checked-identifier").value = rowSelected.rowIndex;

            if (oldIdentifierValue != -1)
                tbl.rows[oldIdentifierValue].removeAttribute("style"); //remove row table color where not selected again 

            //give color to selected row
            rowSelected.style.backgroundColor = "#baedef";
        }

        function showFloatingWindow(clickVal) {


            $('#darkOverlay').show();

            // Hidding the background page scroll 
            $("body").css("overflow", "hidden");

            //  In order to prevent hidding the floating window, as we are on the 'html' element.
            // We have to stop the click event propagation so it won't reach 'html' 
            event.stopPropagation();
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#darkOverlay').hide();
            $('#edit-record').hide();
            $('#show-more-detail').hide();
        });    
    </script>

    <script type="text/javascript">
        $(document).ready(function(){
            /*
            We use this to hide the floating window in case they click outside it.
            As html will be 'everything', we will use then an stopPropagation event.
            */
            $('html, .close').click(function(){
                $('.selection').hide();
                $('#edit-record').hide();
                $('#show-more-detail').hide();
                $("body").css("overflow", "visible");

            });

            /*
            Here we use the stopPropagation event in order to prevent hidding the 
            floating window when we click anywhere inside the #mainFloat element. 
            */
            $("#mainFloat").click(function(event){
                event.stopPropagation();
            });

            /*
            Adding the option to hide the windows by pressing the 'escape' (ESC) 
            key with the keyboard.
            */
            $(document).keyup(function(e) {
                if (e.keyCode == 27) {
                    $('#edit-record').hide();
                    $('#show-more-detail').hide(); 
                    $("body").css("overflow", "auto");
                }
            }); 

            /*
            Clicking over the .floatMenu selector, we will show the floating window.
            */
            $('.floatMenu').click(function(event){
                // Showing the floating window
                // $('#darkOverlay').show();

                // // Hidding the background page scroll 
                // $("body").css("overflow", "hidden");

                //  In order to prevent hidding the floating window, as we are on the 'html' element.
                // We have to stop the click event propagation so it won't reach 'html' 
                // event.stopPropagation();
                alert("a");
            });

        });
    </script>

    <!--show edit page-->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#table-click-event").on("click", "a.edit-button:eq(0)", function () {
                $('#edit-record').show();

                // Hidding the background page scroll 
                $("body").css("overflow", "hidden");

                //  In order to prevent hidding the floating window, as we are on the 'html' element.
                // We have to stop the click event propagation so it won't reach 'html' 
                event.stopPropagation();
            });
        });
        
    </script>

    <!--show more detail-->
    <script type="text/javascript">
        $(document).ready(function () {
            $("#table-click-event").on("click", "a.detail-button:eq(0)", function () {
                $('#show-more-detail').show();

                // Hidding the background page scroll 
                $("body").css("overflow", "hidden");

                //  In order to prevent hidding the floating window, as we are on the 'html' element.
                // We have to stop the click event propagation so it won't reach 'html' 
                event.stopPropagation();
            });
        });
        
    </script>

    <script type="text/javascript">
        $('.main-panel').scroll(function () {
            var element = $('#table-click-event'),
                originalY = element.offset().top;
            // Space between element and top of screen (when scrolling)
            // Should probably be set in CSS; but here just for emphasis
            element.css('position', 'static');

            $('.main-panel').on('scroll', function(event) {
                var scrollTop = $('.main-panel').scrollTop();

                element.stop(false, false).animate({
                    top: scrollTop < originalY
                            ? 0
                            : scrollTop - 120
                }, 0);
            });
        });
            
    </script>

    <script type="text/javascript">
        var listOfYear = [2014, 2015];

        $(document).ready(function() {
            $('#'+listOfYear[0]).show();
            for(var i=1; i < listOfYear.length; i++) {
                $('#'+listOfYear[i]).hide();
            }
        });

        $('#year-selector').change(function() {
            var selectorVal = $('#year-selector').val();
            for(var i=0; i < listOfYear.length; i++) {
                if (listOfYear[i] != selectorVal) $('#'+listOfYear[i]).hide();
                else $('#'+listOfYear[i]).show();
            }
            console.log($('#year-selector').val());
        });
    </script>

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
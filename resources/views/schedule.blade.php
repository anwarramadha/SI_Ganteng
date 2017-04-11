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
                        
                        <a class="navbar-brand" href="#">Employee List</a>
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
                                    <h4 class="title" style="width:20px; border-right:2px solid #666666; margin-right:5px;" >Employee List</h4>
                                    
                                    <select class="no-border" id="department-selector">
                                        <option>Android Developer</option>
                                        <option>Web Developer</option>
                                        <option>IOS Developer</option>
                                    </select>
                                </div>

                                <div class="content table-responsive table-full-width">
                                	
                                    <table id="table-content" class="table table-hover table-striped display">

                                            <col width="25%">
                                            <col width="25%">
                                            <col width="25%">
                                            <col width="25%">
                                            <col width="0%">

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
                    <h2 style=" margin-left: 30px;" id="employee-name-edit"></h2>

                    {{ Form::open(array('action' => 'EmployeeList@updateEmployeeScore', 'method' => 'POST'))}}
                        <div class="select-training" id="select-training">
                            <p>Pilih Pelatihan</p>
                            <div style="width: 100%; padding-bottom: 30px;">
	                            <select class="no-border"  id="training-selector">
	                                
	                            </select>
	                         </div>

                            <div class="form-group col-xs-2">
                            	<label for="input-nilai">Score</label>
                            	{{ FORM :: input('text', 'score', null, ['class' => 'form-control', 'id' => 'input-nilai'])}}
                            </div>

                            {{ FORM :: hidden('id_pegawai', null, ['id' => 'edit-score-id-pegawai'])}}
                            {{ FORM :: hidden('id_pelatihan', null, ['id' => 'edit-score-id-pelatihan']) }}
                        </div>

	                    <div style="position: absolute; bottom: 10px; width: 100%; text-align: right; padding-right: 20px">
	                        <!-- <button class="btn btn-primary btn-fill" >OK</button>	 -->
	                        {{ FORM::submit('OK', array('class' => 'btn btn-primary btn-fill')) }}
	                    </div>
                    {{ Form::close() }}
                </div>

            </div>
        </div>
    </div>

    <!-- floating window for show more detail of record -->
    <div id="show-more-detail" style="height: 700px;">
        <div id="show-more-floatWrap">
            <div id="show-more-floatContent">
                <a class="close"><img src="images/fancybox.png" width="100%" height="100%"></a>
                <div id="show-more-mainFloat" style="overflow-y: scroll; height: 500px;">
                    <h2 style=" margin-left: 30px;" id="employee-name">Record detail</h2>
                    <div class="employee-biodata">
                        <p id="employee-gender"></p>
                        <p id="employee-department"></p>
                        <p id="employee-salary"></p>
                        <p id="employee-enter"></p>
                        <p id="employee-email"></p>
                        <p id="employee-birthday"></p>
                    </div>
                    <div class="training-score-title">
                        <h4>Training Score</h4>
                        <div class="content table-responsive">
                             <table id="training-table" class="table table-hover table-striped">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                                <col width="40%">
                                <thead>
                                    <th>Score</th>
                                    <th>Trainer</th>
                                    <th>Date</th> 
                                    <th>Description</th>         
                                </thead>
                             </table>
                        </div>
                        <h4>Project List</h4>
                        <div class="content table-responsive">
                             <table id="project-table" class="table table-hover table-striped">
                                <col width="20%">
                                <col width="20%">
                                <col width="20%">
                                <col width="40%">
                                <thead>
                                    <th>Role</th>
                                    <th>Start Date</th>
                                    <th>Description</th> 
                                    <th>Scale</th>         
                                </thead>
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
                            getval(tbl.rows[i].cells[0], tbl.rows[i], tbl.rows[i].cells[4]);
                        }
                    }
                    else 
                        tbl.rows[i].onclick = function () { getval(this.cells[0], this, this.cells[4]); };
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
        function getval(cel, rowSelected, id_pegawai) {

            $('#table-head').hide();
            //show the action bar
            $('#table-click-event').show();

            //show the record name to action bar 
            document.getElementById("record-name").innerHTML = cel.innerHTML;

            //get old index value of table to remove color
            var oldIdentifierValue =  document.getElementById("table-checked-identifier").value;

            document.getElementById("table-checked-identifier").value = rowSelected.rowIndex;

            $('#id-pegawai').val(id_pegawai.innerHTML);

            if (oldIdentifierValue != -1)
                tbl.rows[oldIdentifierValue].removeAttribute("style"); //remove row table color where not selected again 

            //give color to selected row
            rowSelected.style.backgroundColor = "#baedef";
        }
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
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
            $('html, .close').click(function(e){
                if (e.target.tagName != 'SELECT' && e.target.tagName != 'TD' && e.target.tagName != 'OPTION' && e.target.tagName != 'INPUT') { 
                    $('.selection').hide();
                    $('#edit-record').hide();
                    $('#show-more-detail').hide();
                    $("body").css("overflow", "visible");   
                }
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
            element.css('position', 'relative');

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
        var listOfDepartment = ['android-developer', 'ios-developer', 'web-developer'];

        $(document).ready(function() {
            $('#'+listOfDepartment[0]).show();
            for(var i=1; i < listOfDepartment.length; i++) {
                $('#'+listOfDepartment[i]).hide();
            }
        });

        $('#department-selector').change(function() {
            var selectorVal = $('#department-selector').val();
            if (selectorVal == 'Android Developer') {
                $('#'+listOfDepartment[0]).show();
                $('#'+listOfDepartment[1]).hide();
                $('#'+listOfDepartment[2]).hide();
            }
            else if (selectorVal == 'IOS Developer') {
                $('#'+listOfDepartment[1]).show();
                $('#'+listOfDepartment[0]).hide();
                $('#'+listOfDepartment[2]).hide();
            }
            else if (selectorVal == 'Web Developer') {
                $('#'+listOfDepartment[2]).show();
                $('#'+listOfDepartment[0]).hide();
                $('#'+listOfDepartment[1]).hide();
            }
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
    <script type="text/javascript">
        var url = {!!json_encode(url('/'))!!}
        $('.detail-button').click(function() {

            var id_pegawai = $('#id-pegawai').val();

            $.get(url + '/getemployeedata/' + id_pegawai, function( data ) {
                //console.log(data);
                $.each(data, function (variable, values) {
                    if (variable == "employeeBioData") {
                        $.each(values, function(key, value) {
                            $('#employee-name').html(value.name);
                            if (value.jenis_kelamin == 'L')
                                $('#employee-gender').html("Gender &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: Laki-laki");
                            else if (value.jenis_kelamin == 'P')
                                $('#employee-gender').html("Gender &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: Perempuan");

                            $('#employee-department').html("Department : "+value.jabatan);
                            $('#employee-salary').html("Salary &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " + value.gaji_pegawai);
                            $('#employee-enter').html("Date Enter &nbsp&nbsp: " + value.tanggal_masuk);
                            $('#employee-email').html("Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " + value.email);
                            $('#employee-birthday').html("Birthday &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: " + value.tanggal_lahir);
                        });
                    }
                    else if (variable == 'listPelatihan') {
                        //remove tbody first
                        if ($('#training-table').has('tbody'))
                            $('tbody').remove('.training-table');

                        var tbody = $('<tbody></tbody>').addClass('training-table');
                        $.each(values, function(key, value) {
                            var tr = $('<tr></tr>');
                            tr.append($('<td></td>').html(value.nilai_pelatihan));
                            tr.append($('<td></td>').html(value.nama_trainer));
                            tr.append($('<td></td>').html(value.waktu_pelaksanaan));
                            tr.append($('<td></td>').html(value.deskripsi_pelatihan));


                            tbody.append(tr);
                        });
                        $('#training-table').append(tbody);
                    }
                    else if (variable == 'listProyek') {
                        //remove tbody first
                        if ($('#project-table').has('tbody'))
                            $('tbody').remove('.project-table');

                        var tbody = $('<tbody></tbody>').addClass('project-table');
                        $.each(values, function(key, value) {
                            var tr = $('<tr></tr>');
                            tr.append($('<td></td>').html(value.peran));
                            tr.append($('<td></td>').html(value.waktu_pengerjaan));
                            tr.append($('<td></td>').html(value.deskripsi_proyek));

                            switch(value.skala_proyek) {
                                case 1 :
                                    tr.append($('<td></td>').html('Easy'));      
                                    break;
                                case 2 : 
                                    tr.append($('<td></td>').html('Intermediate')); 
                                    break;
                                case 3 : 
                                    tr.append($('<td></td>').html('Hard'));
                                    break;
                            }

                            tbody.append(tr);
                        });
                        $('#project-table').append(tbody);
                    }
                });
            });
        });
    </script>

    <script type="text/javascript">
        var url = {!!json_encode(url('/'))!!}

        var scores = [];

        $('.edit-button').click(function() {
            var id_pegawai = $('#id-pegawai').val();
            $('#employee-id').val(id_pegawai);
            $.ajax({
            	async 	: false,
            	type	: 'GET',
            	url 	: url + '/getemployeedata/' + id_pegawai,
            	success	: function (data) {
            		$.each(data, function(variable, values) {
	                    if (variable == 'employeeBioData') {
	                        $.each(values, function(key, value) {
	                            $('#employee-name-edit').html(value.name);
	                        });    
	                    }
	                    else if (variable == 'listPelatihan') {
	                        if ($('#training-selector').has('option')) 
	                            $('option').remove('.training-option');

	                        $.each(values, function(key, value) {
	                            var select = $('<option></option>').html(value.nama_trainer+" -\n "+value.deskripsi_pelatihan)

	                            select.attr("value", value.id_pelatihan);
	                            select.addClass('training-option');
	                            $('#training-selector').append(select);

	                            var score = {id_pelatihan : value.id_pelatihan, score : value.nilai_pelatihan};
	                            scores.push(score);
	                        });
	                    }
	                });
            	}
            });

            $('#input-nilai').val(scores[0].score);
            $('#edit-score-id-pegawai').val(id_pegawai);
            $('#edit-score-id-pelatihan').val(scores[0].id_pelatihan);
        });

        $('#training-selector').on("select", function () {
        	console.log("h");
        });

        $('#training-selector').change(function(e) {
        	var id_pelatihan = $('#training-selector').val();
            for (i = 0; i < scores.length; i++) {
            	if (scores[i].id_pelatihan == id_pelatihan) {
            	// console.log(scores[i].score);
            		$('#input-nilai').val(scores[i].score);
            		$('#edit-score-id-pelatihan').val(scores[i].id_pelatihan);
            		break;
            	}
            }
        });
    </script>
</html>
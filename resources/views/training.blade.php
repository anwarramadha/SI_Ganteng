<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include Bootstrap Datepicker -->

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<form name="form_pegawai" action="/actionadd" method="POST">
  {!! csrf_field() !!}

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
    <input type="text" class="form-control" name="nama_trainer" placeholder="Nama Trainer"> <br>
  </div>

  <div class="input-group">
    <span class="input-group-addon"><i class="glyphicon glyphicon-calender"></i></span>
    <input type="date" class="form-control" name="date"> <br>
  </div>

  <div class="input-group">
    <label for="comment"> Deskripsi </label>
    <textarea class="form-control" rows="5" name="deskripsi" > </textarea><br>
  </div>

  <input type="radio" name="pegawai" value="Web Developer"> Web Developer <br>
  <input type="radio" name="pegawai" value="Mobile Developer"> Mobile Developer <br>
  <input type="radio" name="pegawai" value="Ios Developer"> Ios Developer <br>
  <input type="radio" name="pegawai" value="All Developer"> All Developer <br>

  <input type="submit" value="Add">
</form>

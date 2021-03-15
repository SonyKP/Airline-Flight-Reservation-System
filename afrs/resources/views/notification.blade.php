<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRS</title>
       <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/style.css')}}">
</head>
<body style="background-color: #e6eeff">

  <!---main nav--->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand"  href="/admin"> Home</a>
      <!-- <a class="navbar-brand" href="userview">view users</a> 
      <a class="navbar-brand"  href="flightdetails">flight details view </a> -->
          
      <a class="navbar-brand"  href="login"> Logout</a>      
      </div>
    </nav>
    <!---nav end--->
    <!---nav end--->
  <body>
  	<div class="container" id="homepage">




<form method="post" action="notifadd" class="form-group">
@csrf
<center>
<fieldset class="mt-3">
<h1>FLIGHT NOTIFICATIONS</h1>
Select Flight:
<select name="flightno" class="form-select" >
@foreach($data as $m=>$val)
<option value="{{$val->flightno}}">
{{$val->flightno}}
</option>
@endforeach 
</select><br><br>

<textarea placeholder="Notification" name="notification" class="form-control"></textarea><br><br>
<a href="admin" class="btn btn-secondary"> Back </a>
<input type="submit" name="submit" value="Notify" class="btn btn-primary">

</fieldset>
</center>
</form>
  </div> 
</body>
</html>


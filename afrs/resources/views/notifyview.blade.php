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
      <a class="navbar-brand"  href="/userhome">Home</a>
      <!-- <a class="navbar-brand" href="userview">view users</a>  -->
      <!-- <a class="navbar-brand"  href="flightdetails">flight details view </a> -->
          
      <a class="navbar-brand"  href="login"> Logout</a>      
      </div>
    </nav>
    <!---nav end--->
    <!---nav end--->

  	<div class="container" id="homepage">
      <body><center>
    <h1>AIRLINE BOOKING SYSTEM</h1>
    <h2>VIEW AIRLINES </h2>
  
    <table class="table table-success table-striped table-hover">
    <tr>
    <td>FLTNO:</td>
        <td>Notification</td>
        
    </tr>
    @foreach($data as $m)
    <tr>
<td>{{$m->flightno}}</td>
<td>{{$m->notification}}</td>

</tr>
@endforeach  
  </table>

</div>
</section>
<!-- main section end -->
</body>
</html>

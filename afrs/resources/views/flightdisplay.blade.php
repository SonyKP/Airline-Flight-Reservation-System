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

  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="/admin" >Home</a>
      <!-- <a class="navbar-brand" href="">Booking-details</a> -->
      <!-- <a class="navbar-brand" href="userview">view users</a> -->
      <!-- <a class="navbar-brand" href="" >Add-Notifications</a>         -->
      <a class="navbar-brand" href="login" >Logout</a>      
      </div>
    </nav>
    <!---nav end--->
<!-- main section start -->
<section class="">
<div class="row">
<body><center>
    <h1>AIRLINE BOOKING SYSTEM</h1>
    <h2>VIEW AIRLINES </h2>
    <form method="" action="" >
        @csrf
    <table class="table table-success table-striped table-hover">
    <tr>
    <td>FLTNO:</td>
        <td>FLTNAME</td>
        <td>DEPARTURE</td>
        <td>DEPARTURE TIME</td>
        <td>DEPARTURE DATE</td>
        <td>ARRIVAL</td>
        <td>ARRIVALTIME</td>
        <td>DEPARTURE DATE</td>
        <td>ECONOMY CAPACITY</td>
        <td>ECONOMY PRICE</td>
        <td>BUSSINESS CAPACITY</td>
        <td>BUSSINESS PRICE</td> 
        <th colspan="2">ACTIONS</th>
    </tr>
    @foreach($data as $m)
    <tr>
<td>{{$m['flightno']}}</td>
<td>{{$m['flightname']}}</td>
<td>{{$m['departureairport']}}</td>
<td>{{$m['departuretime']}}</td>
<td>{{$m['departuredate']}}</td>
<td>{{$m['arrivalairport']}}</td>
<td>{{$m['arrivaltime']}}</td>
<td>{{$m['arrivaldate']}}</td>
<td>{{$m['economycapacity']}}</td>
<td>{{$m['economyprice']}}</td>
<td>{{$m['bussinesscapacity']}}</td>
<td>{{$m['bussinessprice']}}</td>
<td><a href="{{"update/".$m->id}}">Update</a></td>
<td><a href="{{"delete/".$m->id}}">Delete</a></td>
</tr>
@endforeach  
  </table>
</form>

</div>
</section>
<!-- main section end -->
</body>
</html>
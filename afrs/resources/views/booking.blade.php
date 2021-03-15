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
      <a class="navbar-brand" href="userhome">Home</a>
      <a class="navbar-brand" ></a>
    <a class="navbar-brand" href="login">Logout</a>      
      </div>
    </nav>
  <!---nav end--->
<!-- main section start -->
<section class="">
<div class="container ">
<div class="row">
<h1>BOOKING</h1>
<div class="col-6 box1">
<form method="get" action="/addbooking"  class="border  border-2 border-light p-5 rounded-bottom rounded">  
@csrf          
  <div class="row mb-3">
    <div class="col-10">
    <input type="hidden" value="{{session()->get('LoggedUser')}}">
    @foreach($flights as $data)
      FLIGHTNUMBER:
      <input type="text" class="form-control" placeholder="" value="{{$data->flightno}}" name="flightno">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      FLIGHTNAME:
      <input type="text" placeholder="" value="{{$data->flightname}}" name="flightname">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      DEPARTUREAIRPORT:
      <input type="text" class="form-control" placeholder=""  value="{{$data->departureairport}}" name="departureairport">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      DEPARTUREDATE:
      <!-- <input type="date" name="date"> -->
      <input type="date" class="form-control" placeholder="" value="{{$data->departuredate}}" name="departuredate" type="date">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
       DEPARTURETIME:
       <!-- <input type="time" name="time"> -->
      <input type="time" class="form-control" placeholder=""  value="{{$data->departuretime}}" name="departuretime" type="time">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      ARRRIVALAIRPORT:
    <input type="text" class="form-control" placeholder="" value="{{$data->arrivalairport}}" name="arrivalairport">

    </div>
  </div>

  CLASS:
  <select name="class" >
    <option >Select</option>
    <option value="e">Economic class</option>
    <option value="b">Bussiness class</option>
  </select>
  <div class="row mb-3">
    <div class="col-10">
      PRICE:
    <input type="text" class="form-control" name="price" value="{{$data->bussinessprice}}">

    </div>
  </div>
  @endforeach
  
  <div class="row mb-3">
    <div class="col-10">
      <br>
      @foreach($n as $fdata)
      
      FIRST NAME:
      <input type="text" class="form-control" placeholder="" value="{{$fdata->firstname}}" name="firstname">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      <br>
      LAST NAME:
      <input type="text" class="form-control" placeholder="" value="{{$fdata->lastname}}" name="lastname">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      AGE:
      <input type="text" class="form-control" placeholder="" name="age" value="{{$fdata->age}}">
    </div>
  </div>
  @endforeach
         
  <input type="submit" class="btn btn-primary" value="BOOK NOW">
 </form>
</div>
</div>
</div>
</body>
</html>
  

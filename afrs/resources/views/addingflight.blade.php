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
      <a class="navbar-brand"  href="admin">Home</a>
      <!-- <a class="navbar-brand" href="/userview">view users</a>  -->
      <a class="navbar-brand"  href="/flightdetails">Flight Details View </a>
      <a class="navbar-brand"  href="login">Logout</a>      
      </div>
    </nav>
    <!---nav end--->
    <!-- /*******************
*@function name:adding flight home
*@function:flight details add
*@Author:REMYA
*@date:11/03/2021
*******************/ -->
<!-- main section start -->
<section class="">
<div class="container ">
<div class="row">
<div class="col-12 py-5 mt-5 text-right">
<h3>AIRLINES</h3>
</div>
<div class="col-12 box1">
<form method="post" action="/flight"  class="border  border-2 border-light p-5 rounded-bottom rounded">
@csrf
  <div class="result">
        @if(Session::get('success'))
            <div class="alert alert-success">
                 {{Session::get('success')}}
            </div>
                  @endif
                  @if(Session::get('fail'))
             <div class="alert alert-danger">
                  {{Session::get('fail')}}
             </div>
        @endif
    </div>
  <div class="row mb-3">
    <div class="col-10">
      FLIGHTNO:
      <input type="text" class="form-control" placeholder="" name="flightno"  
      required maxlength="25">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      FLIGHTNAME:
      <input type="text" class="form-control" placeholder="" name="flightname"
      reqiured maxlength="25">
    </div>
  </div>
   <div class="row mb-3">
    <div class="col-10">
      DEPARTURE AIRPORT:
      <select type="text" class="form-control" placeholder=""  name="departureairport"  
       required="required">
                                <option>--Select--</option>
                                <option>TRIVANDRUM</option>
                                <option>KANNUR</option>
                                <option>KOCHI</option>
                                <option>KOZHIKODE</option>
                                <option>BANGLOUR</option>
                                <option>CHENNAI</option>
                                <option>GOA</option>
                                <option>PUNE</option>
                                <option>JAIPUR</option>
                                <option>COIMBATOR</option>
                                <option>VISHAKAPATTANAM</option>
                                <option>AGRA</option>
     </select>
    </div>
  </div>
<div class="row mb-3">
    <div class="col-10">
      DEPARTURE TIME:
      <input type="time" class="form-control"  name="departuretime"
      required="required">
    </div>
  </div>
  <div class="row mb-3">
 <div class="col-10">
  DEPARTURE DATE:
      <input type="date" class="form-control" placeholder=""  name="departuredate"
      required="required">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      ARRIVAL AIRPORT:
      <select type="text" class="form-control" placeholder=""
       name="arrivalairport" required="required">
        <option>TRIVANDRUM</option>
                                <option>KANNUR</option>
                                <option>KOCHI</option>
                                <option>KOZHIKODE</option>
                                <option>BANGLOUR</option>
                                <option>CHENNAI</option>
                                <option>GOA</option>
                                <option>PUNE</option>
                                <option>JAIPUR</option>
                                <option>COIMBATOR</option>
                                <option>VISHAKAPATTANAM</option>
                                <option>AGRA</option>
                                </select>
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      ARRIVAL TIME:
      <input type="time" class="form-control" placeholder=""  name="arrivaltime"  
      required="required">
    </div>
  </div>
<div class="row mb-3">
    <div class="col-10">
      ARRIVAL DATE:
      <input type="date" class="form-control" placeholder=""  name="arrivaldate"  
      required="required">
    </div>
  </div>
     <div class="row mb-3">
    <div class="col-10">
      ECONOMY CAPACITY:
      <input type="text" class="form-control" placeholder=""  name="economycapacity"
      required="required">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      ECONOMY PRICE:
      <input type="text" class="form-control" placeholder=""  name="economyprice"
       required="required">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      BUSSINESS CAPACITY:
      <input type="text" class="form-control" placeholder=""  name="bussinesscapacity"
      required="required">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      BUSSINESS PRICE:
      <input type="text" class="form-control" placeholder=""  name="bussinessprice"  
      required="required">
    </div>
  </div>
  <input  type="submit" value="add" name="add" class="btn btn-primary">
  </form>
 
</div>

</div>
</div>
</section>
<!-- main section end -->
</body>
</html>
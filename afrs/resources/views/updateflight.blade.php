<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AFRS</title>
    <a class="navbar-brand" href="admin">Home</a>
       <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/style.css')}}">
</head>
<body style="background-color: #e6eeff">
<!---navbar--->
<nav class="navbar navbar-light" style="background-color: #b3f0ff">
  <div class="container-fluid">
    <span class="navbar-brand mb-0 h1">AFRS</span>
  </div>
</nav>
<!-- main section start -->
<section class="">
<div class="container ">
<div class="row">
<div class="col-12 py-5 mt-5 text-right">
<h3>AIRLINES</h3>
</div>
<div class="col-12 box1">

<form method="post" action="/update"  class="border  border-2 border-light p-5 rounded-bottom rounded">
@csrf
  <!-- <div class="result">
        @if(Session::get('success'))
            <div class="alert alert-success">
                 {{Session::get('success')}}
            </div>
                  @endif
                  @if(Session::get('fail'))
             <div class="alert alert-danger">
                  {{Session::get('fail')}}
             </div>
        </div>
        @endif -->
    
  <div class="row mb-3">
    <div class="col-10">
      FLIGHTNO:
      <input type="text" class="form-control" placeholder="" name="flightno"  
      required maxlength="25" value="{{$fdata->flightno}}">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      FLIGHTNAME:
      <input type="text" class="form-control" placeholder="" name="flightname"
      reqiured maxlength="25" value="{{$fdata->flightname}}">
    </div>
  </div>
   <div class="row mb-3">
    <div class="col-10">
      DEPARTURE AIRPORT:
      <select type="text" class="form-control" placeholder=""  name="departureairport"  
       required="required" value="{{$fdata->departureairport}}">
                                <option>--select--</option>
                                <option>TRIVANDRUM</option>
                                <option>KANNUR</option>
                                <option>KOCHI</option>
                                <option>KOZHIKODE</option>
                                <option>BANGALORE</option>
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
      <input type="time" class="form-control" name="departuretime"
      required="required" value="{{$fdata->departuretime}}">
    </div>
  </div>
  <div class="row mb-3">
 <div class="col-10">
  DEPARTURE DATE:
      <input type="date" class="form-control" placeholder=""  name="departuredate"
      required="required" value="{{$fdata->departuredate}}">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      ARRIVAL AIRPORT:
      <select type="text" class="form-control" placeholder=""
       name="arrivalairport" required="required" value="{{$fdata->arrivalairport}}">
        <option>TRIVANDRUM</option>
                                <option>KANNUR</option>
                                <option>KOCHI</option>
                                <option>KOZHIKODE</option>
                                <option>BANGALORE</option>
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
      required="required" value="{{$fdata->arrivaltime}}">
    </div>
  </div>
<div class="row mb-3">
    <div class="col-10">
      ARRIVAL DATE:
      <input type="date" class="form-control" placeholder=""  name="arrivaldate"  
      required="required" value="{{$fdata->arrivaldate}}">
    </div>
  </div>
     <div class="row mb-3">
    <div class="col-10">
      ECONOMY CAPACITY:
      <input type="text" class="form-control" placeholder=""  name="economycapacity"
      required="required" value="{{$fdata->economycapacity}}">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      ECONOMY PRICE:
      <input type="text" class="form-control" placeholder=""  name="economyprice"
       required="required" value="{{$fdata->economyprice}}">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      BUSSINESS CAPACITY:
      <input type="text" class="form-control" placeholder=""  name="bussinesscapacity"
      required="required" value="{{$fdata->bussinesscapacity}}">
    </div>
  </div>
  <div class="row mb-3">
    <div class="col-10">
      BUSSINESS PRICE:
      <input type="text" class="form-control" placeholder=""  name="bussinessprice"  
      required="required" value="{{$fdata->bussinessprice}}">
      <input type="hidden" name="id" value="{{$fdata->id}}">

    </div>
  </div>
  <input  type="submit" value="update" name="update" class="btn btn-primary">
  </form>
 
</div>

</div>
</div>
</section>
<!-- main section end -->
</body>
</html>
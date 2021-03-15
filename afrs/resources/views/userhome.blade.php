<!DOCTYPE html>
<html>
<head>
<title>AFRS_USER</title>
<link rel="stylesheet" type="text/css"  media="all">
    <meta charset=utf-8>
    <meta name="viewport" content="width=device-width,initial-scale=1">
            <!---Fontawesome--->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
            <!---Bootstrap5----->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
            <!---custom style---->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/style.css')}}">
</head>
<style>

</style>
  <!---body startshere--->
  <!-- /*******************
*@function name:userhome
*@function:userhome page
*@Author:shilpa
*@date:11/03/2021
*******************/ -->
<body>
  <!---main nav--->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
     
      <a class="navbar-brand" href="flightuser">Book-now</a>
      <a class="navbar-brand" href={{ "updateuser/".session('LoggedUser')}}>Update Profile</a>
      <a class="navbar-brand" href="notifview">Notifications</a> 
      <!--<a class="navbar-brand" href="">View Ticket</a>-->
      <a class="navbar-brand" href="login">Logout</a>      
      </div>
    </nav>
    <!---nav end--->
    <!--head nav start--->
  <div class="jumbotron text-center">
    <h1>Airline Booking System </h1>
    <p>We specialize in your air plan!</p>
  </div>
  <!---head nav end--->
 

  <!----search  section starts-->
<div class="container" id="homepage">
    <h1><b>Search Flights</b></h1>
            <br/>
    <p><b>Choose your flight option</b></p>
        <div class="btn-group btn-group-justified">    
          <div class="btn-group">
          </div>
        </div>
    <div id="search">
        <form role="form" method="post" action="searchaction">
        @csrf
              <div class="row">
                  <div class="col-6">
                      <label for="from">Date:</label>
                      <input type="date" class="form-control search-slt" placeholder="Enter your date" name=departuredate>
                  </div>
                  <div class="col-6">
                      <label for="to">From:</label>
                      <select class="form-control search-slt" id="exampleFormControlSelect1" name="departureairport">
                              <option>--FROM--</option>
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
              <div class="row">
                    <div class="col-6">
                        <label for="depart">To:</label>
                        <select class="form-control search-slt" id="exampleFormControlSelect1" name="arrivalairport">
                                <option>--TO--</option>
                                
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
                                <option>TRIVANDRUM</option>
        
                            </select>
                    </div>
              </div>  
            </br>
             <div class="btn-group btn-group-justified">
                  <div class="btn-group">
                      <button type="submit" value="search" name="submit" class="btn btn-success">search</button>
                  </div>
                </div>
            </form>
        </div></div>
    </div>
  </div>
  
</body>

</html>
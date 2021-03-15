<!DOCTYPE html>
<html>
<head>
<title>arfsuserhome</title>
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
        label
        {
            text-align:center; 
        }
        
    </style>
      <!---body startshere--->
<body>
  <!---main nav--->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
     
      <a class="navbar-brand" href="user">Home</a> 
      <a class="navbar-brand" href="">
      <a class="navbar-brand" href={{ "/notifview".session('LoggedUser')}}> Notifications</a>
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
</head>
<!-- /*******************
*@function name:updateuser
*@function:update userdetails form
*@Author:Remya
*@date:11/03/2021
*******************/ -->
<body>
    <form method="post" action="{{url('updateuser')}}">
    @csrf
        <h1>UPDATE USERS</h1>
            <table>
                <tr>
              
                    <input type="hidden" name="id" value="{{$datalist->id}}">
                </tr>
                <tr>
                <td> <label for="" class="form-label">First Name</label></td>
                    <td><input type="text"  class="form-control" name="firstname" value="{{$datalist->firstname}}" placeholder="First Name">
                    </td>
                </tr>
                <br>
                <tr>
                <td> <label for="" class="form-label">Last Name</label></td>
                    <td><input type="text" class="form-control" name="lastname" value="{{$datalist->lastname}}" placeholder="Last Name">
                    </td>
                </tr>
                <tr>
                <td> <label for="" class="form-label">gender</label></td>
                    <td><input type="text"  class="form-control" name="gender" value="{{$datalist->gender}}" placeholder="Gender">
                   </td>
                </tr>
                <tr>
                <td> <label for="" class="form-label">Age</label></td>
                    <td><input type="text"  class="form-control" name="age"  value="{{$datalist->age}}" placeholder="Age">
                   </td>
                </tr>
                <tr>
                <td> <label for="" class="form-label">Address</label></td>
                    <td><input type="text"  class="form-control" name="address"  value="{{$datalist->address}}" placeholder="Address">
                   </td>
                </tr>
                <tr>
                <td> <label for="" class="form-label">Phone no</label></td>
                    <td><input type="text"  class="form-control" name="phoneno"  value="{{$datalist->phoneno}}" placeholder="Phone Number">
                   </td>
                </tr>
                <tr>
                <td> <label for="" class="form-label"></label></td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>
    </form>
</body>
</html>
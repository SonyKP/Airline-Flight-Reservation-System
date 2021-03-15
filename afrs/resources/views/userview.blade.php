<!DOCTYPE html>
<html>
<head>
<title>arfsadminhome</title>
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
<body>
  <!---main nav--->
  <nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
      <a class="navbar-brand" href="/admin">Home</a>  
      <a class="navbar-brand" href="flightdetails">Flight details</a>
      <!-- <a class="navbar-brand" href="">booking details</a> -->
      <!-- <a class="navbar-brand" href=""> add notification</a>        -->
      <a class="navbar-brand" href="login"> Logout</a>      
      </div>
    </nav>
    <!---nav end--->
</head>
<body>
    <form method="" action="">
    @csrf
        <h3 class="text-center">USER DETAILS</h3>
            <table class="table table-bordered">
                <tr>
                    <th>FIRST NAME</th>
                    <th>LAST NAME</th>
                    <th>GENDER</th>
                    <th>AGE</th>
                    <th>ADDRESS</th>
                    <th>PHONE NUMBER</th>
                    <th>ACTIONS</th>
                </tr>
                <tr>
                        @foreach($datalist as $row)
                            <tr>
                                <td>{{$row['firstname']}}</td>
                                <td>{{$row['lastname']}}</td>
                                <td>{{$row['gender']}}</td>
                                <td>{{$row['age']}}</td>
                                <td>{{$row['address']}}</td>
                                <td>{{$row['phoneno']}}</td>
                                <td><a href="{{"delete/".$row->id}}">Delete</a></td>
                            </tr>
                         @endforeach
                </tr>
            </table>
    </form>
</body>
</html>
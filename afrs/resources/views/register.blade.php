<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title></title>
        <link rel="stylesheet" href="{{asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/bootstrap/style.css')}}">
        <style>
        body{
            background-image:url("../img/fly2.gif");
            background-size:cover;
        }
           
        </style>
    </head>
    <body class="bi1">
    <div class="container ">
<div class="row">

<!-- /*******************
*@function name:register
*@function:register page
*@Author:shilpa
*@date:11/03/2021
*******************/ -->
<div class="col-6 box1">
        
                <fieldset>
                    <form  method="post" action="/regist" class="border  border-2 border-light p-5 rounded-bottom rounded">
                    @csrf
                        <h2>REGISTRATION FORM</h2>
                        
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

                        <div class="mb-3">
                            <label for="" class="form-label">First Name</label>
                            <input type="text" name="firstname" class="form-control" placeholder="First Name" value="{{ old('firstname') }}">
                            <span style="color:red">@error('firstname'){{$message}}@enderror</span><br>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Last Name</label>
                            <input type="text" name="lastname" class="form-control" placeholder="Last Name" value="{{ old('lastname') }}">
                            <span style="color:red">@error('lastname'){{$message}}@enderror</span><br>
                        </div>
                    
                        <div class="mb-3">
                        <label for="" class="form-label">Gender</label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input class="form-check-input" name="gender" type="radio" value="male" id=male required="required">
                            <label class="form-check-label " for=male value="Male">Male</label>
                             &nbsp;&nbsp;&nbsp;&nbsp; <input class="form-check-input" name="gender" type="radio" value="female" id=female required="required">
                             <label class="form-check-label " for=female value="Female">Female</label>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Age</label>
                            <input type="text" name="age" class="form-control" placeholder="Age" value="{{ old('age') }}">
                            <span style="color:red">@error('age'){{$message}}@enderror</span><br>
                        </div>

                        <div class="mb-3">
                        
                            <label for="" class="form-label">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Address" value="{{ old('address') }}">
                            <span style="color:red">@error('address'){{$message}}@enderror</span><br>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Phoneno</label>
                            <input type="text" name="phoneno" class="form-control" placeholder="Phoneno" value="{{ old('phoneno') }}">
                            <span style="color:red">@error('phoneno'){{$message}}@enderror</span><br>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email">
                            <span style="color:red">@error('email'){{$message}}@enderror</span><br>
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder="Password">
                            <span style="color:red">@error('password'){{$message}}@enderror</span><br>
                        </div>
                        <input type="submit" class="btn btn-primary" name="register" value="Register">
                        <a href="/login" class="btn btn-success py-1">Login</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>

<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Register;//Model for Register
use App\Models\Airline;//Mdeol for Airline
use App\Models\Notification;//Model for notification
use App\Models\Booking;//Model for booking
use DB;

class AfrsController extends Controller
{
     /*******************
*@function name:regform
*@function:viewing registeration form
*@Author:sony 
*@date:09/03/2021
*******************/ 
    public function regform()
    {
        return view('register');
    }
    public function register(Request $req)
    {
            $req->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'gender'=>'required',
            'age'=>'required',
            'address'=>'required',
            'phoneno'=>'required',
             'email'=>'required|email|unique:registers',
            'password'=>'required|min:6|max:16'
            ]);
    
            $user=new Register;
            $user->firstname=$req->firstname;
            $user->lastname=$req->lastname;
            $user->gender=$req->gender;
            $user->age=$req->age;
            $user->address=$req->address;
            $user->phoneno=$req->phoneno;
            $user->email=$req->email;
            $user->password=Hash::make($req->password);
            $query = $user->save();
            if($query)
            {
                return back()->with('success','Successfully Registered');
            }
            else
            {
                return back()->with('fail','Something went wrong');
            }    
    }
     /*******************
*@function name:login
*@function:Login & view
*@Author:Sony K P 
*@date:10/03/2021
*******************/ 
    public function login()
    {
        return view('login');
    }
    function viewdashboard(Request $req)
    {

      $data=['LoggedUser'=>Register::where('id','=',Session('LoggedUser'))->first()];
        return view('userhome',$data);
    }
    function check(Request $req)
    {
        $req->validate([
            'email'=>'required|email',
            'password'=>'required'
            ]);
            $email=$req->email;
            $pass=$req->password;
            if($email =='admin@gmail.com' && $pass =='admin') 
            {
                return view('adminhome');
            }    
            $userinfo=Register::where('email',$email)->first(); 
            if(!$userinfo)
            {
                return back()->with('fail','We cant recognize email');
            }   
            else
            {
                if(Hash::check($req->password,$userinfo->password))
                {
                    $req->session()->put('LoggedUser',$userinfo->id);
                    $data=['LoggedUserinfo'=>Register::where('id','=',Session('LoggedUser'))->first()];
                    return view('userhome',$data);
                }
                  
            }
    }
    /*******************
*@function name:userview
*@function:viewing users by admin
*@Author:sony 
*@date:10/03/2021
*******************/ 
function userview()
{
    $data=Register::all();
    return view('userview',['datalist'=>$data]);

}
  /*******************
*@function name:delete user
*@function:deleting users by admin
*@Author:sony 
*@date:10/03/2021
*******************/ 
function deleteuser($id)
{
    $data=Register::find($id);
    $data->delete();
    return redirect('userview');
}
  /*******************
*@function name:updateview
*@function:update form view by users
*@Author:sony 
*@date:11/03/2021
*******************/ 
public function updateView($id)
{
    $data=Register::find($id);
    
   return view('updateuser',['datalist'=>$data]);
}
 /*******************
*@function name:updateuser
*@function:update user details by user
*@Author:sony 
*@date:11/03/2021
*******************/ 

function updateuser(Request $req)
{
    $data=Register::find($req->id);
    $data->firstname=$req->firstname;
    $data->lastname=$req->lastname;
    $data->gender=$req->gender;
    $data->age=$req->age;
    $data->address=$req->address;
    $data->phoneno=$req->phoneno;
    $data->save();
    return redirect('userhome');
}
     /*******************
*@function name:flightform
*@function:viewing addflightdetails form
*@Author:keerthi
*@date:09/03/2021
*******************/ 
    public function flightform()
    {
        return view('addingflight');
    }
     /*******************
*@function name:addflight
*@function:adding addflightdetails form
*@Author:keerthi 
*@date:10/03/2021
*******************/ 
    function addflight(Request $req)
    {
            $flight=new Airline;
            $flight->flightno=$req->flightno;
            $flight->flightname=$req->flightname;
            $flight->departureairport=$req->departureairport;
            $flight->departuretime=$req->departuretime;
            $flight->departuredate=$req->departuredate;
            $flight->arrivalairport=$req->arrivalairport;
            $flight->arrivaltime=$req->arrivaltime;
            $flight->arrivaldate=$req->arrivaldate;
            $flight->economycapacity=$req->economycapacity;
            $flight->economyprice=$req->economyprice;
            $flight->bussinesscapacity=$req->bussinesscapacity;
            $flight->bussinessprice=$req->bussinessprice;
            $query = $flight->save();
        if($query)
        {
            return back()->with('success','Successfully addded flight details');
        }
        else
        {
            return back()->with('fail','Something went wrong');
        }    
    }
 /*******************
*@function name:viewflightdetails
*@function:viewing flightdetails 
*@Author:keerthi 
*@date:10/03/2021
*******************/ 
    function viewflightdetails()
        {
            $n=Airline::all();
            return view('flightdisplay',['data'=>$n]);
        }
 /*******************
*@function name:deleteflight
*@function:viewing flightdetails 
*@Author:keerthi 
*@date:10/03/2021
*******************/ 
    function deleteflight($id)
    {   
        $data=Airline::find($id);
        $data->delete();
        return redirect('flightdetails');
    }
/*******************
*@function name:deleteflight
*@function:viewing flightdetails 
*@Author:keerthi 
*@date:10/03/2021
*******************/ 
    function updateflight($id)
    {
        $data=Airline::find($id);
        return view('updateflight',['fdata'=>$data]);
    }
    function updateFlightAction(Request $req)
    {
       
        $data=Airline::find($req->id);
        $data->flightno=$req->flightno;
        $data->flightname=$req->flightname;
        $data->departureairport=$req->departureairport;
        $data->departuretime=$req->departuretime;
        $data->departuredate=$req->departuredate;
        $data->arrivalairport=$req->arrivalairport;
        $data->arrivaltime=$req->arrivaltime;
        $data->arrivaldate=$req->arrivaldate;
        $data->economycapacity=$req->economycapacity;
        $data->economyprice=$req->economyprice;
        $data->bussinesscapacity=$req->bussinesscapacity;
        $data->bussinessprice=$req->bussinessprice;
        $data->save();
        return redirect("flightdetails");

    }
/*******************
*@function name:flightdetailsusers
*@function:viewing flightdetails for users
*@Author:keerthi 
*@date:11/03/2021
*******************/ 
function flightdetailsusers()
{
    $n=Airline::all();
    return view('flightviewuser',['data'=>$n]);
}
     /*******************
*@function name:USERHOME
*@function:VIEWING USERHOME 
*@Author:keerthi
*@date:11/03/2021
*******************/ 
public function userhome()
{
    return view('userhome');
}

 /*******************
*@function name:searchaction
*@function:searching flight
*@Author:keerthi
*@date:11/03/2021
*******************/
public function searchaction(Request $req)
{
    $dep=$req->departureairport;
    $dest=$req->arrivalairport;
    $depdate=$req->departuredate;
    $n = DB::table('airlines')
        ->where("departureairport",$dep)
        ->where("arrivalairport",$dest)
        ->where("departuredate",$depdate)
        ->get();
        return view('flightviewuser',['data'=>$n]);  
}
/*******************
*@function name:notification
*@function:adding notification
*@Author:keerthi
*@date:13/03/2021
*******************/
public function notification()
{
    $n=Airline::all();
    return view('notification',['data'=>$n]);
}
function notifyadd(Request $req)
{
    $f=new Notification;
    $f->notification=$req->notification;
    $f->flightno=$req->flightno;
    $query=$f->save();
    if($query)
    {
        return back()->with('success','successfully added notification');
    }
    else{
        return back()->with('fail','Something went wrong');
    }
}
 /*******************
*@function name:notifv
*@function:viewing notification
*@Author:keerthi
*@date:11/03/2021
*******************/
public function notifv()
{
    $n=Notification::all();
    return view('notifyview',['data'=>$n]);
}
 /*******************
*@function name:booking
*@function:perform booking
*@Author:sony k p
*@date:11/03/2021
*******************/

function bookingaction($id)
{
    $uid=session()->get('LoggedUser');
    //$n=Register::find($uid);
    $n=DB::table('registers')
        ->where('id',$uid)
        ->get();
    $flights=DB::table('airlines')
            ->where('id',$id)
            ->get();
    
    return view('booking',compact('n','flights'));
}
/*******************
*@function name:addbooking
*@function:perform booking insertion and seat count decrement
*@Author:keerthi
*@date:11/03/2021
*******************/

function addbooking(Request $req)
    {
        if($req->class == 'b')
        {
                $page = DB::table('airlines')
                     ->where('flightno','=',$req->flightno)
                ->get();
                foreach($page as $row)
                {
                 $availa=$row->bussinesscapacity;
                 $amount=$row->bussinessprice;
                }
                Airline::where('flightno', $req->flightno)->update(array('bussinesscapacity'=>$availa-1));    
               
        }   
        else if($req->class =='e')
        {
            $page = DB::table('airlines')
            ->where('flightno','=',$req->flightno)
       ->get();
           
       foreach($page as $row){
            $availa=$row->economycapacity;
            $amount=$row->economyprice;
                }
            Airline::where('flightno', $req->flightno)->update(array('economycapacity' => $availa-1)); 
         }
         if($req->age>60)
         {
             $total=$amount-500;
         }
         else
         {
             $total=$amount;
         }
            $book=new Booking;    
            $book->flightno=$req->flightno;
            $book->flightname=$req->flightname;
            $book->departureairport=$req->departureairport;
            $book->departuredate=$req->departuredate;
            $book->departuretime=$req->departuretime;
            $book->arrivalairport=$req->arrivalairport;
            $book->class=$req->class;
            $book->price=$total;
            $book->firstname=$req->firstname;
            $book->lastname=$req->lastname;
            $book->age=$req->age;
            $query = $book->save();
        if($query)
        {
            return redirect('payment');
        }
          
    }
/*******************
*@function name:bookview
*@function:viewing bookingdetails
*@Author:keerthi
*@date:13/03/2021
*******************/
public function bookview()
{
    
    $n=Booking::all();
   // var_dump($n);
    return view('bookingview',['bdata'=>$n]);
}
/*******************
*@function name:ticketgenerate
*@function:ticketgenerate
*@Author:keerthi
*@date:13/03/2021
*******************/
function ticketview($id)
    {   
       $data=Booking::find($id);
       dd($data);
        return view('ticket',['bdata'=>$data]);
        
    }
}

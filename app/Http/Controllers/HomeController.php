<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
    	return view ('index');
    }
    
    public function display(Request $request){
    	$name = $request -> input('name');
    	$fathername = $request -> input('father_name');
    	$address = $request -> input('address');
    	$gender = $request -> input('gender');
    	$state = $request -> input('state');
    	$city = $request -> input('city');
    	$birth_date = $request -> input('birth_date');
    	$pincode = $request -> input('pincode');
    	$course = $request -> input('course');
    	$email = $request -> input('email');
    	return view ('display',['name' => $name,'father_name' => $fathername,'address' => $address, 'gender' => $gender, 'state' => $state, 'city' => $city, 'birth_date' => $birth_date, 'pincode' => $pincode, 'course' => $course, 'email' => $email]);
    }
}

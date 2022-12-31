<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Auth;
use Session;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin_login');
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
      
        $email = $request->email;
        $password = $request->password;
        if(Auth::attempt(['email' => $email, 'password' => $password])){
            return redirect('dashboard');
        }else{
            Session::put('email',$request->email);
            Session::put('password',$request->password);

            $request->session()->flash('error','Please Enter Valid Credentials');

            return redirect()->back();
        }   
    }

   
    public function show()
    {
       return view('admin_pannel.dashboard');
    }
}

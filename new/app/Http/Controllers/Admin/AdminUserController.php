<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AdminUserRequest;

class AdminUserController extends Controller
{
    public function  __construct()
    {
        $this->middleware('guest:admin')->except('logout');
    }

    public function index(){
        return view('admin.login');
    }

    public function store(AdminUserRequest $request){
        //Validate the user
        // $request->validate([
        //     'email'=>'required|email',
        //     'password'=>'required'
        // ]);

        //Login the user in
        $credentials=$request->only('email','password');

       if(! Auth::guard('admin')->attempt($credentials)){
           return back()->withErrors([
               'massage'=>'უზერი ან პაროლი არასწორია. გთხოვთ ცადოთ თავიდან'
           ]);
       }
        //Sesion message
        session()->flash('msg','you have been logged in');

        //redirect
        return redirect('/admin');

    }

    public function logout(){
        auth()->guard('admin')->logout();

        session()->flash('msg','თქვენ უზერი გამოვიდა სისტემიდან');

        return redirect('/admin/login');
    }


}

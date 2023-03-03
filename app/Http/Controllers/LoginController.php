<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
class LoginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }
    public function login(Request $request)
    {
        $this->validate($request,[
            'email' => 'required|string|email',
            'password' => 'required|string',
        ]);
        $email = $request->input('email');
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect()->route('product.list');
        }else{
            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        // $email = $request->input('email');
        // $password = $request->input('password');
        // if (Auth::attempt([
        //     'Email' => $email,
        //     'Password' => $password,
        // ])) {
        //     $request->session()->regenerate();
        //     $user = User::where('Email',$email)->first();
        //     Auth::login($user);
        //     return redirect()->route('admin.index');
        // }
        // $user = User::where('Email',$email)->first();
        // if($user){
        //     $request->session()->regenerate();
        //     return redirect()->route('admin.index');
        // }
        // return redirect()->route('admin.index');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
    public function getFormAdmin()
    {
        return view('admin/index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

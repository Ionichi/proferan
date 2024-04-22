<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('auth.register');
    }

    public function register(Request $request) 
    {
        $validator = Validator::make($request->all(), [
            'fullname' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|confirmed',
        ]);

        if($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }

        DB::beginTransaction();
        try {
            $user = new User();
            $user->fullname = $request->fullname;
            $user->email = $request->email;
            $user->password = $request->password;
            $user->save();

            DB::commit();

            return redirect('/auth/login')->with('success', 'User created successfully!');
        } catch (\Exception $e) {
            DB::rollBack();
            
            return redirect()->back()->withInput()->withErrors($e->getMessage());
        }
    }
}

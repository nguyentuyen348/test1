<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register(Request $request)
    {
        DB::beginTransaction();
        try {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();
            DB::commit();
            $data = [
                'status' => 'success',
                'user' => $user,
                'message' => 'Register success!'
            ];
            return response()->json($data);
        } catch (Exception $exception) {
            DB::rollBack();
            $data = [
                'status' => 'error',
                'message' => $exception->getMessage()
            ];
            return response()->json($data);
        }
    }

    public function login(Request $request)
    {
        $email=$request->email;
        $password=$request->password;

        $data= [
            'email'=>$email,
            'password'=>$password
        ];
        if (Auth::attempt($data)){
            return response()->json([
                'status'=>'success',
                'message'=>'Login success',
            ]);
        }
        else{
            return response()->json([
                'status'=>'error',
                'message'=>'Login error',
            ]);
        }
    }

    public function logout()
    {
        try {
            auth()->logout();
            return response()->json([
               'status'=>'success',
               'message'=>'Logout success !'
            ]);
        }
        catch (Exception $exception){
            return response()->json([
               'status'=>'error',
               'message'=>'Error !'
            ]);
        }
    }
}

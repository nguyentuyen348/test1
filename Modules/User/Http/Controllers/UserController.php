<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Hash;
use Modules\Product\Entities\Product;
use Modules\User\Entities\User;

class UserController extends Controller
{
    public function register(User $user,Request $request)
    {
       $user->name=$request->name;
       $user->email=$request->email;
       $user->password= Hash::make($request->password);
       $user->save();
       return response()->json('Successfully');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;
use App\Http\Resources\UserCollection;

class UserController extends Controller
{
    public function index(Request $request, $id)
   {
       $user = User::find($id);

       return new UserResource($user);
   }

   public function list(Request $request)
   {
       $users = User::all();

       return view('welcome', compact('users'));
   }
}

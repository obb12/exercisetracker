<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Exercise;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function create(Request $request)
    {
      $user = new User;
      $user->username = $request->username;
      $user->save();
      //return $user->select('username' , 'id as _id');

      return response()
         ->json(['username' => $user->username, '_id' => $user->id]);
    }
    public function createexercise(Request $request)
    {
      $excercise = new Exercise;
      $excercise->user_id = $request->userId;
      $excercise->description = $request->description;
      $excercise->duration = $request->duration;
      $excercise->date   = $request->date;
      $excercise->save();
      return $excercise;

    }
    public function showlog(Request $request)
    {
      $excercise = Exercise::where('user_id', $request->userId)->get();
      return $excercise;
    }
    public function showusers () {
      return User::select('username' , 'id as _id')->get();
    }

}

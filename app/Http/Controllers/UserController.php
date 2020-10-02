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
      $request->validate([
       'username' => 'required',
   ]);
      $user->username = $request->username;
      $user->save();
      //return $user->select('username' , 'id as _id');

      return response()
         ->json(['username' => $user->username, '_id' => $user->id]);
    }
    public function createexercise(Request $request)
    {
      $request->validate([
       'userId' => 'required',
       'description' => 'required',
   ]);
      $excercise = new Exercise;
      $excercise->user_id = $request->userId;
      $excercise->description = $request->description;
      $excercise->duration = $request->duration;
      $excercise->date   = $request->date;
      $excercise->save();
      $user = User::where('id',$excercise->user_id)->first();
      return response()
         ->json(['username' => $user->username,'description'=> $excercise->description,'duration' => $excercise->duration, '_id' => $user->id,'date' => $excercise->date->format('D M d Y')]);
    }
    public function showlog(Request $request)
    {
if ($request->from && $request->to) {
  // code...
  $from = date($request->from);
  $to = date($request->to);
  $limit = $request->has('limit') ? $request->get('limit') : 10;

  $excercise = Exercise::where('user_id', $request->userId)->limit($limit)->whereBetween('date', [$from, $to])->select('description' , 'duration', 'date')->get();
}
else {
  // code...
  $limit = $request->has('limit') ? $request->get('limit') : 10;

  $excercise = Exercise::where('user_id', $request->userId)->limit($limit)->select('description' , 'duration', 'date')->get();

}

      $user = User::find($request->userId);
      return response()
         ->json(['_id' => $request->userId,'username' =>$user->username,'count' => count($excercise),'log'=>$excercise]);
    }
    public function showusers () {
      return User::select('username' , 'id as _id')->get();
    }

}

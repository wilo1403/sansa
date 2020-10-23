<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;
use TCG\Voyager\Models\User;

class TodoController extends Controller
{
    public function show($user_id){
        $datatodo = Todo::where('user_id', $user_id)->get();
        return $datatodo;
    }

    public function users(){
        $users = User::all();
        return $users;
    }
}

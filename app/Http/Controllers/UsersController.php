<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {

        $sortBy = \Request::get('sortBy');
        $params = compact('sortBy');

       $users = User::orderBy($params['sortBy'],'ASC')->paginate(50);
       return view('users.index',compact('users'));
    }


}

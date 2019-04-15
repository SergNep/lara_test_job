<?php

namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    /**
     * Показать профиль данного пользователя.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {


//        return view('user.profile')->with([
//            'id' => 'Jeffrey',
//            'last' => 'Way'
//        ]);


        return view('user.profile', ['id' => $id]);
        //return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
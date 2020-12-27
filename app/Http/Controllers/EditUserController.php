<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\EditUserRequest;
use App\Models\User;
use App\Models\Order;
use Session;

class EditUserController extends MainController
{

    public function index()
    {
        $user = User::getUser();
        $orders = Order::getUserOrder($user[0]->id);
        self::$data['title'] .= $user[0]->name .  ' Profile Details' ;
        self::$data['user'] = $user;
        self::$data['orders'] = $orders;
        return view('content.profile', self::$data);
    }

    public function create()
    {

    }

    public function store(Request $request)
    {

    }

    public function show($id)
    {
    }

    public function edit($id)
    {
        $user = User::getUser();
        self::$data['title'] .= $user[0]->name .  ' Edit Profile' ;
        self::$data['user'] = $user;
        return view('forms.edit_profile', self::$data);
    }

    public function update(EditUserRequest $request, $id)
    {
        User::editUser($request,$id);
        return redirect('user/profile');

    }

    public function destroy($id)
    {

    }
}

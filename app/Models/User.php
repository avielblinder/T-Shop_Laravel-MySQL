<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use DB, Session, Hash, Image;

class User extends Model
{
    use HasFactory;

    static public function validate($request){
        $valid = false;
        $email = $request['email'];
        $password = $request['password'];
        $sql = "SELECT * FROM users u "
                ."JOIN users_roles r ON u.id = r.uid "
                ."WHERE u.email = ? ";
        $user = DB::select($sql,[$email]);//if valid return array with the user if invalid return empty array

        if($user){
            $user = $user[0];

            if(Hash::check($password , $user->password)){
                $valid = true;

                if($user->role == 6) Session::put('is_admin', true);
                Session::put('user_id', $user->id);
                Session::put('user_name', $user->name);
                Session::put('user_pi', $user->profile_image);
                Session::flash('bm', $user->name . ' welcome back!');
            }
        }
        return $valid;
    }
    static public function save_new($request){
        $user = new self();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);

        if(!empty($request->file('profile_image')) && $request->file('profile_image') != null){
            $image = $request->file('profile_image');
            $new_name =  date('Y.m.d.H.i.s') . '.' . $image->getClientOriginalName();
            $image->move(public_path('../resources/images'),$new_name);
            $user->profile_image = $new_name;
        }else{
            $user->profile_image = 'default-pic.jpg';
        }
        $user->save();
        $uid = $user->id;
        DB::insert("INSERT INTO users_roles VALUE($uid,7)");
        Session::put('user_id', $uid);
        Session::put('user_name', $user->name);
        Session::put('user_pi', $user->profile_image);
        Session::flash('bm', $user->name . ' welcome to T-Shop!');
    }

    static public function getUser(){
        $uid = Session::get('user_id');
        $sql = "SELECT * FROM users u WHERE u.id = ?";
        $user = DB::select($sql,[$uid]);
        return $user;
    }

    static public function deleteImage($id){
        $user = DB::select("SELECT * FROM users WHERE id=$id");
        $img = $user[0]->profile_image;
        $img_path = public_path('../resources/images/') . $img;

        if($img != 'default-pic.jpg'){
            unlink($img_path);
        }
    }

    static public function editUser($request, $id){
        $user = self::find($id);
        $user->name = $request['name'];
        $user->email = $request['email'];

        if(!empty($request['password']) && $request['password'] != null){
            $user->password = bcrypt($request['password']);
        }

        if(!empty($request->file('profile_image')) && $request['profile_image'] != null){
            self::deleteImage($id);
            $image = $request->file('profile_image');
            $new_name =  date('Y.m.d.H.i.s') . '.' .$image->getClientOriginalName();
            $image->move(public_path('../resources/images'),$new_name);
            $user->profile_image = $new_name;
        }
        $user->save();
        $uid = $user->id;
        DB::insert("INSERT INTO users_roles VALUE($uid,7)");
        Session::put('user_id', $uid);
        Session::put('user_name', $user->name);
        Session::put('user_pi', $user->profile_image);
        Session::flash('bm', 'Profile has updated.');
    }
}

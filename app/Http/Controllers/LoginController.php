<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validatecb;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    //Cách 1 Sử dụng form request
    public function check_login(Validatecb $request){
    }
//    Cách 2 Sử dụng code thuần
//    public function check_login1(Request $request){
//        $msg = '';
//        if($request->password==null&&$request->username==null){
//            $msg .= "Vui lòng nhập tài khoản mật khẩu";
//            return view('Login',compact('msg'));
//        }
//        else if($request->password==null){
//            $msg .= "Vui lòng nhập mật khẩu";
//            return view('Login',compact('msg'));
//        }
//        else if($request->username==null){
//            $msg .= "Vui lòng nhập tài khoản";
//            return view('Login',compact('msg'));
//        }
//        else{
//            return view('welcome');
//        }
//    }
//    Cách 3 Sử dụng validate laravel
//    public function check_login2(Request $request){
//        $request->validate([
//            'username' => 'required',
//            'password' => 'required',
//        ]);
//    }
}

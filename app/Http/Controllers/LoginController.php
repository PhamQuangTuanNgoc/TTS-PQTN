<?php

namespace App\Http\Controllers;

use App\Http\Requests\Validatecb;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        User::find(10)->delete();
        return redirect()->back();
    }
    public function showregister(){
        return view('Register');
    }
    public function register(Validatecb $request){
        $user = new User();
        $user->name = $request->input('username') ;
        $user->email = $request->input('email') ;
        $user->password = bcrypt($request->input('password'));
        $user->save();
        Session::flash('success', 'Đăng kí thành công');
        return redirect()->back();
    }
    //Cách 1 Sử dụng form request
    public function check_login(Validatecb $request){
        $user = [
            'email' => $request->email,
            'password' =>$request->password
        ];
        if(Auth::attempt($user)){
            Session::flash('success', 'Đăng nhập thành công');
            $username= Auth::user()->name;
            return view('welcome',compact('username'));
        }
        else{
            Session::flash('error', 'Đăng nhập thất bại');
            return redirect()->back();
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('showlogin');
    }
    public function showuserchange(){
        $user = Auth::user();
        return view('showuserchange',compact('user'));
    }
    public function userchange(Request $request){
        $user = Auth::user();
        DB::table('users')->where('id',$user->id)->update([
            'name'=>$request->username,
            'email'=>$request->email,
        ]);
        Session::flash('success-change', 'Update thành công');
        return redirect()->back();
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
    //Cách 3 Sử dụng validate laravel
//    public function check_login2(Request $request){
//        $model = new User();
//        $data = $model::onlyTrashed()->get();
//        foreach ($data as $value){
//            if($value->password==$request->password && $value->email==$request->username){
//                $request->validate( [
//                    'password' => Rule::unique('users','password')->ignore($value->id),
//                    'username' => Rule::unique('users','email')->ignore($value->id),
//                ]);
//                return redirect()->back();
//            }
//            else if($value->password!=$request->password && $value->email!=$request->username&&$request->password!=null&&$request->username){
//                echo 'sai';
//            }
//            else{
//                $request->validate([
//                    'username' => 'required',
//                    'password' => 'required',
//                ]);
//                return redirect()->back();
//            }
//        }
//    }
}

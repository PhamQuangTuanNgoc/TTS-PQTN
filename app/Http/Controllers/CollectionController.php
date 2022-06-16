<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Collection;
use App\Models\Post;
use App\Scopes\AncientScope;

class CollectionController extends Controller
{
    public function index(){
//        $post = Post::has('comments.votes')->get();
//        $post = Post::find(1)->comments()->where('status',20)->first();
//        dd($post);
        $user = User::date()->get();
        dd($user);
//        //Global scope
//        $user = User::withoutGlobalScope(AncientScope::class)->get();
//        dd($user);

        /* Cách 1 */
//        $collection = Collection::make(User::all());
        /*Cách 2*/
//        $collection = collect(User::all());
////    Câu 1 in ra tất cả
//        echo($collection);
////    Câu 2 in ra theo một tên bất kì
//        $filtered = $collection->filter(function ($value, $key) {
//            return $value->email == 'tuanngoc@gmail.com';
//        });
//        echo $filtered;
////     Câu 3 sắp xếp tăng dần
//        echo $collection->sortBy('created_at');
////     Câu 4 in ra theo một id bất kì
//        $filtered = $collection->filter(function ($value, $key) {
//            return  $value->id == 12;
//        });
//        echo $filtered;
//     Câu 4 in ra theo một ngày bất kì
//        $filtered = $collection->filter(function ($value, $key) {
//            return  $value->created_at == '2022-06-11 10:12:04';
//        });
//        echo $filtered;
    }
}

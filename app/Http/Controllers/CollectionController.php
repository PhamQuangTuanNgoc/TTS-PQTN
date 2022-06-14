<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Collection;

class CollectionController extends Controller
{
    public function index(){
        /* Cách 1 */
        $collection = Collection::make(User::all());
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
//     Câu 4 in ra theo một id bất kì
        $filtered = $collection->filter(function ($value, $key) {
            return  $value->id == 12;
        });
        echo $filtered;
//     Câu 4 in ra theo một ngày bất kì
//        $filtered = $collection->filter(function ($value, $key) {
//            return  $value->created_at == '2022-06-11 10:12:04';
//        });
//        echo $filtered;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\products;
use App\Models\cart;
use Session;
class productController extends Controller
{
    //
    function index(){
        $data = products::all();
        return view('products',['products'=>$data]);
    }
    function detail ($id){
        $data = products::find($id);
        return view('detail',['product'=>$data]);
    }
    function search (Request $rq){
        //return $rq->input();
          $data = products::where('name', 'like', '%'. $rq->input('query').'%')->get();
          return view('search',['products'=>$data]);
        }

    function addToCart (Request $rq){
        if ($rq->session()->has('user')){
            $cart = new cart;
            $cart->user_id = $rq->session()->get('user')['id'];//get id user from session
            $cart->product_id = $rq->product_id;//get id product from form 'name=idpro'
            $cart->save();
            return redirect ('/');
        } else {
            return redirect ('login');
        }
        }
    static function cartItem (){
        $userId = Session::get('user')['id'];
        return cart::where('user_id',$userId)->count();//where 2 are equals 
    }

    }


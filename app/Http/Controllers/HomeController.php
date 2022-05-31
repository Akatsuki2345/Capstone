<?php

namespace App\Http\Controllers;

use Illuminate\support\Facades\Auth;

use Illuminate\Http\Request;

use Illuminate\support\Facades\DB;

use App\Models\User;

use App\Models\Product;

use App\Models\Cart;

use App\Models\Order;

class HomeController extends Controller
{
    public function redirect(){

        $usertype=Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.home');

        }

        else{

            $data=product::paginate(5);


            $user=auth()->user();

            $count=cart::where('phone', $user->phone)->count();


            return view('user.home', compact('data', 'count'));

            
        }
    }

    public function index(){
        
        if(Auth::id()){
            return redirect('redirect');
        }

        else{

            $data=product::all();


            return view('user.home', compact('data'));
        }
    }

    public function showproduct(){

        $data=product::all();

        return view('user.product', compact('data'));
    }

    public function productdetails($id){

        $data=product::find($id);
        

        return view('user.productdetails', compact('data'));
    }


    public function addcart(Request $request, $id){

        if(Auth::id()){

            $user=auth()->user();
            $product=product::find($id);
            $cart=new cart;

            $cart->name=$user->name;
            $cart->phone=$user->phone;
            $cart->address=$user->address;
            $cart->product_title=$product->title;
            $cart->price=$product->price;
            $cart->quantity=$request->quantity;

            $cart->save();


            return redirect()->back()->with('message', 'Product Added to Cart Successfully!!');


        }

        else{
            return redirect('login');
        }
    }

    public function showcart(){

        $user=auth()->user();

        $cart=cart::where('phone', $user->phone)->get();

        $count=cart::where('phone', $user->phone)->count();

        return view('user.showcart', compact('count', 'cart'));
    }


    public function deletecart($id){

        $data=cart::find($id);

        $data->delete();


        return redirect()->back()->with('message', 'Item deleted successfully!!');
    }

    public function confirmorder(Request $request){

        $user=auth()->user();

        $name=$user->name;

        $address=$user->address;

        $phone=$user->phone;

        foreach ($request->productname as $key => $productname) {
            
            $order=new order;

            $order->product_name=$request->productname[$key];

            $order->price=$request->price[$key];

            $order->quantity=$request->quantity[$key];

            $order->name=$name;
            
            $order->phone=$phone;
            

            
            $order->address=$address;

            $order->status='Not delivered';


            $order->save();

        }

        DB::table('carts')->where('phone', $phone)->delete();

        return redirect('showorder')->with('message', 'Item Ordered successfully!!');

    }

    public function showorder(){

        $user=auth()->user();

        $order=order::where('phone', $user->phone)->get();
        

        return view('user.showorder', compact('order'));

    }
}

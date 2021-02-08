<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CartController extends Controller
{

    public function cart(){
        return view('cart.items');
    }

    public function singleItem($id) 
    {
        $categorys = Product::select('stock_category')->distinct()->get();
        
        $Orders = Order::where('customer_name', Auth::user()->name)->first();
        
        $products = product::find($id);
        
                return view('cart-item',
                 ['products' => $products,
                 'categorys' => $categorys,
                 'Orders' => $Orders]);
    }






            public function cartItem()
            {
                if(!auth()->user()){
                    return redirect('/')->with('error', 'Unauthorized Page');
                }

                if(!session('cart')){
                    return redirect('/');
                }
              
                $categorys = Product::select('stock_category')->distinct()->get();
                
                $Orders = Order::where('customer_name', Auth::user()->name)->first();
                
               if($Orders){
                   return redirect ('/');
               }

                $products = product::all();
                
                        return view('all-cart-item',
                         ['products' => $products,
                         'categorys' => $categorys,
                         'Orders' => $Orders]);
            }







public function addToCart($id) {
    
            $Course = Course::find($id);
                    
            $cart = session()->get('cart');
       
               
            // if cart is empty then this the first product
            if(!$cart) {
    
                $cart = [
                        $id => [
                            "name" => $Course->course_title,
                            "course_id" => $Course->id,
                            "quantity" => 1,
                            "price" => $Course->course_price,
                            "photo" => $Course->course_photo,
                            
                        ]
                ];

    
                            session()->put('cart', $cart);
                

                            
                        return back();
                        }

                if(isset($cart[$id])) {
                    
                                $cart[$id]['quantity']++;
                    
                                session()->put('cart', $cart);
                    
                                return redirect()->back()->with('success', 'Course added to cart successfully!');
                    
                            }

                            $cart[$id] = [
                                "name" => $Course->course_title,
                                "quantity" => 1,
                                "price" => $Course->course_price,
                                "photo" => $Course->course_photo,
                                "user_name" => $Course->user_name
                            ];
                    
                            session()->put('cart', $cart);
                    
                            return redirect()->back()->with('success', 'Course added to cart successfully!');
}





        public function update(Request $request)
        {
        if($request->id and $request->quantity)
        {
        $cart = session()->get('cart');

        $cart[$request->id]["quantity"] = $request->quantity;

        session()->put('cart', $cart);

        session()->flash('success', 'Cart updated successfully');
        }
        }






            public function remove(Request $request)
            {
            if($request->id) {

            $cart = session()->get('cart');

            if(isset($cart[$request->id])) {

            unset($cart[$request->id]);

            session()->put('cart', $cart);
            }

            session()->flash('success', 'Course removed successfully');
            }
            }
            }

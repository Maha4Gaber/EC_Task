<?php

namespace App\Http\Controllers;

use App\Models\CartItems;
use App\Models\Carts;
use App\Models\Categorys;
use App\Models\Credits;
use App\Models\Products;
use App\Models\sublliers;
use Illuminate\Http\Request;
use Cart;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('home');
    }

    public function search(Request $request)
    {
        $Cats = Categorys::all();
        $products = Products::all();
        return $request;
        // return view(
        //     'home',
        //     compact('Cats', 'products')
        // );
    }
    public function searchpage(Request $request)
    {
        if (!$request->name && !$request->cat && !$request->sup)  {
            // $allproduct = 'Maha';
            $products = Products::all();
            $allcat = Categorys::all();
            $allsub = sublliers::all();
            return
            view(
                'User.Search',
                compact( 'products')
            );

        }
        else if($request->name && !$request->cat && !$request->sup)
        {
            $products = Products::where('name',  $request->name)->get();
            return
            view(
                'User.Search',
                compact( 'products')
            );
        }
        else if($request->name && $request->cat && !$request->sup)
        {
            $allproduct = Products::where('name',  $request->name)->get();
            $cat = Categorys::where('name', $request->cat)->first();
            $products = Products::where('name',  $request->name)->where('categori_id',$cat->id)->get();
            return
            view(
                'User.Search',
                compact( 'products')
            );
        }
        else if($request->name && $request->cat && $request->sup)
        {
            $allproduct = Products::where('name',  $request->name)->get();
            $cat = Categorys::where('name', $request->cat)->first();
            $sup = sublliers::where('name', $request->subpllier)->first();
            $products = Products::where('name',  $request->name)->where('categori_id',$cat->id)->get();
            return
            view(
                'User.Search',
                compact( 'products')
            );
        }
        else if(!$request->name && $request->cat && !$request->sup)
        {
            // $allproduct = Products::where('name',  $request->name)->get();
            $cat = Categorys::where('name', $request->cat)->first();
            // $sup = sublliers::where('name', $request->subpllier)->first();
            $products = Products::where('categori_id',$cat->id)->get();
            return
            view(
                'User.Search',
                compact( 'products')
            );
        }
    }





    public function getcart()
    {
        $userId = auth()->user()->id;
        $items = Cart::session($userId)->getContent();
        return view('User.Cart', compact('items'));
        # code...
    }











    public function addtocart($id)
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        $product = Products::findOrFail($id);
        Cart::session($userId)->add(array(
            'id' => $product->id, // inique row ID
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
        ));
        // Carts::create([
        //     'userid' => $userId,
        // ]);
        // CartItems::create([
        //     'cartid'=> 1,
        //     'productid'=>$id,
        // ]);
        // return CartItems::all();
        $items = Cart::getContent();
        return view('User.Cart',compact('items'));
    }





    public function increase1($id)
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        Cart::session($userId)->update($id, [
            'quantity' => +1,
        ]);
        $items =   Cart::session($userId)->getContent();
        return view('User.Cart', compact('items'));
    }



    public function decrease1($id)
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        $items =   Cart::session($userId)->get($id);
        if($items->quantity==1)
        {
            Cart::session($userId)->remove($id);

        }
        else
        {
            Cart::session($userId)->update($id, [
                'quantity' => -1,
            ]);
        }
        // return $items;
        // return ;

        $items = Cart::getContent();

        return view('User.Cart', compact('items'));

        // // return view('User.Cart', compact('items'));
    }

    // public function order()
    // {
    //     $userId = auth()->user()->id; // or any string represents user identifier
    //     $items =   Cart::session($userId)->getContent();
    //     foreach ($items as $row) {
    //         Credits::create([
    //             'address'=>$row->,
    //             ''=>$row->,
    //             ''=>$row->,
    //         ]);
    //         # code...
    //     }
    //     # code...
    // }

}
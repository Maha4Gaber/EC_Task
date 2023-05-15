<?php

namespace App\Http\Controllers;


use App\Models\Categorys;
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
    public function cart()
    {
        $userId = auth()->user()->id; // or any string represents user identifier
        // Cart::session($userId)->add(array(
        //     'id' => 456, // inique row ID
        //     'name' => 'Sample Item',
        //     'price' => 67.99,
        //     'quantity' => 4,
        //     'attributes' => array(),
        //     // 'associatedModel' => $Product
        // ));
        Cart::session($userId)->update(456, [
            'quantity' => 2,
            'price' => 98.67
        ]);
        $items = Cart::getContent();
        return view('User.Cart',compact('items'));
    }
}

<?php

namespace App\Http\Controllers;

<<<<<<< Updated upstream
=======
<<<<<<< HEAD
use App\Models\Categorys;
use App\Models\Products;
use App\Models\sublliers;
=======
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
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
<<<<<<< Updated upstream
=======
<<<<<<< HEAD
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
                'home',
                compact( 'products')
            );

        }
        else if($request->name && !$request->cat && !$request->sup)
        {
            $products = Products::where('name',  $request->name)->get();
            return 
            view(
                'home',
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
                'home',
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
                'home',
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
                'home',
                compact( 'products')
            );
        }
    }
=======
>>>>>>> ef385a467262da1d6ba7bb5bcf45eaf46516315a
>>>>>>> Stashed changes
}

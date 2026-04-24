<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categories;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $title = 'Shop';
        $query = Product::with('category');

        $categories = Categories::all();

        if ($request->has('rating') && $request->rating != '') {
            $query->where('rating', '>=', $request->rating);
        }

        if($request->has('search') && $request->search != ''){
            $searchTerm = $request->search;
            $query->where(function($q) use ($searchTerm){
                $q->where('name', 'like', '%' . $searchTerm . '%')
                ->orWhere('brand', 'like', '%' . $searchTerm . '%')
                ->orWhere('series', 'like', '%' . $searchTerm . '%')
                ->orWhereHas('category', function($subQuery) use ($searchTerm){
                    $subQuery->where('name', 'like', '%' . $searchTerm . '%');
                });
            });
        }

        if($request->has('sort')){
            if($request->sort == "latest"){
                $query->orderBy('created_at', 'desc');
                $title = "Latest Arrival";
            }elseif ($request->sort == 'top'){
                $query->orderBy('sold_count', 'desc');
                $title = "Top Products";
            }
        }else{
            $query->orderBy('created_at', 'desc');
        }
        $products = $query->paginate(10);
        return view('products', compact('products', 'title'));
    }
    
    public function home()
    {
        $title = 'Home';
        $categories = Categories::get();
        $topProducts = Product::orderBy('sold_count', 'desc')->take(5)->get();
        $featuredProducts =Product::latest()->take(5)->get();
        return view('home', compact('featuredProducts', 'topProducts', 'title', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $title = $product->name;

        return view('product', compact('title', 'product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}

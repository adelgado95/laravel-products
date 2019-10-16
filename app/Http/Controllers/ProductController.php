<?php

namespace App\Http\Controllers;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    function __construct()
    {
        //$this->middleware('auth');
        $this->middleware('auth',['except' => ['create','store']]);
    }
    //
    public function index()
    {
        $products = Product::all();
        return view('product.index',compact('products'));

    }
    public function create(){
        return view('product.create');
    }
    public function store(Request $request){
        // $product = new Product;
        // $product->description = $request->input('description');
        // $product->stock = $request->input('stock');
        // $product->price = $request->input('price');
        // $product->generic = $request->input('stock');
        // $product->laboratory = $request->input('generic');
        // $product->quantity = $request->input('content');
        // $product->save();
        Product::create($request->all());
        return redirect()->route('product.index');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('product.edit' ,compact('product'));
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('product.show' ,compact('product'));
    }

    public function update(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());
        return view('product.show',compact('product'));
    }

}

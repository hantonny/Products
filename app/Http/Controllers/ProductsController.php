<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
    /**
     * Create a new controller instance.
     *
     * @return void
     */
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        $allProducts = Product::All();
        $arrayAllproducts = array('allproducts'=>$allProducts);
        return view('listproducts', $arrayAllproducts);
    }

     public function add(Request $request){
        if($request->has('name')){
            $name = $request->input('name');
            $price = $request->input('price');
            $quantity = $request->input('quantity');

            $product = new Product;
            $product->name = $name;
            $product->price = $price;
            $product->quantity = $quantity;
            $product->save();
            return redirect('/listproducts');
        }

        return view('add');
    }

     public function edit($id,Request $request) {
        if($request->has('name')) {

            $product = Product::find($id);
            $product->name = $request->input('name');
            $product->price = $request->input('price');
            $product->quantity = $request->input('quantity');
            $product->save();

            return redirect('/listproducts');
        }

        $result = Product::find($id);
        $array = array('result'=>$result);
        return view('edit',$array);
    }

    public function delete($id) {
        Product::find($id)->delete();
        return redirect('/listproducts');
    }

}

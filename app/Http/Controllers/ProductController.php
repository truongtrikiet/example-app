<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    public function index(){
        $data = Product::get();
        return view('product-list', compact('data'));
//        return $data;
    }

    public function addProduct(){
        return view('product-add');
    }

    public function saveProduct(Request $request){
//        dd($request->all());
        $id = $request->id;
        $product_name = $request->product_name;
        $brand_name = $request->brand_name;
        $price = $request->price;
        $image = $request->image;
        $description = $request->description;

        $prod = new Product();
        $prod->id = $id;
        $prod->product_name = $product_name;
        $prod->brand_name = $brand_name;
        $prod->price = $price;
        $prod->image = $image;
        $prod->description = $description;
        $prod->save();

        return redirect()->back()->with('success', 'Product added successfully.');

    }

    public function editProduct($id){
        $data = Product::where('id','=',$id)->first();
        return view('product-edit', compact('data'));
    }

    public function updateProduct(Request $request){
        $id = $request->id;
        $product_name = $request->product_name;
        $brand_name = $request->brand_name;
        $price = $request->price;
        $image = $request->image;
        $description = $request->description;

        Product::where('id','=',$id)->update([
            'id'=>$id,
            'product_name' => $product_name,
            'brand_name' => $brand_name,
            'price' => $price,
            'image' => $image,
            'description' => $description
        ]);

        return redirect()->back()->with('success', 'Product Updated successfully.');
    }

    public function deleteProduct($id){
        Product::where('id','=',$id)->delete();
        return redirect()->back()->with('success', 'Product Deleted successfully.');
    }

    public function checkPayment(Request $request){
//        dd($request->all());
        $data = Product::get();

        foreach ($data as $prod){
            if($request->id == $prod->id){
                $pay =[
                    'id'=>$prod->id,
                    'name'=>$prod->product_name,
                    'price'=>$prod->price,
                    'size'=>$request->size,
                    'pay_method'=>$request->pay_method
                ];
                return view('confirm', compact('pay'));
            }
        }
        return redirect()->back()->with('error', 'Product do not exist.');
    }
}

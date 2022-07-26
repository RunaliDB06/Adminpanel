<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function create(){
        return view('Admin.products.create');
    }
    public function store(Request $request){
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);

        $product=new product();
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads',$filename);
            $product->image=$filename;
        }
        $product->save();
        return redirect()->route('products.index')->with('message','data added successful');
    }
    public function index(){
        $products= Product::all();
        return view('Admin.products.index',compact('products'));
    }
    public function edit($id){
        $products= Product::find($id);
        return view('Admin.products.edit',compact('products'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'description'=>'required',
            'image'=>'required',
        ]);

        $product=Product::find($id);
        $product->name=$request->name;
        $product->price=$request->price;
        $product->description=$request->description;
        if($request->hasFile('image'))
        {
            $file=$request->file('image');
            $extension =$file->getClientOriginalExtension();
            $filename=time().'.'.$extension;
            $file->move('uploads',$filename);
            $product->image=$filename;
        }
        $product->update();
        return redirect()->route('products.index')->with('message','data updated');
    }
    public function delete($id){
        $products= Product::find($id);
        $products->delete();
        return redirect()->route('products.index')->with('message','data deleted');
    }
    public function detail($id)
    {
        $product=product::find($id);
        return view('Admin.products.details',compact('product'));
    }
}

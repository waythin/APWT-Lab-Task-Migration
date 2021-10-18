<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class ProductController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function product_details(){
        $products = Product::all();
        return view('pages.product_details')->with('products', $products);
    }

    public function product_add(){
        return view('pages.product_add');
    }

    

    //product add

    public function product_addS(Request $request){
        $this->validate($request,
 
        [
            // 'id'=>'required',
            'p_name'=>'required|max:20',
            'p_code'=>'required|max:8',
            'p_desc'=>'required',
            'p_category'=>'required',
            'p_price'=>'required',
            'p_quantity'=>'required',
            'p_stock_date'=>'required',
            'p_rating'=>'required',
            'p_purchased'=>'required'
        ],

        [
            'p_name.required'=>'Product Name is requried!',
            'p_name.max'=>'Product Name must be less than 21 characters!',
            'p_code.required'=>'Product Code is requried!',
            'p_code.max'=>'Product Code must be less than 9 characters!',
            'p_desc.required'=>'Product Description is requried!',
            'p_category.required'=>'Product category is requried!',
            'p_price.required'=>'Product price is requried!',
            'p_quantity.required'=>'Product quantity is requried!',
            'p_stock_date.required'=>'Product stock_date is requried!',
            'p_rating.required'=>'Product rating is requried!',
            'p_purchased.required'=>'Product purchased is requried!'
            
        ]

    
        );

        $var = new Product();
        $var->p_name = $request->p_name;
        $var->p_code = $request->p_code;
        $var->p_desc = $request->p_desc;
        $var->p_category = $request->p_category;
        $var->p_price = $request->p_price;
        $var->p_quantity = $request->p_quantity;
        $var->p_stock_date = $request->p_stock_date;
        $var->p_rating = $request->p_rating;
        $var->p_purchased = $request->p_purchased;
    
        $var->save();

        return redirect()->route('list');
    }

    public function product_list(){
        $products = Product::all();
        return view('pages.product_list')->with('products', $products);
    }





    public function product_edit(Request $request){
        $id = $request->id;
        $product = product::where('id',$id)->first();
        return view('pages.product_edit')->with('product', $product);
    }


    public function product_editS(Request $request){

        $this->validate($request,
 
        [
            // 'id'=>'required',
            'p_name'=>'required|max:20',
            'p_code'=>'required|max:8',
            'p_desc'=>'required',
            'p_category'=>'required',
            'p_price'=>'required',
            'p_quantity'=>'required',
            'p_stock_date'=>'required',
            'p_rating'=>'required',
            'p_purchased'=>'required'
        ],

        [
            'p_name.required'=>'Product Name is requried!',
            'p_name.max'=>'Product Name must be less than 21 characters!',
            'p_code.required'=>'Product Code is requried!',
            'p_code.max'=>'Product Code must be less than 9 characters!',
            'p_desc.required'=>'Product Description is requried!',
            'p_category.required'=>'Product category is requried!',
            'p_price.required'=>'Product price is requried!',
            'p_quantity.required'=>'Product quantity is requried!',
            'p_stock_date.required'=>'Product stock_date is requried!',
            'p_rating.required'=>'Product rating is requried!',
            'p_purchased.required'=>'Product purchased is requried!'
            
        ]

    
        );

        $var = product::where('id',$request->id)->first();
        $var->p_name = $request->p_name;
        $var->p_code = $request->p_code;
        $var->p_desc = $request->p_desc;
        $var->p_category = $request->p_category;
        $var->p_price = $request->p_price;
        $var->p_quantity = $request->p_quantity;
        $var->p_stock_date = $request->p_stock_date;
        $var->p_rating = $request->p_rating;
        $var->p_purchased = $request->p_purchased;
        $var->save();
        return redirect()->route('list');

    }




    public function product_delete(Request $request){
        $var = product::where('id',$request->id)->first();
        $var->delete();
        return redirect()->route('list');

    }



}

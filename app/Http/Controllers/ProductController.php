<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;


class ProductController extends Controller
{
    public function home(){
        return view('pages.home');
    }

    public function product_list(){
        return view('pages.product_list');
    }

    public function product_details(){
        return view('pages.product_details');
    }

    public function product_add(){
        return view('pages.product_add');
    }

    public function product_edit(){
        return view('pages.product_edit');
    }


    //product add

    public function product_addS(Request $request){
        $this->validate($request,
 
        [
            // 'id'=>'required',
            'p_name'=>'required|min:4|max:15',
            'p_code'=>'required|min:2|max:6',
            'p_desc'=>'required|digits:11',
            'p_category'=>'required|email',
            'p_price'=>'required',
            'p_quantity'=>'required',
            'p_stock_date'=>'required',
            'p_rating'=>'required',
            'p_purchased'=>'required'
        ],

        [
            'name.required'=>'Name is requried!',
            'name.min'=>'Name must be more than 4 characters!',
            'name.max'=>'Name must be less than 16 characters!',
            'id.min'=>'Id must be more than 1 characters!',
            'id.max'=>'Id must be less than 7 characters!',
            'phone.required'=>'Number is requried!',
            'phone.digits'=>'Please enter valid phone number!',
            'email.required'=>'Email is required!',
            'psw.required'=>'This field is required!',
            'cpsw.required'=>'This field is required!',
            'id.required'=>'This field is required!',
            'email.email'=>'Please enter valid Email address!'
        ]

    
        );

        $var = new Customer();
        $var->name = $request->name;
        $var->id = $request->id;
        $var->email = $request->email;
        $var->phone = $request->phone;
        $var->psw = $request->cpsw;
        $var->save();

        return 'Registration Successful!';
    }

}

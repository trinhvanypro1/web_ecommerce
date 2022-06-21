<?php

namespace App\Http\Controllers;
use DB;
use Redirect;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function create(){
        return view('manager.add-product');
    }
    public function show(){
        $products = DB::table('products')->orderby('id','desc')->get();
        $managerPro = view('manager.all-product')->with('products', $products);
        return view('index')->with('manager.all-product',$managerPro);
    }

    public function save_product(Request $request){
        $data = array();
        $data['name'] = $request->name;
        $data['quantity'] = $request->quantity;
        $data['price'] = $request->price;
        $data['status'] = $request->status;
        $data['description'] = $request->description;

        $get_image = $request->file('image');
        if($get_image){
            $get_name_image = $get_image->getClientOriginalName();
            $name_image= current(explode('.', $get_name_image));
            $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
            $get_image->move(public_path('images'), $new_image);
            $data['image']=$new_image;
            DB::table('products')->orderby('id','desc')->insert($data);
            return Redirect::to('all-product');
        }
        $data['image']='';
        DB::table('products')->orderby('id','desc')->insert($data);
        return Redirect::to('add-product');
    }

    public function editProduct($id){
        // $editPro = DB::table('products')->where('id', $id)->first();
        // $managerPro = view('manager.edit-product')->with('editPro',$editPro);
        // return view('index')->with('manager.edit-product',$managerPro);
        return view('manager.edit');
    }
}

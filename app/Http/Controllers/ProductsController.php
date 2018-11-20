<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Illuminate\Support\Facades\Auth;
use App\Product;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Input;
use Image;

class ProductsController extends Controller
{
    public function addProduct(Request $request){

        if($request->isMethod('post')){
            $data = $request->all();
                if(empty($data['category_id'])){
                    return redirect()->back()->with('flash_message_error', 'Choisissez une catégorie !!');
                }
            $product = new Product;
            $product->category_id = $data['category_id'];
            $product->product_name = $data['product_name'];
            $product->product_code = $data['product_code'];
            $product->product_color = $data['product_color'];
            if(!empty($data['description'])){
                $product->description = $data['description'];
            }else{
                $product->description = 'RAS';
            }
            
            $product->price = $data['price'];

            //uploading image
           if($request-> hasFile('image')){
               $image_temp = Input::file('image');
                if($image_temp->isValid()){
                    $extension = $image_temp->getClientOriginalExtension();
                    $filename = rand(111,99999).'.'.$extension;
                    $large_image_path ='img/backend_images/products/large/'.$filename;
                    $medium_image_path ='img/backend_images/products/medium/'.$filename;
                    $small_image_path ='img/backend_images/products/small/'.$filename;
                    
                    //Resize Image
                     Image::make($image_temp)->save($large_image_path);
                     Image::make($image_temp)->resize(600,600)->save($medium_image_path);
                     Image::make($image_temp)->resize(300,300)->save($small_image_path);

                    //storing image in table
                    $product->image = $filename;
                }
           }






            $product->save();
            return redirect()->back()->with('flash_message_success', 'Produit ajouté avec succès !!');
        }

        $categories = Category::where(['parent_id'=>0])->get();
        $categories_dropdown = "<option value='' selected disabled>Select</option>";
        foreach($categories as $cat){
            $categories_dropdown .="<option value='".$cat->id."'>".$cat->name."</option>";
            $sub_categories = Category::where(['parent_id' => $cat->id])->get();
            foreach($sub_categories as $sub_cat){
                $categories_dropdown .="<option value='".$sub_cat->id."'>&nbsp;&nbsp;--&nbsp;&nbsp;".$sub_cat->name."</option>";
            }
        }
        return view('admin.product.create')->with(compact('categories_dropdown'));
    }
}

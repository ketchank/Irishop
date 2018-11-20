<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
   public function addCategory(Request $request){
       if($request->isMethod('post')){
           $data = $request->all();
           //echo "<pre>"; print_r($data); die; 
           $category  =  new Category;
           $category->name = $data['name'];
           $category->parent_id = $data['parent_id'];
           $category->description = $data['description'];
           $category->url = $data['url'];
           $category->save();
           return redirect('/cat-view')->with('flash_message_success','Catégorie crée avec succès !!');
       }

       $levels = Category::where(['parent_id'=>0])->get();

       return view('admin.category.create')->with(compact('levels'));
   }


   public function viewCategories(){
      
       $categories = Category::get();
    return view('admin.category.index')->with(compact('categories'));
    }


    public function editCategory(Request $request, $id = null){
        if($request->isMethod('post')){
            $data=$request->all();
            //echo "<pre>"; print_r($data); die; 
           Category::where(['id'=>$id])->update(['name'=>$data['name']],['description'=>$data['description']],['url'=>$data['url']]) ;
           return redirect('/cat-view')->with('flash_message_success','Catégorie modifiée avec succès !!');
        }
        $categoryDetails = Category::where(['id'=>$id])->first();
        $levels = Category::where(['parent_id'=>0])->get();
        return view('admin.category.edit')->with(compact('categoryDetails','levels'));
    }

    public function deleteCategory($id = null){
        if(!empty($id)){
            Category::where(['id'=>$id])->delete();
            return redirect()->back()->with('flash_message_success','Catégorie supprimée avec succès !!');
        }
    }
}

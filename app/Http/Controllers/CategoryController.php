<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
      $title='Kategori';
      $categories=\DB::table('categories')->get();

      return view('admin/layouts/category', compact('title', 'categories'));
    }

    public function create(){
      return view('admin/layouts/add_category');
    }

    public function store(Request $request){
      $this->validate($request,[
        'category'=>'required'
      ]);

      $category = $request->category;

      \DB::table('categories')->insert([
        'category'=>$category,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s')
      ]);

      return redirect('/admin/category');
    }

    public function edit($id){
      $categories=\DB::table('categories')->where('id',$id)->first();

      return view('admin/layouts/edit_category', compact('categories'));
    }

    public function update(Request $request, $id){
      \DB::table('categories')->where('id',$id)->update([
        'category'=>$request->category,
        'updated_at'=>date('Y-m-d H:i:s')
      ]);

      return redirect('/admin/category');
    }

    public function delete($id){
      \DB::table('categories')->where('id',$id)->delete();

      return redirect('/admin/category');
    }

    public function show(){

    }
}

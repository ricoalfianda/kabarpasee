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

      return redirect('admin/category');
    }

    public function edit(){

    }

    public function update(){

    }

    public function delete(){

    }

    public function show(){

    }
}

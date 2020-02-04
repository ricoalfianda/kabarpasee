<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
      return view('admin/layouts/category');
    }

    public function create(){
      return view('admin/layouts/add_category');
    }

    public function store(){

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

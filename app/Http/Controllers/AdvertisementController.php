<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdvertisementController extends Controller
{
    public function index(){
      return view('admin/layouts/advertisement');
    }

    public function create(){
      return view('admin/layouts/add_advertisement');
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

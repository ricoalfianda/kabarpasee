<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
      $title = 'Dashboard';
      return view('admin/layouts/dashboard', compact('title'));
    }
}

<?php

namespace App\Http\Controllers;
use App\Models\Category;

class ProductController extends Controller
{
   public function index()
    {
        $categories = Category::all();
        return view('front.index', compact('categories'));
    }

    public function admin()
    {
        return view('admin.index');
    }
}

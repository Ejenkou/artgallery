<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
    $categories = Category::orderby('name', 'asc')->get();
    return view('pages.homepage.home', compact('categories'));
   }

}

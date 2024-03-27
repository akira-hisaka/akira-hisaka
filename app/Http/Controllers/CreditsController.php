<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CreditsController extends Controller
{
    
    public function index()
    {
        $categories = Category::all();
        var_dump($categories);
        exit;
        return view('profile.dashboard',compact('categories'));
    }
}

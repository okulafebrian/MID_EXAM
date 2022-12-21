<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {   
        return view('contact', [
            'categories' => Category::all()
        ]);
    }
}

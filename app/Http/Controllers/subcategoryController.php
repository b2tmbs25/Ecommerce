<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class subcategoryController extends Controller
{
    //
    public function detail($slug){
        return view('subcategory');
    }
}

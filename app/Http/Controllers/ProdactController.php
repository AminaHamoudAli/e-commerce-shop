<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdactController extends Controller
{
    //
    public function index(){
        return view('pages.product' ,  ['title' => 'product']);
    }
    public function single(){
        return view('pages.single' ,  ['title' => 'single']);
    }


}


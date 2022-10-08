<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){
        $data = array(
            'metaTitle' => 'terms',
            'metaDescription' => 'terms',
            'pageTitle' => 'terms'
        );
        return view('about')->with($data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function index(){
        $data = array(
            'metaTitle' => 'terms',
            'metaDescription' => 'terms',
            'pageTitle' => 'terms'
        );
        return view('faq')->with($data);
    }
}

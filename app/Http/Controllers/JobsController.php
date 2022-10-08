<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use TCG\Voyager\Models\Category;

use RealRashid\SweetAlert\Facades\Alert;

use Artesaos\SEOTools\Facades\SEOTools;

class JobsController extends Controller{
    
    public function index(){
    
        $jobs = Job::orderBy('created_at', 'desc')->paginate(10);
        return view('jobs',compact('jobs'));
    }

    public function job($slug){

        // $category = $jobs->Categoty;
        $job = Job::where('slug', '=', $slug)->firstOrFail();

        SEOTools::setTitle($job->title.'| TNL Global');
        SEOTools::setDescription('');
        SEOTools::opengraph()->setUrl('https://tnlglobal-recrut.com');
        SEOTools::setCanonical('https://tnlglobal-recrut.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@tnlglobal-recrut');
        SEOTools::jsonLd()->addImage('https://tnlglobal-recrut.com/assets/img/logo/tl sign.svg');
        
        return view('job-detail', compact('job'));
    }
}

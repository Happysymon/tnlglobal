<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use TCG\Voyager\Models\Category;
use RealRashid\SweetAlert\Facades\Alert;
use Artesaos\SEOTools\Facades\SEOTools;

class SearchController extends Controller
{
    public function search(){

        $quary = $_GET['quary'];
        $jobs = Post::where('jobtype', 'LIKE', '%'.$$quary.'%')->get();
        SEOTools::setTitle('Search | TNL Global');
        SEOTools::setDescription('');
        SEOTools::opengraph()->setUrl(route('jobs'));
        SEOTools::setCanonical('https://tnlglobal-recrut.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@tnlglobal-recrut');
        SEOTools::jsonLd()->addImage('https://tnlglobal-recrut.com/assets/img/logo/tl sign.svg');

        $jobs = Job::orderBy('created_at', 'desc')->paginate(10);
        return view('search', compact('jobs'));
    }
}

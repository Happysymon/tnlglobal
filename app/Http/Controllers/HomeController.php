<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Category;
use TCG\Voyager\Models\Post;
use App\Models\Job;
use Artesaos\SEOTools\Facades\SEOTools;

use RealRashid\SweetAlert\Facades\Alert;

class HomeController extends Controller
{
    public function index(){

        $categories = Category::all();
        $jobs = Job::orderBy('created_at', 'desc')->take(12)->get();
        $browses = Job::orderBy('created_at', 'desc')->take(14)->get();
        $latest_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('home', compact('categories','browses', 'latest_posts','jobs'));
    }

    public function search_post(Request $request){

        $quary = $request->input('quary');
        $location = $request->input('location');
        // $quary = $_GET['quary'];
        // $quary = parse_str($quary);
        $jobs = Job::where('jobtitle', 'LIKE', "%{$quary}%")
        ->orWhere('location', 'LIKE', "%{$location}%")
        ->paginate(10);

        SEOTools::setTitle('Search | TNL Global');
        SEOTools::setDescription('');
        SEOTools::opengraph()->setUrl(route('jobs'));
        SEOTools::setCanonical('https://tnlglobal-recrut.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@tnlglobal-recrut');
        SEOTools::jsonLd()->addImage('https://tnlglobal-recrut.com/assets/img/logo/tl sign.svg');

        // $jobs = Job::orderBy('created_at', 'desc')->paginate(10);
        return view('search', compact('jobs'));
    }
}

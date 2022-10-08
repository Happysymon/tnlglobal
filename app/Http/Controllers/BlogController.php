<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use TCG\Voyager\Models\Post;
use TCG\Voyager\Models\Category;
use App\Models\User;
use RealRashid\SweetAlert\Facades\Alert;

use Artesaos\SEOTools\Facades\SEOTools;

class BlogController extends Controller
{
    public function index(){
        
        SEOTools::setTitle('TNL Global Blog | TNL Global');
        SEOTools::setDescription('');
        SEOTools::opengraph()->setUrl(route('blog'));
        SEOTools::setCanonical('https://tnlglobal-recrut.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@tnlglobal-recrut');
        SEOTools::jsonLd()->addImage('https://tnlglobal-recrut.com/assets/img/logo/tl sign.svg');

        $categories = Category::all();
        $categddory = User::all();
        $latest_posts = Post::orderBy('created_at', 'desc')->take(3)->get();
        $latest_jobs = Post::orderBy('created_at', 'desc')->take(3)->get();
        $posts = Post::orderBy('created_at', 'desc')->with('category','author')->paginate(8);
        return view('blog', compact('posts','categories'));
    }
    
    public function post($slug){

        // $category = $posts->Categoty;
        $post = Post::where('slug', '=', $slug)->firstOrFail();

        SEOTools::setTitle($post->title.'| TNL Global');
        SEOTools::setDescription($post->meta_description);
        SEOTools::opengraph()->setUrl('https://tnlglobal-recrut.com');
        SEOTools::setCanonical('https://tnlglobal-recrut.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@tnlglobal-recrut');
        SEOTools::jsonLd()->addImage('https://tnlglobal-recrut.com/assets/img/logo/tl sign.svg');
        
        $latest_posts = Post::orderBy('created_at', 'desc')->take(6)->get();
        $latest_jobs = Post::orderBy('created_at', 'desc')->take(3)->get();
        return view('post', compact('post','latest_posts','latest_jobs'));
    }

    
    public function category($category){
        //$category="2";
        // $category = $posts->Categoty;
        // $posts = Post::where('category_id', '=', $category)->firstOrFail();
        // $posts = Post::where('category_id', '=', $category)->orderBy('created_at', 'desc')->with('category','author')->paginate(8);
        $category = Category::where('slug',$category)->first();
        $categories = Category::all();
        $posts = $category->posts()->paginate(8);
        SEOTools::setTitle($category.' blog category | TNL Global');
        SEOTools::setDescription('');
        SEOTools::opengraph()->setUrl('https://tnlglobal-recrut.com');
        SEOTools::setCanonical('https://tnlglobal-recrut.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@tnlglobal-recrut');
        SEOTools::jsonLd()->addImage('https://tnlglobal-recrut.com/assets/img/logo/tl sign.svg');

        return view('blog-category',compact('category','categories'))
        
        ->with('posts', $category->posts)
        ->with('author','category');
        
    }


}

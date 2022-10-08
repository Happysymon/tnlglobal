<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resume;
use RealRashid\SweetAlert\Facades\Alert;

use Artesaos\SEOTools\Facades\SEOTools;

class CvController extends Controller
{
    public function index(Request $request){
        
        SEOTools::setTitle('Upload Your Resume to TNL Global | TNL Global');
        SEOTools::setDescription('TL RECRUITMENT AND CONSULTANCY AGENCY');
        SEOTools::opengraph()->setUrl(route('blog'));
        SEOTools::setCanonical('https://tnlglobal-recrut.com');
        SEOTools::opengraph()->addProperty('type', 'articles');
        SEOTools::twitter()->setSite('@tnlglobal-recrut');
        SEOTools::jsonLd()->addImage('https://tnlglobal-recrut.com/assets/img/logo/tl sign.svg');
        
        return view('submitcv');
        // return back()->with('success', 'You are noe subscribed to our maillist');
    }

    public function postcv(Request $request){

        $this->validate($request, [
            'name' => 'required',
            'resume' => 'required|file|unique:resumes|mimes:doc,pdf,docx,zip|max:1999',
            'pro_title' => 'required',
            'field' => 'required',
            'email' => 'bail|required|unique:resumes|max:255',
            // 'dimensions:min_width=100,min_height=200'
               
        ]);

        if ($request->hasFile('resume')) {
            // get file with ext
            $filenamewithext = $request->file('resume')->getClientOriginalName();
            // get just filename
            $filename = pathinfo($filenamewithext, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request->file('resume')->getClientOriginalExtension();
            // File anme to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
            // Upload Image
            // https://github.com/the-control-group/voyager/issues/4916
            // $path = $request->file('resume')->storeAs('public\storage\resumes', $filenametostore);
            $path = $request->file('resume')->storeAs('public\storage\resumes', $filenametostore);
        }
        // Keep Email
        $Resume = new Resume;
        $Resume->name = $request->input('name');
        $Resume->email = $request->input('email');
        $Resume->pro_title = $request->input('pro_title');
        $Resume->field = $request->input('field');
        $Resume->resume = $path;
        $Resume->save();
        
        Alert::toast('Your resume was uploaded successfully, Thank you.', 'success');
        return redirect()->back();
        // return back()->with('success', 'You are noe subscribed to our maillist');
    }
}

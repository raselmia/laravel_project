<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Response;
use App\About;
use File;
use Image;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


     public function __construct()
    {
        
        $this->middleware('auth', ['except' => 'show_home']);
    }


    public function getAdmin(){
        return view('admin.welcome');
    }

    public function index()
    {
         $abouts = About::orderby('id','desc')->get();


        return view('admin.about.index')->with(compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // dd($request);
        $file = Input::file('image');
        $image = Image::make($file);
        $path = 'thumbnails/';
        
        // dd($with)
        $image->resize(200, 200);
        $image->save($path.'thumb_'.$file->getClientOriginalName());

        $thumbnail = new About();
        $thumbnail->image       = $file->getClientOriginalName();
        $thumbnail->name       = $request->name;
        $thumbnail->actor     = $request->actor;
        $thumbnail->details     = $request->details;
        $thumbnail->save();
      session_start();
    
    $_SESSION['status']="Profile is Added Successfully";
        return redirect('taap/profile');

    }
  

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $about=About::findOrFail($id);
         return view('admin.about.show')->with(compact('about'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $about=About::find($id);
       return view('admin.about.edit')->with(compact('about'));   
    }
  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
   {
        //dd($request);
        $file = Input::file('image');
       

        if (!empty($file)) {

            $thumbnail      = About::find($id);
            $pathToImage   = 'thumbnails/'.'thumb_'.$thumbnail['image']; 

        $image  = Image::make($file);
        $path   = 'thumbnails/';
        
        
        $image->resize(200, 200);
        $image->save($path.'thumb_'.$file->getClientOriginalName());
        if ($image->save()==true) {
            File::delete($pathToImage);

        $thumbnail->image       = $file->getClientOriginalName();
        $thumbnail->name       = $request->name;
        $thumbnail->actor    = $request->actor;
        $thumbnail->details     = $request->details;
        $thumbnail->update();
        
        
          session_start();
        $_SESSION['status']="Profile updated Successfully";
        return redirect('taap/profile');
        }

        }
        else {
        $thumbnail = Article::find($id);
        $thumbnail->title       = $request->title;
        $thumbnail->summary     = $request->summary;
        $thumbnail->details     = $request->details;
        $thumbnail->update();
        
        session_start();
        $_SESSION['status']="Profile updated Successfully";
        return redirect('taap/about');
        };
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
     {

        $about = About::findOrFail($id);

        if($about['image']){
            
            $pathToImage   = 'thumbnails/'.'thumb_'.$about['image'];
            File::delete($pathToImage);
            

        }
       $about->delete();
       
         return redirect('taap/profile');
    }
}

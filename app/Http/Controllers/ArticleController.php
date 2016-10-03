<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Article;
use File;
use Image;
use App\Review;
use App\Notice;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        
        $this->middleware('auth', ['except' => ['show_home','search']]);
    }


    public function getAdmin(){
        return view('admin.welcome');
    }

    public function index()
    {

        $articles = Article::orderby('id','desc')->paginate(10);



        return view('admin.article.index')->with(compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.article.addarticle');
    }
    public function search(Request $val){
        //dd($val);
        $articles = Article::orderby('id','desc')->where('title','LIKE',"%$val->s%")->orWhere('details','LIKE',"%$val->s%")->orWhere('summary','LIKE',"%$val->s%")->paginate(4);
        $reviews  = Review::orderby('id','desc')->get();
        $notices  = Notice::orderby('id','desc')->paginate(10);
        return view('pages.index')->with(compact('articles','reviews','notices'));

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
        
        // dd($with);
        $image->save($path.$file->getClientOriginalName());
        $image->resize(200, 200);
        $image->save($path.'thumb_'.$file->getClientOriginalName());

        $thumbnail = new Article();
        $thumbnail->image       = $file->getClientOriginalName();
        $thumbnail->title       = $request->title;
        $thumbnail->summary     = $request->summary;
        $thumbnail->details     = $request->details;
        $thumbnail->save();
	session_start();
	
	$_SESSION['status']="Article is Added Successfully";
        return redirect('taap/article');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $article=Article::findOrFail($id);

         return view('admin.article.show')->with(compact('article'));
    }

        public function show_home($id)
    {
         $article=Article::findOrFail($id);
         return view('pages.show')->with(compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $article=Article::find($id);
       return view('admin.article.edit')->with(compact('article'));
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

            $thumbnail      = Article::find($id);
            $pathToImage    = 'thumbnails/'.$thumbnail['image'];
            $pathToImage1   = 'thumbnails/'.'thumb_'.$thumbnail['image']; 

        $image  = Image::make($file);
        $path   = 'thumbnails/';
        
        
        $image->save($path.$file->getClientOriginalName());
        $image->resize(200, 200);
        $image->save($path.'thumb_'.$file->getClientOriginalName());
        if ($image->save()==true) {
            File::delete($pathToImage);
            File::delete($pathToImage1);

        $thumbnail->image       = $file->getClientOriginalName();
        $thumbnail->title       = $request->title;
        $thumbnail->summary     = $request->summary;
        $thumbnail->details     = $request->details;
        $thumbnail->update();
        
        
          session_start();
        $_SESSION['status']="Article updated Successfully";
        return redirect('taap/article');
        }

        }
        else {
        $thumbnail = Article::find($id);
        $thumbnail->title       = $request->title;
        $thumbnail->summary     = $request->summary;
        $thumbnail->details     = $request->details;
        $thumbnail->update();
        
        session_start();
        $_SESSION['status']="Article updated Successfully";
        return redirect('taap/article');
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

        $article = Article::findOrFail($id);

        if($article['image']){
            $pathToImage 	= 'thumbnails/'.$article['image'];
            $pathToImage1	= 'thumbnails/'.'thumb_'.$article['image'];

            File::delete($pathToImage);
            File::delete($pathToImage1);
            

        }
       $article->delete();
       
         return redirect('taap/article');
    }
}


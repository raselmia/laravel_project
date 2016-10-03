<?php
namespace App\Http\Controllers;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Exception;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Review;
use App\Notice;
use Mail;
use Session;
use App\About;


class BasicController extends Controller
{
    public function index(){
        $articles = Article::orderby('id','desc')->paginate(3);
        $reviews  = Review::orderby('id','desc')->get();
        $notices  = Notice::orderby('id','desc')->get();
    	return view('pages.index')->with(compact('articles','reviews','notices'));
    }

    public function about(){
       $abouts    = About::get();
      return view('pages.about')->with(compact('abouts'));
    }

    public function service(){
    	return view('pages.service');
    }

    public function portfolio(){
    	return view('pages.portfolio');
    }
    
     public function contact(){

      return view('pages.contact');
    }


    
     
   public function mail(Request $request) {
   	$this->validate($request, [
        'name' => 'required',
        'message' => 'required',
        'subject' => 'required',
        'email' => 'required',
    	]);
   	
   	try{
   		Mail::send('mails.mailbody',['title'=>$request->name,'text'=>$request->message,'name'=>$request->name,'email'=>$request->email,'subject'=>$request->subject],function($mail){
            	$mail->to('talentsassociate.contact.me@gmail.com')->from('no-reply@talentsassociates.com','Talents Associate')->subject('Via Mail');
        	});
        	session_start();
        	$_SESSION['status']="Your Message Successfully Sent";
        	 return redirect('contact')->with('status','Successfully Sent');
   	}catch(\Exception $e){ 
   	 	        
      		session_start();
        	$_SESSION['status']="Your Message Failed to Sent";
        	 return redirect('contact')->with('status','Successfully Sent');
      }
   
    	


	}


   
}


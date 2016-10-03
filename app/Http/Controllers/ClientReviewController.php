<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Review;

use Session;
use Html;
use File;

class ClientReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

 public function __construct(){


        $this->middleware('auth');
    }

    public function index()
    {

        $reviews = Review::orderby('id','desc')->get();
        return view('admin.client_review.index')->with(compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.client_review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $this->validate($request,array(
                'client_name'=>'required|max:255',        
            ));

        $reviews=new Review;
        $reviews->client_name=$request->client_name;
        $reviews->review=$request->review;
        $reviews->save();
          session_start();
         $_SESSION['status']="Review is Added Successfully";
        return redirect()->route('taap.review.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $review=Review::find($id);
        return view('admin.client_review.show')->with(compact('review'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review=Review::find($id);
        return view('admin.client_review.edit')->with(compact('review'));
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
       $this->validate($request,array(
                'client_name'=>'required|max:255',
            ));

        $review= Review::find($id);
        $review->client_name=$request->client_name;
        $review->review=$request->review;
        $review->save();
        Session::flash('success',' Review listed is updated');
        Session::flash('error',' Review listed is Error');
        
        session_start();
        $_SESSION['status']="Review is updated";
        
       return redirect()->route('taap.review.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
   
    {
          $review=Review::find($id);
          $review->delete();
       
         return redirect('taap/review') ;
    }
}

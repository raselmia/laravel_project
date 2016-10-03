<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Http\Requests;
use App\Notice;
use Session;
use Html;
use File;

class NoticeController extends Controller
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
        $notices = Notice::orderby('id','desc')->paginate(5);

        return view('admin.notice.index')->withNotice($notices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notice.addnotice');
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
                'heading'=>'required|max:255',
                'link'=>'required|max:255'
            ));

        $notices=new Notice;
        $notices->heading=$request->heading;
        $notices->link=$request->link;
        $notices->save();
        session_start();
        $_SESSION['status']="Notice is Added Successfully";
        return redirect()->route('taap.notice.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $notice=Notice::find($id);
        return view('admin.notice.show')->withNotice($notice);
        //return redirect()->route('admin.notice.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $notice=Notice::find($id);
       return view('admin.notice.edit')->withNotice($notice);
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
                'heading'=>'required|max:255',
                'link'=>'required|max:255'
            ));

        $notice= Notice::find($id);
        $notice->heading=$request->heading;
        $notice->link=$request->link;
        $notice->save();
         session_start();
         $_SESSION['status']="Notice is Updated";
           
       return redirect()->route('taap.notice.index');

    }
   
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
          $notice=Notice::find($id);
          $notice->delete();
       
         return redirect('taap/notice') ;
    }
}

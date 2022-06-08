<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WelcomeNotes;

use Image;
use Session;

class WelcomeNoteAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $welcome=WelcomeNotes::all();
        return view('admin.welcome_notes.index')->withWelcome($welcome);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.welcome_notes.create');
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
        $welcome=new WelcomeNotes;
        $variable=$request->toArray();
        foreach ($variable as $key => $value) {
           if($key!='_token' & $key!='image_name')
            $welcome->$key=$value;
        }

        $image=$request->file('image_name');
        //if($request->hasFile('image_name')){
        //dd($image);
        $filename='welcome-note'.'-'.rand().time().'.'.$image->getClientOriginalExtension();//part of image intervention library
        $location=public_path('/images/welcome/'.$filename);

        // use $location='images/'.$filename; on a server

        Image::make($image)->resize(800,600)->save($location);
        $welcome->image=$filename;
        $welcome->save();        
       //dd("hello");
        session::flash('success', 'The Welcome Notes Has Been Added Successfully!');
        return redirect()->route('welcome_notes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($note_id)
    {
        $welcome=WelcomeNotes::find($note_id);
        //dd( $image);
        return view('admin.welcome_notes.show')->withWelcome($welcome);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($note_id)
    {
        $welcome=WelcomeNotes::find($note_id);
        
        return view("admin.welcome_notes.edit")->withWelcome($welcome);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $note_id)
    {
        $welcome=WelcomeNotes::find($note_id);

        $variable=$request->toArray();
        foreach ($variable as $key => $value) {
           if($key!='_token' & $key!='image_name' & $key!='_method')
            $welcome->$key=$value;
        }

        $image=$request->file('image_name');
        //if($request->hasFile('image_name')){
        //dd($image);
        if(isset($image)){
        $filename='welcome-note'.'-'.rand().time().'.'.$image->getClientOriginalExtension();//part of image intervention library
        $location=public_path('/images/welcome/'.$filename);

        // use $location='images/'.$filename; on a server

        Image::make($image)->resize(800,600)->save($location);
        $welcome->image=$filename;
        }
        $welcome->save();        

        session::flash('success', 'The Welcome Notes Has Been updated Successfully!');
        return redirect()->route('welcome_notes.index');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }


    public function delete($note_id,Request $request)
    {   
      // dd("hii");
        $welcome=WelcomeNotes::find($note_id);
        $welcome->delete();
        $request->session()->flash('success', 'The Welcome Notes has been deleted.');
        return redirect('/admin/welcome_notes');
        
        // dd($request); 
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\PilotDocument;
use App\Models\Pilot;
use Carbon\Carbon;




class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    public function index()
    {
         //dd("admin");
      
      //  $course=Course::select('name')->groupBy('name')->get();
        $pilot= Pilot::whereDate('created_at', Carbon::today())->get();
        $verification_approval = PilotDocument::where('verification_status', 0)->get();
       //dd(count($verification_approval));
    //    $total_pilot= Pilot::count();
        $pilot_list=Pilot::where('profile_upload_status',1)->get();
    //     dd($total_pilot);
       // dd(count($pilot_list));

        $var['pilot']=count($pilot);
        $var['verification_status']=count($verification_approval);
        $var['pilot_list']=count($pilot_list);

       // dd($verification_approval);
     //  $var['contact']=$contacts;
      //  $var['blog']=$blogs;
       // $var['course']=count($course);
        return view('Admin.home')->withVar($var);
        
    }

    // public function logout( Request $request ){

       
    //     Auth::guard('admin')->logout();
    //     //$request->session()->invalidate();
    //     return redirect('/login');

    //  }
}
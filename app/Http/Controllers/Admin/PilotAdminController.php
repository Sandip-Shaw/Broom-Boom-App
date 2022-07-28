<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pilot;
use App\Models\PilotDocument;

use Session;

class PilotAdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.g
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $pilot=Pilot::orderBy('created_at', 'asc')->get();
       
        return view('Admin.pilot.index')->withPilots($pilot);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pilot = Pilot::findOrFail($id);
        $profile = Pilot::all();
  //dd($pilot->pilotdet);
         return view('Admin.pilot.show')->withPilots($pilot);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
       // dd($request);
        $pilot=PilotDocument::find($id);
        $pilot->verification_status = $request->verification_status;
        $pilot->failed_reasons = $request->fail_msg;
        $pilot->save();

        session()->flash('success', 'Verification Status has been Updated !!');
        return redirect()->route('pilot.index');
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
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use App\Models\{ User, Company, Vehicle, VehicleLog, VehicleService};
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\{Mail, Crypt};


class VehiclesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
    $this->middleware('auth');
    }

    public function index()
    {   
    $Vehicle = Vehicle::get();
        return view('vehicle.index',compact('Vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vehicle.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $request->validate([
        'v_model'=>'required',
        'v_model_year'=>'required',
        'v_plate_no'=> 'required',
        'v_type' => 'required',
       
        ]);
    
         $Vehicle = new Vehicle([            
        'v_model'=> $request->get('v_model'),
        'v_model_year' => $request->get('v_model_year'),
        'v_plate_no' => $request->get('v_plate_no'),
        'v_type' => $request->get('v_type'),
        'v_user_id'=> Auth::user()->id,   
        'c_id'=> Auth::user()->id,         
        ]);

        
       $Vehicle->save();
       
       
       return redirect('/vehicles');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $User = User::where('id', $id)->first();
        return view('user.show',compact('User'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $User = User::find($id);

        return view('user.edit', compact('User'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
     
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     // $User = User::find($id);
     // $User->delete();

     //  toastr()->success('User has been deleted successfully!');
     //  return redirect('/user');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\stats;
use Redirect;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function dashboard()
    {
        // return(json_encode($data));
        $locations = stats::distinct('locationid')->pluck('locationid');
        // return($admin);
        // $count = DB::select('SELECT locationid, ');
        foreach($locations as $location){
            // print_r($location);
        $place[$location] = DB::select('SELECT COUNT(locationid) as count from stats where locationid = ?',[$location]);
        // print_r($place);    
        }
        // return($place);
        // return('gg');
        return view('dashboard')->with('locations', $locations)->with('count', $place);
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
    public function store()
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $stats = stats::get()->where('locationid','=',$id);
        if(count($stats)){
            return view('stats')->with('detailStats', $stats);
        }else{
            $msg = "Sorry No data available";
            // return view('stats')->with('detailStats', $stats);

            return redirect::to('/dashboard')->withMessage( $msg);
        }
        
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
        //
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

<?php

namespace App\Http\Controllers;

use App\loginLog;
use Illuminate\Http\Request;

class LoginLogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
    //    if(!$request->user()){
    //        return response()->json(['error'=>'User does not exist'],500);
    //     }
        //return $request->user()->login_logs;
        return loginLog::all();
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
     * @param  \App\loginLog  $loginLog
     * @return \Illuminate\Http\Response
     */
    public function show(loginLog $loginLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\loginLog  $loginLog
     * @return \Illuminate\Http\Response
     */
    public function edit(loginLog $loginLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\loginLog  $loginLog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, loginLog $loginLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\loginLog  $loginLog
     * @return \Illuminate\Http\Response
     */
    public function destroy(loginLog $loginLog)
    {
        //
    }
}

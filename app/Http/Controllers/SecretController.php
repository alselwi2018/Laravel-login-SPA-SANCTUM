<?php

namespace App\Http\Controllers;

use App\Secret;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Auth;
class SecretController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //return \DB::table('secrets')->where('user_id', '=', \Auth::user()->id);
       //return Secret::all();
       //return Secret::with('user')->get();

       $users = User::all();
        $secret = Secret::all();
        foreach ($users as $user)
        {

        return Secret::where('user_id', '=', $user->id)->get();
        }

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
     * @param  \App\Secret  $secret
     * @return \Illuminate\Http\Response
     */
    public function show(Secret $secret)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Secret  $secret
     * @return \Illuminate\Http\Response
     */
    public function edit(Secret $secret)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Secret  $secret
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Secret $secret)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Secret  $secret
     * @return \Illuminate\Http\Response
     */
    public function destroy(Secret $secret)
    {
        //
    }
}

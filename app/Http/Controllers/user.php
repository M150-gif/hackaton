<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Models\User;
class user extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function inscription(Request $request)
    {
        $validate=[
            "email"=>"required|",
            "passowrd"=>"required|"
        ];
    }

    /**
     * Show the form for creating a new resource.
     */
    public function connection(Request $request)
    {
         user::create([
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(formation $formation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(formation $formation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, formation $formation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(formation $formation)
    {
        //
    }
}


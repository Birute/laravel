<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;

class FriendsController extends Controller
{
    /**
     * Display a listing of the resource Čia bus visi įrašai
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        echo 'Čia bus visi įrašai';
    }

    /**
     * Show the form for creating a new resource. Čia bus kūrimo forma
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('friends.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //iš formos gaunami duomenys
    public function store(Request $request)
    {
      $this->validate($request, [
        'name'=>'required|max:18',
        'birthday'=>'required|date',
        'phone'=>'required'
      ]);

      Friend::create($request->all());
      echo 'Įrašas suskurtas';
    }

    /**
     * Display the specified resource. Čia bus draugo puslapis.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'Čia bus draugo puslapis';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        echo 'Čia koreguosim draugo info';
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
     * Remove the specified resource from storage. Čia draugą pašalonsim.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        echo 'Čia draugą pašalinsim';
    }
}

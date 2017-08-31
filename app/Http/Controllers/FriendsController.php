<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friend;
use App\Http\Requests\StoreFriendRequest;

use Illuminate\Support\Facades\Storage;

class FriendsController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');//prieš panaudojant bent kurį metodą iš šios klasės, paleidžiam construct ir patikrinam ar yra useris
    }
    /**
     * Display a listing of the resource Čia bus visi įrašai
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //1. gauti iš DB friends
        //2. grąžinti template sąraše
        //paginate - puslapiavimas
        $data = Friend::paginate(5);
        return view('friends.index', [
         'friends' => $data
        ]);


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
    public function store(StoreFriendRequest $request)
    {
      //$request->all(); - paima visus įrašus
      //$request->input('name'); - paima name laukelį
      //$request->file('photo'); - paima failą

      $path = Storage::putfile('public/friend_photos', $request->file('photo'));

      $friend = Friend::create($request->all());
      $friend->photo = $path;
      $friend->save();
      return redirect()->route('friends.index');
    }

    /**
     * Display the specified resource. Čia bus draugo puslapis.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $friend = Friend::find($id);
        return view('friends.show')->with('friend', $friend);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $friend = Friend::find($id);
        return view('friends.edit')->with('friend', $friend);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreFriendRequest $request, $id)
    {
        //Friend::get();
        //Friend::find($id);
        //Friend::create($data);
        $friend = Friend::find($id);

        $friend->update($request->all());
      //atnaujinti friends įrašą
      return redirect()->route('friends.index');
    }

    /**
     * Remove the specified resource from storage. Čia draugą pašalonsim.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      //viską pašalina 1 būdas, geresnis, jeigu turime daugiau id, kas po :: yra statinis metodas
      //  Friend::destroy($id);
      $friend = Friend::find($id);
      //2 būdas: paimti draugą iš DB, patikrinti ar jis egzistuoja, jei ne išmetam klaidą
      $friend->delete();
      return redirect()->route('friends.index');

    }
}

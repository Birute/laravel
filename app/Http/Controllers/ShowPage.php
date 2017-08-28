<?php

namespace App\Http\Controllers;

//jei naudojamas fasadas, tada d4ti back sliašą arba naudoti use ir įdėi nuorodą iš config -> app -> alliases
//use Illuminate\Support\Facades\View::class;

class ShowPage extends Controller{
  public function __invoke($pagetitle)
  {
      //kodai iŠ serverio gali būti
      // 2xx - viskas gerai
      // 3xx - bus vykdomas kažkoks nukreipimas
      // 4xx - klaida iš kliento pusės
      // 5xx - serveriui šakės
      //abort(401);
    //View vadinamas fasasdu
      if (\View::exists($pagetitle)) {
          return view($pagetitle);
      }
          abort(404);
    }
}
 ?>

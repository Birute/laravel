<?php

namespace App\http\Controllers;

use \App\Skills;

  class SkillsController extends Controller
  {
    public function getSkills()
    {
      $title='Įgūdžiai';

      $skills = Skills::get();

       for ($i = 0; $i < 5 ; $i++) {
         switch($skills[$i]['rating']) {
           case 1:
             $skills[$i]['rating'] = '*';
             break;
           case 2:
             $skills[$i]['rating'] = '**';
             break;
           case 3:
             $skills[$i]['rating'] = '***';
             break;
           case 4:
             $skills[$i]['rating'] = '****';
             break;
           case 5:
             $skills[$i]['rating'] = '*****';
             break;
         }
       }

       return view('skills', [
         'skills' => $skills,
         'title' => $title
       ]);
     }


     public function getSingle($id)
     {
       $skill = Skills::find($id);

       $title='Įgūdžiai';

         switch($skill['rating']) {
           case 1:
             $skill['rating'] = '*';
             break;
           case 2:
             $skill['rating'] = '**';
             break;
           case 3:
             $skill['rating'] = '***';
             break;
           case 4:
             $skill['rating'] = '****';
             break;
           case 5:
             $skill['rating'] = '*****';
             break;
       }

       return view('single-skill', [
         'skill' => $skill,
         'title' => $title
       ]);
     }
   }
 ?>

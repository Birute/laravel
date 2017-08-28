<?php

namespace App\http\Controllers;

use \App\Skills;

    class SkillsController extends Controller{
    public function getSkills()
    {
      $title='Įgūdžiai';

      $skills = Skills::get();

       for ($i=0; $i < 5 ; $i++) {
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
         'title' => $title,
         'skills' => $skills
       ]);
     }
   }
 ?>

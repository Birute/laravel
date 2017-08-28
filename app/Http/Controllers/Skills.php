<?php

namespace App\http\Controllers;

//use \App\Testimonial;

  class Skills extends Controller{
    public function getSkills()
    {
      $title='Įgūdžiai';
      //asociatyvus masyvas, žodis vadinamas indeksu, kaip ir skaičiai
      //imam duomenis iš duombazės
      //gražiai išveda masyvą iš DB
      //dd($testimonials);
      //var_dump($testimonials); php
      //kai select iš DB gaunam klasę, į kurią įdėtas masyvas


       $skills =[
         [
           'language' => 'HTML',
           'rating' => 5,
           'comment' => '(5 metai)'
       ],
       [
           'language' => 'PHP',
           'rating' => 2,
           'comment' => '(2 metai)'
       ],
       [
           'language' => 'JAVA',
           'rating' => 3,
           'comment' => '(3 metai)'
       ],
       [
           'language' => 'JavaScript',
           'rating' => 1,
           'comment' => '(1 metai)'
       ],
       [
           'language' => 'CSS',
           'rating' => 4,
           'comment' => '(4 metai)'
       ]
       ];


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

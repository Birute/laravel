<?php

namespace App\http\Controllers;

use \App\Testimonial;

  class TestimonialsController extends Controller{
    public function getAll()
    {
      $title='Atsiliepimai';
      //asociatyvus masyvas, žodis vadinamas indeksu, kaip ir skaičiai
      //imam duomenis iš duombazės
      Testimonial::create([
        'name' => 'kazkas kazkas',
        'time' => date('Y-m-d H:i:s'),
        'content' => 'Lorem ipsum'
      ]);


      $testimonials = Testimonial::get() ;
      //gražiai išveda masyvą iš DB
      //dd($testimonials);
      //var_dump($testimonials); php
      //kai select iš DB gaunam klasę, į kurią įdėtas masyvas


      //  $testimonials = [
      //    [
      //      'name' => 'Justinas',
      //      'time' => '2017-08-01 12:13:09',
      //      'text' => 'Lorem ipsum dolor.'
      //     ],
      //     [
      //       'name' => 'Petras',
      //       'time' => '2017-07-28 14:50:20',
      //       'text' => 'Bla bla.'
      //      ],
      //      [
      //        'name' => 'Juozas',
      //        'time' => '2017-05-09 12:06:09',
      //        'text' => 'Geras komentaras.'
      //       ]
      //  ];

        //
        // return view('testimonials', [
        //   'title' => $title,
        //   'testimonials' => $testimonials
        // ]);

    }

    //bus gaunamas vienas id
    public function getSingle($id){
      $title='Atsiliepimai';
      $testimonial = Testimonial::find($id);
      //tarp kabučių blade php failo pavadinimas
      return view('single-testimonial', [
        'testimonial' => $testimonial,
        'title' => $title
      ]);
    }
  }

 ?>

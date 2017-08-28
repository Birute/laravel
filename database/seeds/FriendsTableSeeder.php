<?php

use Illuminate\Database\Seeder;

class FriendsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('friends')->insert([
          [
            'name'=>'Petras',
            'birthday'=>'2000-01-09',
            'phone'=>'860098000',
            'photo'=>'friends/petras.jpg'
          ],
          [
            'name'=>'Algis',
            'birthday'=>'1999-10-09',
            'phone'=>'865658005',
            'photo'=>'friends/Algis.jpg'
          ]
        ]);
    }
}

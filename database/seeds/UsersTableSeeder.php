<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $user = new User;
      $user->name='Justinas';
      $user->email='pastas@gmail.lt';
      $user->password= Hash::make('justinas123');

      $user->save();
    }
}

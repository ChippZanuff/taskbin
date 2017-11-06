<?php

use Illuminate\Database\Seeder;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       /* DB::table('users')->insert([
            'login' => str_random(4),
            'email' => str_random(2).'@mail.com',
            'password' => bcrypt('secret'),
        ]);*/

       factory(App\Models\User::class, 10)->create()->each(function($u){
           for ($i = 0; $i < 10; $i++) {
               $u->userAddresses()->save(factory(App\Models\UserAddresses::class)->make());
           }
       });
    }
}

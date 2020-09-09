<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'Jhonatan',
            'email' => 'asdasd@sdads.com',
            'password'=>'dsdwdasdfS324',
          ]);
        // $arrays=range(0,20);
        // foreach($arrays as $valor){
        //     DB::table('users')->insert([
        //         'name'=>Str::random(10),
        //         'email'=>Str::random(10),
        //     ]);
        // }

    }
}

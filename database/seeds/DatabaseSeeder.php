<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */

    public function run()
    {


        DB::statement('SET FOREIGN_KEY_CHECKS=0;');


//         $this->call(UsersTableSeeder::class);
//        $this->call(CardsTableSeeder::class);

        $this->call(NotesTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');


    }
}

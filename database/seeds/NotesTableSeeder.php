<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Note;
class NotesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Note::truncate();


        factory(Note::class,10)->create();
    }
}

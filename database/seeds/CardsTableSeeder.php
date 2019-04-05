<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Card;
class CardsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Card::truncate();

        factory(Card::class,1)->create();

    }
}

<?php

use Illuminate\Database\Seeder;
use App\Advertisement;

class AdvertisementTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Advertisement::class, 10)->create();
    }
}

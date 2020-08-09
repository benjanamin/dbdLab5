<?php

use Illuminate\Database\Seeder;
use App\Valoration;
class ValorationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Valoration::class, 10)->create();//
    }
}

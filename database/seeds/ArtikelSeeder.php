<?php

use Illuminate\Database\Seeder;
use App\Artikel;
class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (range(1, 10) as $i) {

	        Artikel::create([
	        	'title'=> 'lorem ipsum '. str_random(2),
	        	'description'=> 'lorem ipsum dolor sit amet',
	        	'foto'=> "defalut.png"
	        ]);

    	}
    }
}

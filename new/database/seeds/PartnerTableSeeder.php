<?php

use Illuminate\Database\Seeder;

class PartnerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partners')->insert([
        	['id' => 1,'image'=>'partner4.png','link' => 'http://www.wissol.ge',],
            ]);
            DB::table('partners')->insert([
            ['id' => 2,'image'=>'partner3.png','link' => 'http://smart.ge',],
            ]);
            DB::table('partners')->insert([
            ['id' => 3,'image'=>'partner6.png','link' => 'http://tbc.ge',],
            ]); 
             DB::table('partners')->insert([
            ['id' => 4,'image'=>'partner9.png','link' => 'https://my.ge',],
            ]);
             DB::table('partners')->insert([
            ['id' => 5,'image'=>'partner10.png','link' => 'https://www.galf.ge',],
            ]);

    }
}

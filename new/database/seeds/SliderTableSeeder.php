<?php

use Illuminate\Database\Seeder;

class SliderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sliders')->insert([
            ['id' => 1,'title_ka'=>'გვანდეთ თქვენი <br>შესყიდვები',
            'title_en'=>'Procurement Solutions =<br> Right Solutions',
            'image' => 'slide11.jpg',],
        ]); 
        DB::table('sliders')->insert([
        	['id' => 2,'title_ka'=>'დისტანციური აუთსორს <br> 
            შესყიდვების სერვისი','title_en'=>'Remote OutSource <br>Procurement Service <br>(ROPS)',
            'image' => 'slide13.jpg',],
        ]); 
    }
}

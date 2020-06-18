<?php

use Illuminate\Database\Seeder;

class AdvantageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                
    DB::table('advantages')->insert([
        ['id' => 1 , 
        'title_ka'=>'ჩვენი უპირატესობები',
        'title_en'=>'Our advantages',
        'content_ka'=>'<p>დისტანციური აუთსორს შესყიდვები არის დღევანდელი რეალობის თანმიმდევრული სერვისი, რომელშიც პირველები ვიყავით.  </p>
                    <p>კომპანიას არ უწევს საკუთარი ადმინისტრაციული თუ ფინანსური რესურსის დახარჯვა შედეგების მისაღებად. ჩვენი კონსოლიდირებული შესყიდვების გზით თქვენ მიიღებთ საუკეთესო ხარისხის, ფასის და პირობების პროდუქციას/სერვისს. ეს არის შესყიდვების ალტერნატიული წყარო, რა შემთხვევაშიც კომპანია იძენს :</p>',
        'content_en'=>'<p>Remote OutSource Procurement Service (ROPS) is a remote procurement service, which enables companies to explore and gain:</p>
        <p>There is a Big Advantage - Partner Company does not spend it’s own administrative or financial resources in order to get results. Our consolidated procurement system will enable you to get highest quality goods and services you need at a best prices and terms.</p>',
        'point1_ka' => 'შესყიდვების დამატებით არხებს',
        'point1_en' => 'New procurement channels',
        'point2_ka' => 'ახალ გამოცდილ პარტნიორებს',
        'point2_en' => 'New professional partners',
        'point3_ka' => 'და რაც მთავარია ამცირებს ხარჯებს',
        'point3_en' => 'And Decrease Costs',
        'icon1'=>'icon-piggy-bank3',
        'icon2'=>'icon-wallet2',
        'icon3'=>'icon-clock2',
        'icon4'=>'icon-bar-graph-12',
        'txt1_ka' => 'დაზოგილი ფინანსური რესურსები',
        'txt1_en' => 'Result – Decreased Costs',
        'txt2_ka' => 'მოქნილი ლიოალობის და საბონუსე სისტემა',
        'txt2_en' => 'Flexible Loyalty and Bonus Systems',
        'txt3_ka' => 'დაზოგილი დრო და ენერგია',
        'txt3_en' => 'You Save your Time ',
        'txt4_ka' => 'შესასყიდი ობიექტის ხარისხის გარანტია',
        'txt4_en' => 'Product quality guarantee',

    ],
    ]);    
        
    }
}

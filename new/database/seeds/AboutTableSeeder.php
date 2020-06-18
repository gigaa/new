<?php

use Illuminate\Database\Seeder;

class AboutTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    
        
    DB::table('abouts')->insert([
            ['id' => 1 , 
            'title_ka'=>'ჩვენ შესახებ',
            'text_ka'=>'<p>ჩვენი მთავარი მიზანია დავზოგოთ თქვენი დრო რასაც თქვენ შესყიდვებზე ხარჯავთ და ეს დრო მოახმაროთ თქვენი ძირითადი ბიზნესის განვითარებას. ჩვენი კომპანია ორიენტირებულია მაღალი სტანდარტების და ინოვაციური სერვისების დანერგვაზე და ამავდროულად მორგებულია იმ კომპანიების მენეჯმენტის ინტერესებზე, რომლებსაც სურთ მიიღონ მეტი სარგებელი თავიანთი ხარჯების ოპტიმიზირებით.</p> <p> ჩვენ ასევე ვართ ერთ-ერთი მსხვილი იმპორტიორი ყველა იმ ინვენტარის, რომელიც საჭიროა მაღაზიის ან/და წარმოების აღჭურვისათვის. სხვადასხვა ინვენტარის იმპორტის გარდა ჩვენ ვართ გუნდი, რომელმაც პირველმა დანერგვა დისტანციური შესყიდვების მომსახურების სერვისი</p>',
            'title_en'=>'About Us',
            'text_en'=>'<p>Remote OutSource Procurement Service ( ROPS)",en: "Our main purpose is you to save your time spent on procurement - and use your time for developing your core business. Our company is oriented on high standards and innovative approaches and is built on company’s management interests, who wish to optimize their costs by spending less.</p><p> In Today’s world where services are becoming more remote, we are the first movers to outsource your procurement : Spend Less, Gain more! We are also one of the biggest importers of all the inventory, necessary for retail shop opening. More than that, we are the first comers in implementing Remote OutSource Procurement Service = ROPS.</p>',
        ],
        ]);    
            
    }
}

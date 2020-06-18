<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AboutTableSeeder::class);
        $this->call(SliderTableSeeder::class);
        $this->call(PartnerTableSeeder::class);
        $this->call(AdvantageTableSeeder::class);
        $this->call(AdminUsersTableSeeder::class);

        

        

    }
}

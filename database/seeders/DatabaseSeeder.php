<?php

namespace Database\Seeders;

use App\Models;
use App\Models\Organization;
use App\Models\Activates;
use App\Models\User;
use App\Models\Volunter;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::truncate();
        Activates::truncate();
        Organization::truncate();
        //--------------------------------------------------- 
        
        Activates::factory(4)->create();
        Volunter::factory(4)->create();
       
    }
}

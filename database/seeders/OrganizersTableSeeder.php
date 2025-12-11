<?php

namespace Database\Seeders;

use App\Models\Organizer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Organizer::factory(10)->create();
//        DB::table('organizers')->insert([
//            [
//                'full_name' => 'John Doe',
//                'email'     => 'john@example.com',
//                'phone'     => '123-456-7890',
//                'created_at'=> now(),
//                'updated_at'=> now(),
//            ],
//            [
//                'full_name' => 'Emily Johnson',
//                'email'     => 'emily@example.com',
//                'phone'     => '987-654-3210',
//                'created_at'=> now(),
//                'updated_at'=> now(),
//            ],
//            [
//                'full_name' => 'Michael Smith',
//                'email'     => 'michael@example.com',
//                'phone'     => '555-123-4567',
//                'created_at'=> now(),
//                'updated_at'=> now(),
//            ],
//        ]);
    }
}

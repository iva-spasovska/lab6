<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class EventsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Event::factory(10)->create();
//        DB::table('events')->insert([
//            [
//                'name'         => 'Tech Conference',
//                'description'  => 'A conference about modern technology trends.',
//                'type'         => 'Conference',
//                'date'         => '2026-05-10',
//                'organizer_id' => 1,
//                'created_at'   => now(),
//                'updated_at'   => now(),
//            ],
//            [
//                'name'         => 'Music Festival',
//                'description'  => 'A large outdoor festival with multiple performers.',
//                'type'         => 'Festival',
//                'date'         => '2026-08-21',
//                'organizer_id' => 2,
//                'created_at'   => now(),
//                'updated_at'   => now(),
//            ],
//            [
//                'name'         => 'Sports Meetup',
//                'description'  => 'Community sports gathering for all ages.',
//                'type'         => 'Meetup',
//                'date'         => '2026-03-15',
//                'organizer_id' => 3,
//                'created_at'   => now(),
//                'updated_at'   => now(),
//            ],
//        ]);
    }
}

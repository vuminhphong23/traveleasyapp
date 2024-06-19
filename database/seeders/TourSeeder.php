<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tbltour')->insert([
            [
                'idTour' => 'TO1',
                'name' => 'Bai Chay',
                'startDay' => '2024-06-17',
                'endDay' => '2024-06-24',
                'cost' => 50,
                'imageTour' => 'assets/images/vinhhalong.jpg',
                'idAddress' => 9,
                'idHotel' => 'HT1',
                'idVehicle' => 'VH1',
                'idTourGuide' => 'TG1',
                'description' => 'Bai Chay, located in the northwest of Quang Ninh province, Vietnam, is one of the most famous tourist destinations in the Ha Long Bay area. This artificial beach stretches approximately 1,000 meters in length and 100 meters in width, featuring fine white sand and clear blue waters, attracting millions of visitors annually.

                Bai Chay offers a wide range of hotels, resorts, restaurants, and cafes with various prices and amenities, from luxury to budget-friendly options, catering to the needs of all visitors. The tourism services here are heavily invested and well-developed, ensuring the best experience for tourists.',
            ],
            [
                'idTour' => 'TO2',
                'name' => 'Trang An',
                'startDay' => '2024-07-01',
                'endDay' => '2024-07-10',
                'cost' => 70,
                'imageTour' => 'assets/images/trangan.jpg',
                'idAddress' => 10,
                'idHotel' => 'HT2',
                'idVehicle' => 'VH3',
                'idTourGuide' => 'TG2',
                'description' => 'Trang An, located in Ninh Bình province, Vietnam, is a renowned scenic area known for its stunning natural beauty and impressive cave system. Recognized by UNESCO as a dual World Heritage Site for both culture and nature, Trang An stands out with its majestic limestone mountains, serene rivers winding through valleys, and underground caves. Visitors to Trang An can enjoy boat tours that offer the chance to marvel at the mystical beauty of the caves and explore significant historical and cultural sites such as Trinh Temple, Tran Temple, and Phu Khong.',
            ],
        ]);
    }
}

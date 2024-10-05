<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\State;

class StateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        State::insert([
            ['name' => 'Karnataka', 'country_id' => 1],
            ['name' => 'California', 'country_id' => 2],
            ['name' => 'Ontario', 'country_id' => 3],
            ['name' => 'Maharashtra', 'country_id' => 1],
            ['name' => 'Texas', 'country_id' => 2],
            ['name' => 'British Columbia', 'country_id' => 3],
            ['name' => 'New York', 'country_id' => 2],
            ['name' => 'Queensland', 'country_id' => 4],
            ['name' => 'New South Wales', 'country_id' => 4],
            ['name' => 'São Paulo', 'country_id' => 5],
            ['name' => 'Rio de Janeiro', 'country_id' => 5],
            ['name' => 'England', 'country_id' => 6],
            ['name' => 'Scotland', 'country_id' => 6],
            ['name' => 'Île-de-France', 'country_id' => 7],
            ['name' => 'Bavaria', 'country_id' => 8],
            ['name' => 'Tokyo Metropolis', 'country_id' => 9],
            ['name' => 'Beijing Municipality', 'country_id' => 10],
            ['name' => 'Moscow Oblast', 'country_id' => 11],
            ['name' => 'Gauteng', 'country_id' => 12],
            ['name' => 'Western Cape', 'country_id' => 12],
            ['name' => 'Mexico City', 'country_id' => 13],
            ['name' => 'Buenos Aires', 'country_id' => 14],
            ['name' => 'Lazio', 'country_id' => 15],
            ['name' => 'Catalonia', 'country_id' => 16],
            ['name' => 'Seoul Capital Area', 'country_id' => 17],
            ['name' => 'Sindh', 'country_id' => 18],
            ['name' => 'Punjab', 'country_id' => 18],
            ['name' => 'Dhaka', 'country_id' => 19],
            ['name' => 'Western Province', 'country_id' => 20],
            ['name' => 'Bagmati', 'country_id' => 21],
            ['name' => 'Jakarta', 'country_id' => 22],
            ['name' => 'Bangkok', 'country_id' => 23],
            ['name' => 'Hanoi', 'country_id' => 24],
            ['name' => 'Kuala Lumpur', 'country_id' => 25],
            ['name' => 'Singapore', 'country_id' => 26],
            ['name' => 'Dubai', 'country_id' => 27],
            ['name' => 'Abu Dhabi', 'country_id' => 27],
            ['name' => 'Doha', 'country_id' => 28],
            ['name' => 'Riyadh Province', 'country_id' => 29],
            ['name' => 'Mecca Province', 'country_id' => 29],
            ['name' => 'Cairo Governorate', 'country_id' => 30],
            ['name' => 'Alexandria Governorate', 'country_id' => 30],
            ['name' => 'Nairobi County', 'country_id' => 31],
            ['name' => 'Lagos State', 'country_id' => 32],
            ['name' => 'Gauteng', 'country_id' => 33],
            ['name' => 'Tehran', 'country_id' => 34],
            ['name' => 'Baghdad Governorate', 'country_id' => 35],
            ['name' => 'Damascus Governorate', 'country_id' => 36],
            ['name' => 'Amman Governorate', 'country_id' => 37],
            ['name' => 'Beirut Governorate', 'country_id' => 38],
            ['name' => 'Jerusalem District', 'country_id' => 39],
            ['name' => 'Kuwait City', 'country_id' => 40],
            ['name' => 'Muscat', 'country_id' => 41],
            ['name' => 'Manama', 'country_id' => 42],
            ['name' => 'Sana’a', 'country_id' => 43],
            ['name' => 'Tashkent Province', 'country_id' => 44],
            ['name' => 'Bishkek', 'country_id' => 45],
            ['name' => 'Astana', 'country_id' => 46],
            ['name' => 'Baku', 'country_id' => 47],
            ['name' => 'Yerevan', 'country_id' => 48],
            ['name' => 'Tbilisi', 'country_id' => 49],
            ['name' => 'Warsaw', 'country_id' => 50],
            ['name' => 'Krakow', 'country_id' => 50],
            ['name' => 'Budapest', 'country_id' => 51],
            ['name' => 'Vienna', 'country_id' => 52],
            ['name' => 'Prague', 'country_id' => 53],
            ['name' => 'Bratislava', 'country_id' => 54],
            ['name' => 'Zagreb', 'country_id' => 55],
            ['name' => 'Belgrade', 'country_id' => 56],
            ['name' => 'Sarajevo', 'country_id' => 57],
            ['name' => 'Ljubljana', 'country_id' => 58],
            ['name' => 'Skopje', 'country_id' => 59],
            ['name' => 'Tirana', 'country_id' => 60],
            ['name' => 'Podgorica', 'country_id' => 61],
            ['name' => 'Tallinn', 'country_id' => 62],
            ['name' => 'Riga', 'country_id' => 63],
            ['name' => 'Vilnius', 'country_id' => 64],
            ['name' => 'Helsinki', 'country_id' => 65],
            ['name' => 'Oslo', 'country_id' => 66],
            ['name' => 'Stockholm', 'country_id' => 67],
            ['name' => 'Copenhagen', 'country_id' => 68],
            ['name' => 'Reykjavik', 'country_id' => 69],
            ['name' => 'Luxembourg', 'country_id' => 70],
            ['name' => 'Brussels', 'country_id' => 71],
            ['name' => 'Amsterdam', 'country_id' => 72],
            ['name' => 'Lisbon', 'country_id' => 73],
            ['name' => 'Porto', 'country_id' => 73],
            ['name' => 'Zurich', 'country_id' => 74],
            ['name' => 'Geneva', 'country_id' => 74],
            ['name' => 'Monaco', 'country_id' => 75],
            ['name' => 'Vatican City', 'country_id' => 76],
        ]);
        
    }
}

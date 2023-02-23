<?php

namespace Database\Seeders;

use App\Models\modelAnalyst;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class analystSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['title' => 'Alergi'],
            ['title' => 'Anemia'],
            ['title' => 'Asma'],
            ['title' => 'Batuk'],
            ['title' => 'Buta Warna'],
            ['title' => 'Demam'],
            ['title' => 'Diabetes'],
            ['title' => 'Epilepsi'],
            ['title' => 'Hepatitis'],
        ];
        foreach($data as $value){
            modelAnalyst::insert([
                'title'=>$value
            ]);
        }
    }
}

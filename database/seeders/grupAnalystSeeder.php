<?php

namespace Database\Seeders;

use App\Models\modelGrupAnalyst;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class grupAnalystSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $data = [
            ['title'=>'Sakit Dada','name'=>'Sandrina','analyst_id'=>5],
            ['title'=>'Flu','name'=>'Paijo','analyst_id'=>4],
            ['title'=>'Sakit kaki','name'=>'Suti','analyst_id'=>7],
            ['title'=>'Sakit Perut','name'=>'Mail','analyst_id'=>8],
            ['title'=>'Pusing','name'=>'Sukriman','analyst_id'=>10],
            ['title'=>'Sakit mata','name'=>'Ilham','analyst_id'=>5],
            ['title'=>'Migrain','name'=>'Felisa','analyst_id'=>4],
            ['title'=>'Sariawan','name'=>'Adit','analyst_id'=>9],
            ['title'=>'Pegal','name'=>'Saunis','analyst_id'=>11],
            ['title'=>'Nyeri','name'=>'Alex','analyst_id'=>3],
            ['title'=>'Batuk','name'=>'Sutiyem','analyst_id'=>2],
            ['title'=>'Sesak Dada','name'=>'Intan','analyst_id'=>6]
        ];
        foreach ($data as $value){
            modelGrupAnalyst::insert([
                'title'=>$value['title'],
                'name'=>$value['name'],
                'analyst_id'=>$value['analyst_id']
            ]);
        }
    }
}

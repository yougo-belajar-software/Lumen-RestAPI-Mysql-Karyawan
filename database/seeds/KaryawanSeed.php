<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class KaryawanSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $gender = collect(["male","female"]);
        $faker = Faker::create();
        foreach (range(1,10) as $index) {
            DB::table('karyawans')->insert([
                '_id'=> Str::random(20),
                'nama' => $faker->name,
                'email' => $faker->unique()->safeEmail,
                'lamaKerja' => mt_rand(1,20),
                'gender'=> $gender->random()
            ]);
        }
    }
}

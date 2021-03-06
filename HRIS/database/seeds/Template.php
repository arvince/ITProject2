<?php
/**
 * Created by PhpStorm.
 * User: Asus
 * Date: 25/02/2018
 * Time: 11:46 AM
 */

use Illuminate\Database\Seeder;

class Template extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $limit = 50;
        for ($i = 0; $i < $limit; $i++) {
            DB::table('template')->insert([ //,
                'template_id'  =>  $faker->randomNumber(6,true),
                'emp_id'  =>  $faker->randomNumber(6,true),
                'context'   =>   $faker-> text(30),
                'date'       => $faker -> date('Y-m-d'),
                'salary'       => $faker -> randomNumber(7)

            ]);
        }
    }
}
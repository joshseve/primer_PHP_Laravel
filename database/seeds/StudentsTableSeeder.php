<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
          'name'=> 'Jocelin',
          'lastname'=> 'Septimo',
          'email'=>'josh.seve@gmail.com',
          'code'=>'MEX20171282',
          'age'=>31
        ]);
    }
}

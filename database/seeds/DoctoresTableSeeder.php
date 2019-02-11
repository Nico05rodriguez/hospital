<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DoctoresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('doctores')->insert([
            [
                'nombre'=>'juan1',
                'especialidad'=>'doctor1',
                'telefono'=>'12353647',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=>'juan2',
                'especialidad'=>'doctor1',
                'telefono'=>'12353647',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=>'juan3',
                'especialidad'=>'doctor1',
                'telefono'=>'12353647',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=>'juan4',
                'especialidad'=>'doctor1',
                'telefono'=>'12353647',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=>'juan5',
                'especialidad'=>'doctor1',
                'telefono'=>'12353647',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
            ]);
    }
}

<?php

use Illuminate\Database\Seeder;

class LessonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('lesson')->insert([
            [
                'lesson_title'=>'Laravel 6.X',
                'lesson_content'=>'Laravel 6.X CRUD Projesi',
                'lesson_must'=>'1',
            ],
            [
                'lesson_title'=>'Laravel 6.1',
                'lesson_content'=>'Laravel 6.1 CRUD Projesi',
                'lesson_must'=>'2',
            ],
            [
                'lesson_title'=>'Laravel 6.2',
                'lesson_content'=>'Laravel 6.2 CRUD Projesi',
                'lesson_must'=>'3',
            ],
            [
                'lesson_title'=>'Laravel 6.3',
                'lesson_content'=>'Laravel 6.3 CRUD Projesi',
                'lesson_must'=>'4',
            ],
        ]);
    }
}

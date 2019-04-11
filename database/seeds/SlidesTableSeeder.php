<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $slide = new \App\Slide();
        $slide->name = 'image1';
        $slide->image = 'slide1';
        $slide->save();

        $slide = new \App\Slide();
        $slide->name = 'image2';
        $slide->image = 'slide2';
        $slide->save();

        $slide = new \App\Slide();
        $slide->name = 'image3';
        $slide->image = 'slide3';
        $slide->save();
    }
}

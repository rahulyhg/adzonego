<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Widget::unguard();
        Widget::truncate();
        factory(Widget::class)->create();
        Widget::reguard();
    }
}

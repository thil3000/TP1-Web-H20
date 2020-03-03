<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $DB_Data = file_get_contents('database/seeds/data.sql');
        DB::raw($DB_Data);
    }
}

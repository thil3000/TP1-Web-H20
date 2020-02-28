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
        $sql = file_get_contents(__DIR__ . '/tp1.sql');
        DB::raw($sql); // DB::statement($sql);
        
        // $this->call(UsersTableSeeder::class);
    }
}

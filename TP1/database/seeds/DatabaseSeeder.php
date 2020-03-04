<?php

use Illuminate\Database\Seeder;
use App\Film;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call('RoleTableSeeder');
        $this->command->info('Role table seeded!');
        
        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
        
        $this->call('ActorTableSeeder');
        $this->command->info('Actor table seeded!');
        
        $this->call('LanguageTableSeeder');
        $this->command->info('Language table seeded!');
        
        $this->call('FilmTableSeeder');
        $this->command->info('Film table seeded!');
        $this->command->info('Language table seeded!');
        
        $this->call('ActorFilmTableSeeder');
        $this->command->info('Actor-Film table seeded!');
        
        $this->call('CriticTableSeeder');
        $this->command->info('Critic table seeded!');
        
       // $DB_Data = file_get_contents('database/seeds/data.sql');
        //DB::raw($DB_Data);
    }
}

class RoleTableSeeder extends Seeder {

    public function run()
    {
        DB::table('roles')->delete();
        $roleSeeds = file_get_contents(__DIR__ . '/roles.sql');
        $seedSQL = array_filter(array_map('trim', explode(';', $roleSeeds)));

        foreach ($seedSQL as $insert) {
            DB::statement($insert);
        }
    }
}

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        $userSeeds = file_get_contents(__DIR__ . '/users.sql');
        $seedSQL = array_filter(array_map('trim', explode(';', $userSeeds)));

        foreach ($seedSQL as $insert) {
            DB::statement($insert);
        }
    }
}

class ActorTableSeeder extends Seeder {

    public function run()
    {
        DB::table('actors')->delete();
        $actorSeeds = file_get_contents(__DIR__ . '/actors.sql');
        $seedSQL = array_filter(array_map('trim', explode(';', $actorSeeds)));

        foreach ($seedSQL as $insert) {
            DB::statement($insert);
        }
    }
}

class LanguageTableSeeder extends Seeder {

    public function run()
    {
        DB::table('languages')->delete();
        $languageSeeds = file_get_contents(__DIR__ . '/languages.sql');
        $seedSQL = array_filter(array_map('trim', explode(';', $languageSeeds)));

        foreach ($seedSQL as $insert) {
            DB::statement($insert);
        }
    }
}

class FilmTableSeeder extends Seeder {

    public function run()
    {
        DB::table('films')->delete();
        $filmSeeds = file_get_contents(__DIR__ . '/films.sql');
        $seedSQL = array_filter(array_map('trim', explode(';', $filmSeeds)));

        foreach ($seedSQL as $insert) {
            DB::statement($insert);
        }
    }
}

class ActorFilmTableSeeder extends Seeder {

    public function run()
    {
        DB::table('actor__film')->delete();
        $actorFilmSeeds = file_get_contents(__DIR__ . '/actor_film.sql');
        $seedSQL = array_filter(array_map('trim', explode(';', $actorFilmSeeds)));

        foreach ($seedSQL as $insert) {
            DB::statement($insert);
        }
    }
}

class CriticTableSeeder extends Seeder {

    public function run()
    {
        DB::table('critics')->delete();
        $criticSeeds = file_get_contents(__DIR__ . '/critics.sql');
        $seedSQL = array_filter(array_map('trim', explode(';', $criticSeeds)));

        foreach ($seedSQL as $insert) {
            DB::statement($insert);
        }
    }
}

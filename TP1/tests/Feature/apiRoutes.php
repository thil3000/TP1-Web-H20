<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use app\Film;

class apiRoutes extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {

        $response = $this->getJson('api/films/search');

        // $response->dumpHeaders();

        // $response->dumpSession();

        // $response->dump();


        $response->assertStatus(200);

        // $this->assertDatabaseHas('Film', [
        //     'id' => '1',
        // ]);
    }
}

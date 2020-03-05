<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class Film extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
         $response = $this->postJson('/film/add',[
         'title' => 'Sally',
         'release_year' => '2014',
         'length' => 'Sally',
         'description' => 'Sally',
         'rating' => 'Sally',
         'language_id' => 'Sally',
         'special_features' => 'Sally',
         'image' => 'Sally'
        ]);

                $response
                    ->assertStatus(201)
                    ->assertJson([
                        'created' => true,
                    ]);
            }
    }
    
    public function testPostArticle() {
        $response = $this->postJson( '/api/film/add', [
                    'title' => 'Sally',
                    'release_year' => '2014',
                    'length' => 'Sally',
                    'description' => 'Sally',
                    'rating' => 'Sally',
                    'language_id' => 'Sally',
                    'special_features' => 'Sally',
                    'image' => 'Sally'
                    ]);
        $response->assertJsonFragment( ['nom'=>'T-shirt']
        );
        $response->assertCreated(); 
    }
}

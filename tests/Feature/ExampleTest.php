<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    protected function setUp(): void
{
    parent::setUp();

    $this->withoutMiddleware();
}


    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
}

<?php

namespace Tests\Unit;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class SumMethodTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->getJson('/sum/1/2');

        $response
            ->assertStatus(200)
            ->assertJson([
                'num1' => 1,
                'num2' => 2,
                'sum' => 3
        ]);
    }
}

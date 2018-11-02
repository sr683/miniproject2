<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class carinsertedTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarInsert()
    {
        $car = new car();
        $car->make = 'Toyota';
        $car->model = 'Camry';
        $car->year = '2019';
        $this->assertTrue($car->save());
    }
}
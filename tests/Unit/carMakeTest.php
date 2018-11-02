<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class carMakeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarMake()
    {
        $car = car::find($id = '1');
        $make = $car -> Make;
        $constraints = ['Ford', 'Honda', 'Toyota'];
        $this->assertContains($make, $constraints );
    }
}
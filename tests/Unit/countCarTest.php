<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class carcountTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarCount()
    {
        $cars = car::All();
        $carCount = 51;
        $recordCount = $cars->count();
        $this->assertEquals($carCount, $recordCount);
    }
}
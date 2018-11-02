<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class carStringTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testcarModel()
    {
        $car = car::find($id = '1');
        $model = $car->Model;
        $this->assertInternalType('string', $model);
    }
}
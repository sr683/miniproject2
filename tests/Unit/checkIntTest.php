<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\car;

class carIntTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testYearType()
    {
        $car = new car();
        $year = (int)$car->year;
        echo $year;
        $this->assertInternalType(IsType::TYPE_INT, $year);
    }
}
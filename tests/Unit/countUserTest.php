<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class countUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserCount()
    {
        $users = User::All();
        $userCount = 50;
        $recordCount = $users->count();
        $this->assertEquals($userCount, $recordCount);
    }
}
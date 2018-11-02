<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class updateUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserUpdate()
    {
        $user = User::find($id = '1');
        $user -> name = 'Steve Smith';

        $this->assertTrue($user->save());
    }
}

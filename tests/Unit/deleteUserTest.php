<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class deleteUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUserDelete()
    {
        $user = new User();
        $user->name = 'Norman Tookmanian';
        $user->email = 'took345@gmail.com';
        $user->password = 'password';
        $user->save();
        $this->assertTrue($user->delete());
    }
}
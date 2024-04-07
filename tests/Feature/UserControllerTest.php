<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;

class UserControllerTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function testUpdateUser(): void
    {
        $bimo = User::find('mbimo@gmail.com');
        $bimo->email = 'mbimo@gmail.com';
        $bimo->name = 'Bimo Updated';
        $bimo->save();
    }
}

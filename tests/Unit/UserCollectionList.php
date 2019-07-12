<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserCollectionList extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testUserCollection()
    {


        $this->assertEquals('Illuminate\Database\Eloquent\Collection', get_class(User::all()));
        //$this->assertTrue(true);
    }
}

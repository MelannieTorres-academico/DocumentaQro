<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class auth extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {


        $response = $this->withSession(['foo' => 'bar'])
                         ->get('/');
    }
}

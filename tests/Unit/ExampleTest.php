<?php

namespace Tests\Unit;

//use PHPUnit\Framework\TestCase;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use Laravel\Dusk\DuskServiceProvider;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    /*

    public function testBasicTest()
    {
        $this->assertTrue(true);


    }
/*
    public function testNewTest()
    {
        $response = $this->get('/');
        $response->dumpHeaders();
        $response->dump();
    }
*/
    public function testApplication()
    {
        $response = $this->withSession(['foo' => 'bar'])
            ->get('/');
    }

    public function testBasicExample()
    {
        $response = $this->json('POST', '/contact', ['name' => 'Sally']);

        $response
            ->assertStatus(200)
            ->assertJson([
                'created' => true,
            ]);
    }




}

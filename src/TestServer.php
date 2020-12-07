<?php

namespace MakeDoc;

use Illuminate\Foundation\Testing\TestCase;

class TestServer extends TestCase
{
    use \Illuminate\Foundation\Testing\WithoutMiddleware;

    public function getRequest($url)
    {
        $response = $this->get($url);
        $response->assertStatus(200);
        $data = $response->json();
        dd($data);
    }


    public function createApplication()
    {
    }
}
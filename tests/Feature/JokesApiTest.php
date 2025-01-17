<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use Illuminate\Support\Facades\Http;


class JokesApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_if_api_returns_data()
    {
        $response = Http::get('https://official-joke-api.appspot.com/jokes/programming/ten/');
        if($response->ok() == true){
            $jokes = $response->json();
            return $jokes;
        }else{
            echo 'Something Went Wrong in api';
            return false;

        }
        
    }
}

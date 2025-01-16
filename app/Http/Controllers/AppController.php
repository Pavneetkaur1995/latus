<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule; 
    

class AppController extends Controller
{
    private $apiUrl;
    
    public function __construct()
    {
        $this->apiUrl = $_ENV['JOKE_API_URL']; 
    }

    //get all jokes from API
    public function getAllJokes()
    {
        $jokes = array();
        $response = Http::get($this->apiUrl);
        if($response->ok() == true){
            $jokes = $response->json();
        };
        return $jokes;
        
    }

    // Return the random jokes
    public function shuffleJokes($all_jokes)
    {
        shuffle($all_jokes);
        $random_jokes = array_slice($all_jokes, 0, 3);
        return $random_jokes;
    }
    
    // Get Three random jokes
    public function getRandomJokes()
    {
        $all_jokes = $this->getAllJokes();
        if(!empty($all_jokes)){

            $random_jokes = $this->shuffleJokes($all_jokes);
            return view('api.index', compact('random_jokes'));

        }else{
            // If API does not return any response
            echo 'Something Went Wrong';
            return False;
        }

    }

    public function getRandomOnRefreshJokes() 
    {
        $all_jokes = $this->getAllJokes();
        if(!empty($all_jokes)){
            $random_jokes = $this->shuffleJokes($all_jokes);
            return $random_jokes;
        }

    }

    public function passwordShow()
    {

        return view('api.authenticate');

    }   

    public function checkPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'password' => [
                Rule::in([env('UNIQUE_PAGE_PASSWORD')]),
            ]    
        ]);
        if ($validator->fails()){

            return response()->json([
                    "status" => false,
                    "errors" => $validator->errors()
                ]);

        } else {

            $all_jokes = $this->getAllJokes();
            if(!empty($all_jokes)){

                $random_jokes = $this->shuffleJokes($all_jokes);
                $jokes_view = view('api.index', compact('random_jokes'))->render();
                return response()->json([
                    "status" => true, 
                    'jokesPage' => $jokes_view,
                ]);
            }else{

                return response()->json([
                    "status" => false,
                    "errors" => ['Something Went Wrong']
                ]);

            }

        }

    }

}

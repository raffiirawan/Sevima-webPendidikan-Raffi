<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \OpenAI;

class AiController extends Controller
{
    public function index() {
        // $yourApiKey = config('OPEN_AI_KEY');
        $client = OpenAI::client(env("OPEN_AI_KEY"));

        $result = $client->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'PHP is',
]);

echo $result['choices'][0]['text']; // an open-source, widely-used, server-side scripting language.
    }
}

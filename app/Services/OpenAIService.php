<?php 
namespace App\Services;

use OpenAI;

class OpenAIService
{
    protected $client;

    public function __construct()
    {
        $this->client = OpenAI::client(env('OPENAI_API_KEY'));
    }

    public function chat($message)
    {
        $response = $this->client->chat()->create([
            'model' => 'gpt-4o',  // Change to 'gpt-3.5-turbo' if needed
            'messages' => [
                ['role' => 'system', 'content' => 'You are a helpful assistant.'],
                ['role' => 'user', 'content' => $message]
            ]
        ]);

        return $response['choices'][0]['message']['content'] ?? 'No response';
    }
}

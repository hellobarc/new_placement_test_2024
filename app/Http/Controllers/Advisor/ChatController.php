<?php

namespace App\Http\Controllers\Advisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\OpenAIService;

class ChatController extends Controller
{
    protected $openAIService;

    public function __construct(OpenAIService $openAIService)
    {
        $this->openAIService = $openAIService;
    }

    public function chat(Request $request)
    {
        $userMessage = $request->input('message');
        $response = $this->openAIService->chat($userMessage);

        return response()->json(['response' => $response]);
    }
}

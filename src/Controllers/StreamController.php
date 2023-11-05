<?php

namespace Konnec\Debugging\Controllers;

use Illuminate\Http\Request;
use Konnec\Debugging\Facades\Stream;
use Symfony\Component\HttpFoundation\StreamedResponse;

class StreamController extends Controller
{
    public function index(Request $request): StreamedResponse
    {
        $response = new StreamedResponse(function() use ($request) {
            while(true) {
//                echo 'data: ' . json_encode(['id' => 1]) . "\n\n";
                $message = Stream::first();
                if (!is_null($message)) {
                    echo json_encode($message) . "\n\n";
                };
                ob_flush();
                flush();
                usleep(500 * 1000);
            }
        });
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('X-Accel-Buffering', 'no');
        $response->headers->set('Cache-Control', 'no-cache');
        return $response;
    }
}

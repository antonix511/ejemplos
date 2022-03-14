<?php

namespace App\Http\Shared;

trait ResponseMaker
{
    public function makeJsonResponse($status, $status_code, $message, array $data)
    {
        $response = [
            '_status' => $status,
            '_message' => $message,
            '_status_code' => $status_code
        ];

        (!empty($data)) ? $response['data'] = $data : null;

        return response()->json($response, $status_code);
    }
}

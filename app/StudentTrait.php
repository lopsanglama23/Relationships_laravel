<?php

namespace App;

trait StudentTrait
{
    public function sendresponse($message, $data, $code){
        return response()->json([
            "message" => $message,
            "data" => $data,
        ],200);
    }
}

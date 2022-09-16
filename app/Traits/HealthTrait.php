<?php

namespace App\Traits;

trait HealthTrait{
    public function header_uri()
    {
        return [
            'Content-Type'      => "application/json",
            'Accept'            => "application/json",
            'x-access-token'     => env('TOKEN_API'),
        ];
    }
}
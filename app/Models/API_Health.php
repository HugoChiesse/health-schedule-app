<?php

namespace App\Models;

use App\Traits\HealthTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use GuzzleHttp\Client;


class API_Health extends Model
{
    use HasFactory, HealthTrait;

    private $url, $headers;

    public function __construct()
    {
        $this->headers = $this->header_uri();
        $this->url = "https://api.feegow.com/v1/api";
    }

    public function api_feegow($link)
    {
        $url = $this->url . $link;
        $client = new Client();
        $res = $client->request('GET', $url, [
            'headers' => $this->headers,
        ]);
        $res->getStatusCode();
        $body = $res->getBody();
        $contents = $body->getContents();

        return json_decode($contents);
    }

}

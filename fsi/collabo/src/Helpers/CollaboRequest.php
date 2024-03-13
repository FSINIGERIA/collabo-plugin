<?php

namespace Fsi\Collabo\Helpers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Cache;



class CollaboRequest {

    private $authorizationToken;

    
    public function sendPostRequest($url, $data){
        
        $authorization = $this->getAuthorizationToken();

        if (!$authorization) {
            return response()->json(['errorDesc' => 'Authorization error'], 401);
        }

        $response = Http::withHeaders([
            "CUSTOMER_AUTHORIZATION" => $authorization,
            "Content-Type" => "application/json"
        ])->post($url, $data);

        return json_decode($response->body(), true);
    }

    public function sendGetRequest($url){

        $authorization = $this->getAuthorizationToken();

        if (!$authorization) {
            return response()->json(['errorDesc' => 'Authorization error'], 401);
        }

        
        $response = Http::withHeaders([
            "CUSTOMER_AUTHORIZATION" => $authorization,
            "Content-Type" => "application/json"
        ])->get($url);

        return json_decode($response->Body(), true);
    }

    private function getAuthorizationToken() {

        $cachedToken = Cache::get('authorization_token');

        if ($cachedToken && !$this->isTokenExpired($cachedToken)) {
            $this->authorizationToken = $cachedToken['token'];
            return $this->authorizationToken;
        }

        $newToken = $this->fluter_get_authorization();

        if (!$newToken || !isset($newToken['Authorization']) || !isset($newToken['max-age'])) {
            return null;
        }

        $this->authorizationToken = $newToken['Authorization'];

        $cachedData = [
            'token' => $this->authorizationToken,
            'max-age' => $newToken['max-age']
        ];

        // Cache the new token with an expiration time provided by fluter_get_authorization
        Cache::put('authorization_token', $cachedData);

        return $this->authorizationToken;
    }

    private function isTokenExpired($token) {
        // Check if the token is expired based on the "max-age" value
        $expiresInMinutes = isset($token['max-age']) ? (int)$token['max-age'] : 0;
        
        return $expiresInMinutes <= 0 || now() > now()->addMinutes($expiresInMinutes);
    }

    private function fluter_get_authorization() {
        $url = config('collabo.baseurl');

        $data = [
            "ux" => config('collabo.ux'),
            "iv" => config('collabo.iv'),
            "key" => config('collabo.key')
        ];

        $response = Http::post($url, $data);

        return json_decode($response->body(), true);
    }

    // handle response
    public function successResponse($data, $code = 200)
    {
        return response()->json($data, $code);
    }

    public function errorResponse($message, $code = 422)
    {
        return response()->json(['error' => $message], $code);
    }
}
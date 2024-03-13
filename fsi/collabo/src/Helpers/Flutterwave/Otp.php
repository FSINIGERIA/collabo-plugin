<?php
namespace Fsi\Collabo\Helpers\Flutterwave;

use Illuminate\Http\Request;
use fsi\collabo\src\Helpers\CollaboRequest;


class Otp
{
    protected $collabo;
    protected $baseurl;

    public function __construct(){
        $this->collabo = new CollaboRequest();
        $this->baseurl = config('collabo.flutter_baseurl');

    }

    public function generate($data){

        $url = $this->baseurl."/otp/generate-otp";
        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function verify($data){

        $url = $this->baseurl."/otp/verify-otp";
        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }
}
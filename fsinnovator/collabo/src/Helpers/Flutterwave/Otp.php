<?php
namespace Fsinnovator\Collabo\Helpers\Flutterwave;

use Illuminate\Http\Request;
use fsi\collabo\src\Helpers\CollaboRequest;


class Otp
{
    protected $collabo;
    protected $baseurl;

    public function __construct(){
        $this->collabo = new CollaboRequest();
        $this->baseurl = config('collabo.base_url');

    }

    public function generate($data){

        $url = $this->baseurl."/flutterwave/otp/generate-otp";
        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function verify($data){

        $url = $this->baseurl."/flutterwave/otp/verify-otp";
        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }
}
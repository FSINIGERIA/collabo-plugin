<?php
namespace Fsi\Collabo\Controllers;

use Illuminate\Http\Request;
use fsi\collabo\src\Helper\Collabo;
use Fsi\Collabo\Helpers\CollaboRequest;



class Dispute
{
    protected $collabo;
    protected $baseurl;

    public function __construct(){
        $this->collabo = new CollaboRequest();
        $this->baseurl = config('collabo.base_url');

    }

   public function logDispute($data){
        $url = $this->baseurl."/parkway/disputes/log-dispute";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
   }

   public function getLoggedDispute($data){
        $url = $this->baseurl."/parkway/disputes/log-dispute";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
   }
}
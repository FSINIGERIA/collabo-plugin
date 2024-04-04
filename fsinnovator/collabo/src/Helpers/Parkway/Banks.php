<?php
namespace Fsinnovator\Collabo\Controllers;

use Illuminate\Http\Request;
use fsi\collabo\src\Helper\Collabo;
use Fsinnovator\Collabo\Helpers\CollaboRequest;


class Banks
{
    protected $collabo;
    protected $baseurl;

    public function __construct(){
        $this->collabo = new CollaboRequest();
        $this->baseurl = config('collabo.base_url');

    }

   public function lookupbanks(){

        $url = $this->baseurl."/parkway/banks/only-banks";

        $response = $this->collabo->sendPostRequest($url, []);

        return response()->json($response, 200);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
   }

   public function financialInstitutions(){

        $url = $this->baseurl."/parkway/banks/all-financial-institutions";

        $response = $this->collabo->sendPostRequest($url, []);

        return response()->json($response, 200);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);

   }
   
   public function listMnos(){
    $url = $this->baseurl."/parkway/banks/only-mnos";

    $response = $this->collabo->sendPostRequest($url, []);

    return response()->json($response, 200);

    if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

    return $this->collabo->successResponse($response, 200);
   }

   public function accountNameEnquiry($data){
        $url = $this->baseurl."/parkway/banks/account-name-enquiry";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
   }
}
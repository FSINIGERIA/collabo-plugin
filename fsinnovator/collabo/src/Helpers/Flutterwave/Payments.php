<?php
namespace Fsinnovator\Collabo\Helpers\Flutterwave;

use Illuminate\Http\Request;
use fsi\collabo\src\Helpers\CollaboRequest;



class Payments
{
    protected $collabo;
    protected $baseurl;

    public function __construct(){
        $this->collabo = new CollaboRequest();
        $this->baseurl = config('collabo.base_url');

    }

    public function initiate($data){
        
        $url = $this->baseurl."/flutterwave/payments/intiate-payment";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function initiateRefund($data){

        $url = $this->baseurl."/flutterwave/payments/transaction-refund";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function verify($data){

        $url = $this->baseurl."/flutterwave/payments/verify-transaction-by-ref";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    // public function lookup_bulk_transaction_by_id(){
        
    // }
}
<?php
namespace Fsinnovator\Collabo\Helpers\Flutterwave;

use Illuminate\Http\Request;
use fsi\collabo\src\Helpers\CollaboRequest;


class Transfers
{
    protected $collabo;
    protected $baseurl;

    public function __construct(){
        $this->collabo = new CollaboRequest();
        $this->baseurl = config('collabo.base_url');

    }

    public function create($data){

        $url = $this->baseurl."/flutterwave/transfers/create-transfer";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function fee($data){

        $url = $this->baseurl."/flutterwave/transfers/transfer-fee";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);

    }

    public function retry($retryid){

        $url = $this->baseurl."/flutterwave/transfers/retry-transfer/".$retryid;

        $response = $this->collabo->sendPostRequest();

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);

    }

    public function lookupByStatus($data){
       
        $url = $this->baseurl."/flutterwave/transfers/all-transfers";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function getTransactionById($id){
       
        $url = $this->baseurl."/flutterwave/transfers/get-transfer-by-id/transid?id=".$id;

        $response = $this->collabo->sendGetRequest($url);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function bulkTransfer($data){
       
        $url = $this->baseurl."/flutterwave/transfers/bulk-transfer";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function lookupRetryTransferById($id){
       
        $url = $this->baseurl."/flutterwave/transfers/fetch-retry-by-id/".$id;

        $response = $this->collabo->sendPostRequest($url, []);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);

    }
}
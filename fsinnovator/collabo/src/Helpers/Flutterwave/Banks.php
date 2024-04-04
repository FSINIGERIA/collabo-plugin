<?php
namespace Fsinnovator\Collabo\Helpers\Flutterwave;

use Illuminate\Http\Request;
use Fsinnovator\Collabo\Helpers\CollaboRequest;

class Banks
{
    protected $collabo;
    protected $baseurl;

    public function __construct(){
        $this->collabo = new CollaboRequest();
        $this->baseurl = config('collabo.base_url');

    }

    public function lookupBanks(){
        
        $url = $this->baseurl."/flutterwave/banks/banks-list/NG";

        $response = $this->collabo->sendPostRequest($url, []);

        return response()->json($response, 200);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }
}
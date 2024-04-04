<?php
namespace Fsinnovator\Collabo\Controllers;

use Illuminate\Http\Request;
use fsi\collabo\src\Helper\Collabo;
use Fsinnovator\Collabo\Helpers\CollaboRequest;


class WalletController
{
    protected $collabo;
    protected $baseurl;

    public function __construct(){
        $this->collabo = new CollaboRequest();
        $this->baseurl = config('collabo.base_url');

    }

    public function activeWallet($data){
        $url = $this->baseurl."/parkway/wallets/activate-wallet";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function addAccountToWallet($data){
        $url = $this->baseurl."/parkway/wallets/add-account-to-wallet";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function chargeDebitCustomerWallet($data){
        $url = $this->baseurl."/parkway/wallets/charge-debit-customer-wallet";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function chargeDebitCustomerWalletStatus(){
        $url = $this->baseurl."/parkway/wallets/charge-debit-customer-status";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function walletToWallet($data){
        $url = $this->baseurl."/parkway/wallets/wallet-2-wallet";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function walletBalance($data){
        $url = $this->baseurl."/parkway/wallets/wallet-balance";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function createWallet($data){
        $url = $this->baseurl."/parkway/wallets/create-wallet";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function fundWallet($data){
        $url = $this->baseurl."/parkway/wallets/fund-wallet";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function fundWalletDirect($data){
        $url = $this->baseurl."/parkway/wallets/fund-wallet";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function walletToBank($data){
        $url = $this->baseurl."/parkway/wallets/wallet-2-bank";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function fundWalletStatus($data){
        $url = $this->baseurl."/parkway/wallets/fund-wallet";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function walletStatement($data){
       
        $url = $this->baseurl."/parkway/wallets/wallet-statement";

        $response = $this->collabo->sendPostRequest($url, $data);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }

    public function walletPoolBalances(){
        
        $url = $this->baseurl."/parkway/wallets/wallet-pool-balances";

        $response = $this->collabo->sendPostRequest($url, []);

        if(isset($response->errorDesc)) return $this->collabo->errorResponse($response->errorDesc, $response->hasHeader('status') ? $response->headers->get('status') : 400);

        return $this->collabo->successResponse($response, 200);
    }
}
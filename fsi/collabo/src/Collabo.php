<?php

namespace Fsi\Collabo;

use Illuminate\Support\Facades\Http;
use Unirest\Request\Body;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;
use Fsi\Collabo\Helpers\Flutterwave\Banks;
use Fsi\Collabo\Helpers\Flutterwave\Otp;
use Fsi\Collabo\Helpers\Flutterwave\Payments;
use Fsi\Collabo\Helpers\Flutterwave\Transfers;


class Collabo {

    /**
     * Banks
     * @return Banks
     */

    public function banks(){
        $banks = new Banks();
        
        return $banks;
    }

    /**
     * Payments
     * @return Payments
     */

    public function payments(){
        $payment = new Payments();
        
        return $payment;
    }

    /**
     * Otp
     * @return Otp
     */

    public function otp(){
        $otp = new Otp();
        
        return $otp;
    }

    /**
     * Transfers
     * @return Transfers
     */

    public function transfers(){
        $transfer = new Transfers();
        
        return $transfer;
    }
}
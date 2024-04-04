<?php

namespace Fsinnovator\Collabo;

use Illuminate\Support\Facades\Http;
use Unirest\Request\Body;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Config;

// flutterwave
use Fsinnovator\Collabo\Helpers\Flutterwave\Banks;
use Fsinnovator\Collabo\Helpers\Flutterwave\Otp;
use Fsinnovator\Collabo\Helpers\Flutterwave\Payments;
use Fsinnovator\Collabo\Helpers\Flutterwave\Transfers;

// parkway
use Fsinnovator\Collabo\Helpers\Parkway\Banks as ParkwayBank;
use Fsinnovator\Collabo\Helpers\Parkway\Dispute;
use Fsinnovator\Collabo\Helpers\Parkway\Wallet;


class Collabo {

    // flutterwave instances

    /**
     * Banks
     * @return Banks
     */

    public function FlutterwaveBank(){
        $banks = new Banks();
        
        return $banks;
    }

    /**
     * Payments
     * @return Payments
     */

    public function FlutterwavePayment(){
        $payment = new Payments();
        
        return $payment;
    }

    /**
     * Otp
     * @return Otp
     */

    public function FlutterwaveOtp(){
        $otp = new Otp();
        
        return $otp;
    }

    /**
     * Transfers
     * @return Transfers
     */

    public function FlutterwaveTransfer(){
        $transfer = new Transfers();
        
        return $transfer;
    }

    // Parkway Instances

    /**
     * ParkwayBanks
     * @return ParkwayBanks
     */
    public function ParkwayBank(){
        $bank = new ParkwayBank();

        return $bank;
    }

    /**
     * ParkwayDispute
     * @return ParkwayDispute
     */
    public function ParkwayDispute(){
        $dispute = new Dispute();

        return $dispute;
    }

    /**
     * ParkwayWallet
     * @return ParkwayWallet
     */
    public function ParkwayWallet(){
        $wallet = new Dispute();

        return $wallet;
    }
}
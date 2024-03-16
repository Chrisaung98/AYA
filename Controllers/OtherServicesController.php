<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ExchangeRate;
use App\Models\ExchangeRateBuySell;
use App\Models\OtherExchangeRate;
use App\Models\WorkerRemittance;
use App\Models\PersonalBanking\OtherServices\ForeignCurrencyExchangeService;
use App\Models\FAQ;
use DB;

class OtherServicesController extends Controller
{
    public function foreignCurrencyIndex()
    {
        $exchange_rate = ExchangeRate::get();
        $exchange_rate_buy_sell = ExchangeRateBuySell::orderBy('id','desc')->first();

        $other_rate = OtherExchangeRate::orderBy('id','desc')->first();
        $worker_remittance = WorkerRemittance::orderBy('id','desc')->first();

        $page_data = ForeignCurrencyExchangeService::first();
        
        return view('other-services.foreign-currency-exchange')
                ->with('exchange_rate',$exchange_rate)
                ->with('exchange_rate_buy_sell',$exchange_rate_buy_sell)
                ->with('other_rate',$other_rate)
                ->with('worker_remittance',$worker_remittance)
                ->with('page_data',$page_data);
                
    }

    public function safeDepositIndex()
    {
        return view('other-services.safe-deposit');
    }
}

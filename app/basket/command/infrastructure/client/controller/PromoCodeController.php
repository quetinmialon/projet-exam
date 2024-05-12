<?php

namespace App\basket\command\infrastructure\client\controller;

use App\basket\command\work_application\services\PromoCodeServices;
use App\shared\Controller;
use Illuminate\Http\Request;

class PromoCodeController extends Controller {
    public function __construct(private PromoCodeServices $promoCodeServices){}

    public function addPromoCode(Request $request){
        $this->promoCodeServices->create( $request->input('label'), $request->input('type'), $request->input('value'));
        return redirect('backOffice/promoCode');
    }

    public function deletePromoCode(Request $request){
        $this->promoCodeServices->deletePromoCode( $request->label);
        return redirect('backOffice/promoCode');
    }
}
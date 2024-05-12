<?php
namespace App\basket\query\infrastructure\client\controller;


use App\basket\query\work_application\queries\GetAllPromoCodes;
use App\basket\query\work_application\queries\GetPromoCodeByLabel;
use App\shared\Controller;
use Illuminate\Http\Request;

class QueryPromoCodeController extends Controller {

    public function __construct(private GetPromoCodeByLabel $getPromoCodeByLabel, private GetAllPromoCodes $getAllPromoCodes){}
    
    public function getPromoCodeByLabel($label){
        return view('backOffice.promoCode.promoCode',['promoCode'=>$this->getPromoCodeByLabel->execute($label)]);
    }

    public function getAllPromoCodes(){
        return view('backOffice.promoCode.promoCodes',['promoCodes' => $this->getAllPromoCodes->execute()]);
    }
    
}
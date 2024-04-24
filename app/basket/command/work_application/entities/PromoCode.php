<?php

namespace App\basket\command\work_application\entities;

class PromoCode{
    public function __construct(private string $label, private string $type, private int $value){}
    public static function create(string $label, string $type, int $value):?self{


        if($type == 'percentage' && $value > 100){
            return null;
        };
        
        return new self($label, $type, $value);
    }

    public function snapshot(){
        return [
            'label' => $this->label,
            'type' => $this->type,
            'value' => $this->value,
        ];
    }
}

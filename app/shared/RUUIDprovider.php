<?php

namespace App\shared;

class RUUIDprovider implements UUIDProvider{
    public function getUUID():string{
        return  \Illuminate\Support\Str::uuid()->toString();
    }

    }

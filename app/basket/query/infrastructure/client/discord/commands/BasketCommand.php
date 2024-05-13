<?php

namespace App\basket\query\infrastructure\client\discord\commands;

use App\basket\query\work_application\services\QueryBasketServices;
use App\discord\DiscordCommand;
use Discord\Builders\MessageBuilder;
use Discord\Parts\Interactions\Interaction;

class BasketCommand extends DiscordCommand 
{
    public function __construct(private readonly QueryBasketServices $basketService)
    {
        parent::__construct(name: 'basket', description: 'Give your basket');
    }
    public function execute(Interaction $interaction): void
    {
        $basket = $this->basketService->getBasket(1);
        $interaction->respondWithMessage(MessageBuilder::new()->setContent(json_encode($basket, JSON_PRETTY_PRINT)));
    }
}


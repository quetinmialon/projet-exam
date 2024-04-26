<?php

namespace App\discord;

use Discord\Parts\Interactions\Interaction;

abstract class DiscordCommand
{
    public function __construct(private readonly string $name, private readonly string $description){}
    public abstract function execute(Interaction $interaction): void;

    public function getName(): string
    {
        return $this->name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }
}

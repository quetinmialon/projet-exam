<?php

use App\basket\query\work_application\services\QueryBasketServices;
use Discord\Discord;
use Discord\WebSockets\Intents;
use Illuminate\Support\Facades\Artisan;
use Discord\Parts\Interactions\Interaction;
use Illuminate\Foundation\Application;
use App\basket\query\infrastructure\client\discord\commands\BasketCommand;

function getCommands(Application $app): array
{
    return [
        new BasketCommand($app->get(QueryBasketServices::class)),
    ];
}

Artisan::command('discord', function (Application $app) {
        $discord = new Discord([
            'token' => "MTIzMzA5OTQ3NjE5Mzc3MTU3Mw.GpGHD4.zdBXy7Ji-hDG0eJ41-VmU87-knLPSnfIj0VJr4",
            'intents' => Intents::getDefaultIntents()
        ]);

        $commandListeners = getCommands($app);

        $discord->on('ready', function (Discord $discord) use ($commandListeners) {
            foreach ($commandListeners as $commandListener) {
                $discord->listenCommand($commandListener->getName(), function (Interaction $interaction) use ($commandListener) {
                    $commandListener->execute($interaction);
                });
            }
        });

})->purpose('Start discord bot');


Artisan::command('discord:commands', function (Application $app) {
    $discord = new Discord([
        'token' => "MTIzMzA5OTQ3NjE5Mzc3MTU3Mw.GpGHD4.zdBXy7Ji-hDG0eJ41-VmU87-knLPSnfIj0VJr4",
        'intents' => Intents::getDefaultIntents(),
    ]);

    $commands = getCommands($app);

    $discord->on('ready', function (Discord $discord) use ($commands) {
        foreach ($commands as $command) {
            $discord->application->commands->save($discord->application->commands->create([
                'name' => $command->getName(),
                'description' => $command->getDescription(),
                'integration_type' => [0,1],
                'contexts' => [0,1,2],
            ]));
        }
        $discord->close();
    });
})->purpose('Create discord commands');

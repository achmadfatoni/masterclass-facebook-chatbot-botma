<?php
use App\Http\Controllers\BotManController;

$botman = resolve('botman');

$botman->hears('hi', function ($bot) {
    $bot->reply('Hello!');
});

$botman->hears('it works', function ($bot) {
    $bot->reply('Yea it works');
});

$botman->hears('call me {name}', function ($bot, $name) {
    $bot->reply('Your name is: '.$name);
});

$botman->hears('Start conversation', BotManController::class.'@startConversation');

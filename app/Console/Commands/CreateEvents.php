<?php

namespace App\Console\Commands;

use App\Event;
use App\User;
use Illuminate\Console\Command;

class CreateEvents extends Command
{
    protected $signature = 'fc:events';

    protected $description = 'Create Events';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $user = User::find(1);

        foreach([1,2,3,4,5] as $i) {
            /** @var Event $event */
            $event = factory(Event::class)->create();
            $event->users()->save($user);
        }
    }
}

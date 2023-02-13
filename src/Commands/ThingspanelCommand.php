<?php

namespace Thingspanel\Thingspanel\Commands;

use Illuminate\Console\Command;

class ThingspanelCommand extends Command
{
    public $signature = 'thingspanel';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

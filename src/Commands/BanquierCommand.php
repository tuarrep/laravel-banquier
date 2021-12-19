<?php

namespace Banquier\Banquier\Commands;

use Illuminate\Console\Command;

class BanquierCommand extends Command
{
    public $signature = 'laravel-banquier';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

<?php

namespace Bigtechlabs\DddPackage\Commands;

use Illuminate\Console\Command;

class DddPackageCommand extends Command
{
    public $signature = 'ddd-package';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}

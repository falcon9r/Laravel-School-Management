<?php

namespace Database\Seeders;

use App\Services\Common\Helpers\Logger\Logger;
use Illuminate\Database\Seeder;

class BaseSeeder extends Seeder
{
    protected Logger $logger;

    public function __construct()
    {
        $this->logger = new Logger("database/seeding", 'seeding');
    }
}

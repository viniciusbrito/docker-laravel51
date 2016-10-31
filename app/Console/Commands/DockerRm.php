<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerRm extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:remove {id? : Remove a specific container}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Remove containers or a specific container';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        if($containerId = $this->argument('id')) {
            $this->info('Removing container');
            shell_exec('docker rm '.$containerId);
        }
        else {
            $this->info('Removing containers');
            shell_exec('docker-compose rm -f');
            $this->info('Containers Removed');
        }
    }
}

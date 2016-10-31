<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerUp extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:up {id? : Start a specific container}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Start containers or a specific container.';

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
            $this->info('Starting container '.$containerId);
            shell_exec('docker start '.$containerId);
        }        
        else {
            $this->info('Starting containers');
            shell_exec('docker-compose up -d');
            $this->info('All containers started');
        }        
    }
}

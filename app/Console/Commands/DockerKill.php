<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerKill extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:kill {id? : Kill a specific container}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Kill containers or a specific container.';

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
            $this->info('Killing container '.$containerId);
            shell_exec('docker kill '.$containerId);
        }
        else {
            $this->info('Killing containers');
            shell_exec('docker-compose kill');
        }        
    }
}

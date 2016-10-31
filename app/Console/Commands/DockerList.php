<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DockerList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'docker:list {--all : List all containers (include containers stoped)}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List containers that are running';

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
        if($this->option('all')) {
            $this->info('List of container');
            echo shell_exec('docker ps -a');
        }
        else {
            $this->info('List of containers');
            echo shell_exec('docker ps');
        }
    }
}

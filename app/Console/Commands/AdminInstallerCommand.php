<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class AdminInstallerCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Install fresh admin dashboard';

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
     * @return int
     */
    public function handle()
    {
        $this->call('key:generate');
        $this->call('migrate:fresh');
        $this->call('db:seed', ['--class' => 'PermissionTableSeeder']);
        $this->call('db:seed', ['--class' => 'CreateAdminUserSeeder']);
        $this->call('db:seed', ['--class' => 'UserSeeder']);
        $this->call('storage:link');
        $this->call('insert:data');
    }
}

<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class InsertDataCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'insert:data';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'insert dataset to database';

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
        $this->call('db:seed', ['--class' => 'CreatePenyakitSeeder']);
        $this->call('db:seed', ['--class' => 'CreateGejalaSeeder']);
        $this->call('db:seed', ['--class' => 'GejalaPenyakitSeeder']);
        // $this->call('db:seed', ['--class' => 'CreateRuleSeeder']);
    }
}

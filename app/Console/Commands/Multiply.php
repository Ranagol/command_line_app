<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class Multiply extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'multiply {number1} {number2}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $number1 = $this->argument('number1');
        $number2 = $this->argument('number2');
        echo $this->info($number1 * $number2);//this is just a fancy way for coloring our output
    }
}

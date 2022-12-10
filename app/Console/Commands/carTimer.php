<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use CustomHelper;

class carTimer extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:carTimer';

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
        $minutes = $this->ask('Minutes?');
        if(!is_numeric($minutes)) {
            print("Please enter numeric value \n"); die;
        } if($minutes < 1 || $minutes > 999) {
            print("Please enter minutes in between 1 to 999 range.\n"); die;
        }
        $result = CustomHelper::carTimer($minutes);
        print($result."\n");
    }
}

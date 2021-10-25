<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class SendEmails extends Command
{
    public $errors = [
        'age' => [],
        'email' => []
    ];
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'send:emails';

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
        $users = User::orderBy('date_registration', 'ASC')->get();
        $users = $this->checkAge($users);
        Log::info($users->count());
        foreach ($users as $user){
            $user = $this->checkAge($users);
            $this->sendMailTo($user);
        }
        return Command::SUCCESS;
    }

    public function sendMailTo($user)
    {
      
    }

    public function checkAge($user)
    {
        if($user->age >= 18){
            return $user;
        }

    }
}

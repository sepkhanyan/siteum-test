<?php

namespace App\Console\Commands;

use App\Mail\NewMessage;
use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class SendEmails extends Command
{
    public $errors = [];
    public $messagesCount = 0;
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
        $users = User::where('age', '>=', 18)
            ->orderBy('date_registration', 'ASC')->get();

        if($users->isNotEmpty()){
            foreach ($users as $user){
                $this->sendMailTo($user);
            }

            $this->sendReport($this->messagesCount, $this->errors);

            return Command::SUCCESS;
        }
    }

    public function sendMailTo($user)
    {
        if($this->checkEmail($user->email)){
            $details = [
                'title' => 'Здравствуйте, ' . $user->name . '!',
                'body' => 'Это тестовая рассылка писем от Siteum.'
            ];

            Mail::to($user->email)->send(new NewMessage($details));

            $this->messagesCount++;
        }
    }

    public function sendReport($count, $errors)
    {
        $details = [
            'count' => 'Количество отправленных писем: ' . $count,
            'errors_title' => 'Ошибки',
            'errors' => $errors
        ];

        Mail::to('pavlova@saytum.ru')->send(new NewMessage($details));
    }

    public function checkEmail($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error = $email . ': Некорректный формат email.';
            array_push($this->errors, $error);
            return false;
        }

        return true;
    }
}

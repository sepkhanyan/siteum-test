<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Владимир', 'email' => 'vlad@saytum.ru', 'age' => 14, 'date_registration' => 1395338433, 'spam_disable' => 0],
            ['name' => 'Яна', 'email' => 'yura@saytum.ru', 'age' => 23, 'date_registration' => 1394128833, 'spam_disable' => 0],
            ['name' => 'Василий', 'email' => 'vlad@saytum.ru', 'age' => 22, 'date_registration' => 1092110433, 'spam_disable' => 1],
            ['name' => 'Дима', 'email' => 'dima@saytum.ru', 'age' => 11, 'date_registration' => 1191647013, 'spam_disable' => 0],
            ['name' => 'Мария', 'email' => 'yura@saytum.ru', 'age' => 30, 'date_registration' => 1223269413, 'spam_disable' => 0],
            ['name' => 'Василий', 'email' => 'vlad@saytum.ru', 'age' => 22, 'date_registration' => 1209877593, 'spam_disable' => 0],
            ['name' => 'Павел', 'email' => 'dima@saytum.ru', 'age' => 11, 'date_registration' => 1052046393, 'spam_disable' => 1],
            ['name' => 'Юлия', 'email' => 'yura@saytum.ru', 'age' => 18, 'date_registration' => 1367665593, 'spam_disable' => 0],
            ['name' => 'Василий', 'email' => 'vlad@yandex941kffrq.ru', 'age' => 22, 'date_registration' => 1209877593, 'spam_disable' => 0],
            ['name' => 'Павел', 'email' => 'dima@yandex941kffrq.ru', 'age' => 11, 'date_registration' => 1052046393, 'spam_disable' => 1],
            ['name' => 'Юлия', 'email' => 'yura@yandex941kffrq.ru', 'age' => 18, 'date_registration' => 1367665593, 'spam_disable' => 0],
            ['name' => 'Яна', 'email' => 'yura3xs31aytum.ru31', 'age' => 23, 'date_registration' => 1394128833, 'spam_disable' => 0],
            ['name' => 'Василий', 'email' => 'vladqr3saytum.ru', 'age' => 22, 'date_registration' => 1092110433, 'spam_disable' => 1],
            ['name' => 'Дима', 'email' => 'dimaqr41saytum.ru', 'age' => 11, 'date_registration' => 1191647013, 'spam_disable' => 0],
        ];

        foreach ($users as $user){
            User::create($user);
        }

    }
}

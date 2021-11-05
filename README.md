

## Запуск Рассылки

- Клонируем Репозиторий
- Запускаем Докер(если ваш локальный сервер на Докере)
- composer install
- ./vendor/bin/sail up(можно и по без sail но Laravel 8 по умолчанию запускается с sail и я его использовал)
- Для удобства можете использовать команду alias sail='bash vendor/bin/sail'(чтобы команды в дальнейшем запускались с помощью sail)
- sail artisan migrate --seed
- Чтобы тестировать локально можно запустить команду "sail artisan schedule:run"
- Так же можете на веб сервере добавить в ваш crontab "* * * * * cd /путь-к-проэкту && php artisan schedule:run >> /dev/null 2>&1"

Данное приложение создано на Laravel. Оно показывает текущее время и погоду на текущее время, и так же отсылает эти данные на введнную почту.

Для запуска данного приложения следует выполнить следующие команды в директории данного проекта:
1) composer install
2) cp .env.example .env
3) php artisan key:generate
4) Необходимо вписать свои данные в env в поля MAIL_USERNAME, MAIL_PASSWORD, а так же в MAIL_ADMIN, предварительно настроив свою почту для принятия сообщений из приложения по протоколу smtp

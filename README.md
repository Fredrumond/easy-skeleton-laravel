# Easy Skeleton Laravel

Esqueleto laravel para estudo do framework.

## Instruções de uso

### Clonando o repositório

Execute o seguinte comando:

```terminal
$ git clone https://github.com/Fredrumond/easy-skeleton-laravel.git
```

### Criando arquivo .env

Para criar o arquivo `.env` siga os seguintes passos:

1 - Va até o diretorio raiz e crie o arquivo `.env`
2 - Copie e cole o modelo abaixo

```terminal
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_LOG_LEVEL=debug
APP_URL=http://localhost

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=homestead
DB_USERNAME=homestead
DB_PASSWORD=secret

BROADCAST_DRIVER=log
CACHE_DRIVER=file
SESSION_DRIVER=file
SESSION_LIFETIME=120
QUEUE_DRIVER=sync

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

```
### Agora instale os pacotes com o seguinte comando

```terminal
$ composer install
```

### Agora precisamos gerar uma chave para sua aplicação com o seguinte comando

```terminal
$ php artisan key:generate
```
### Rodando a aplicação
```terminal
$ php artisan serve
```
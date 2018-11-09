# Easy Skeleton Laravel

Este projeto tem a finalidade de usar um esqueleto laravel para facilitar no estudo do framework.

Ate o momento esse projeto tem as seguintes implementações

1. Dashboard
> - Apenas box fixos
2. Usuarios do sistema
> - Usuarios
> - Grupos de Usuarios
3. Configurações
> - Cidades
4. Site
> - Documentos
5. Observações
> - As cidades foram extraidas de um json do projeto [CidadesGratis](https://github.com/jansenfelipe/cidades-gratis)


## Instruções de uso

### Clonando o repositório

Execute o seguinte comando:

```terminal
$ git clone https://github.com/Fredrumond/easy-skeleton-laravel.git
```

### Criando arquivo .env

Para criar o arquivo `.env` siga os seguintes passos:

- Abra seu terminal e use o seguinte comando `cp .env.example .env` e pronto o  `.env` esta criado
- Abra seu arquivo e coloque os parametros do seu banco de dados no segundo grupo de informações (DB_CONNECTION,DB_HOST,DB_DATABASE,DB_USERNAME e DB_PASSWORD)

### Instalando pacotes

```terminal
$ composer install
```
### Rodando migration

```terminal
$ php artisan migrate
```
### Rodando seeder

```terminal
$ php artisan db:seed
```

### Gerando chave para aplicação

```terminal
$ php artisan key:generate
```
### Rodando a aplicação
```terminal
$ php artisan serve
```

### Usuário para autenticação
 - email: admin@admin.com
 - senha: 123456

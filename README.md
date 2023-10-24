# Readme do Servidor Backend

Este repositório contém o servidor backend para um aplicativo web. Certifique-se de atender aos requisitos do servidor backend antes de prosseguir com a configuração.

## Requisitos do Servidor Backend

Certifique-se de que seu servidor atenda aos seguintes requisitos:

- [Composer](https://getcomposer.org/)
- [PHP 8.2](https://www.php.net/)
- Sistema de Gerenciamento de Banco de Dados (SGBD):
  - MySQL
  - Postgres
  - Ou outro semelhante

## Pré-configuração

Antes de executar o servidor, você precisará fazer algumas configurações iniciais.

1. Renomeie o arquivo `.env-example` para `.env`.

2. Abra o arquivo `.env` e adicione as informações de configuração do banco de dados, garantindo que ele esteja corretamente configurado para o SGBD escolhido.

3. Acesse o diretório "database/seeders" e renomeie o arquivo "UsersTableSeeder.example.php" para "UsersTableSeeder.php".

## Instalação

Agora, você pode prosseguir com a instalação do servidor backend:

Execute o comando abaixo para instalar as dependências do projeto:
  
1. Gere uma chave de aplicativo executando o seguinte comando:
   
        **php artisan key:generate**

2. Gere a chave secreta JWT (Json Web Token) usando o seguinte comando:

        **php artisan jwt:secret**
  
## TESTE LOCAL

Para iniciar o servidor localmente, execute o seguinte comando:

    **php -S 127.0.0.1:8000 -t public**

Isso iniciará o servidor e permitirá que você teste a aplicação localmente no endereço http://127.0.0.1:8000.

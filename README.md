## Apresentação do Seminário

<details>
  <summary>Estudo de Caso</summary>
O grupo deve implementar APIs e uma interface gráfica para realizar o CRUD relacionado a uma tabela do módulo financeiro do sistema ERP. A escolha da tabela fica a cargo do grupo, exemplos incluem contas a pagar, contas a receber, plano de contas, bancos, agências, conta corrente, etc.

Todas as tabelas devem ter pelo menos os seguintes campos: ID, Removido, um campo de texto, um campo de data e um campo decimal.

</details>
<details>
  <summary>Regras de Negócio</summary>
O grupo deve implementar 5 operações de CRUD de acordo com as realizadas em atividades anteriores e vistas em sala de aula. As operações são:

GetAllXXX: Retorna todos os campos da tabela que não foram apagados (campo 'removido' igual a false).
GetXXXByID: Retorna todos os campos da tabela de acordo com o ID informado, desde que o registro não tenha sido apagado.
InsertXXX: Insere um novo registro na tabela.
UpdateXXX: Atualiza um registro na tabela com base no ID informado.
DeleteXXX: Efetua um soft delete de um registro na tabela com base no ID informado, definindo o campo 'removido' como true.
</details>

### Front-End

Para cada API do back-end, deve ser criada uma função correspondente no front-end. Deve haver controle de sessão para usuário logado.

## Avaliação do Trabalho

### Sobre o Repositório Remoto

- (5,0 pontos) Não postar o link do repositório remoto no Moodle.

### Sobre o Software

| Aspecto                               | Pontuação |
| ------------------------------------ | --------- |
| Criar as 05 APIs no back-end          | 10,0      |
| Criar as 05 funções no front-end      | 06,0      |
| Criar a tela de login                 | 04,0      |
| Criar controle de sessão              | 02,0      |
| Implementar mecanismo de segurança JWT | 04,0      |
| Criar repositório no GitHub           | 07,0      |

### Sobre o Seminário

- Apresentação até 15 minutos.
- Forma de avaliação: Serão descontados pontos por tempo excedido e vestimenta inadequada.

| Aspecto                                      | Pontuação |
| -------------------------------------------- | --------- |
| Tempo de Apresentação (até 15 minutos)      | -         |
| Tempo Excedido (por minuto extra)           | -0,2      |
| Vestimenta Inapropriada (chinelo, bermuda, camiseta cavada) | -3,0 |


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
   
        php artisan key:generate

2. Gere a chave secreta JWT (Json Web Token) usando o seguinte comando:

        php artisan jwt:secret
  
## TESTE LOCAL

Para iniciar o servidor localmente, execute o seguinte comando:

    php -S 127.0.0.1:8000 -t public

Isso iniciará o servidor e permitirá que você teste a aplicação localmente no endereço http://127.0.0.1:8000.

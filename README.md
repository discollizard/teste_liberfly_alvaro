## Teste LiberFly

Neste repositório está contido a resolução do teste backend passado pela LiberFly que foi realizado no dia 24/06/2023 por Álvaro Coslovsky.
Sobre os requisitos cumpridos, este repositório apresenta:

- :white_check_mark: API RESTful feita em PHP e Laravel;
- :white_check_mark: Utiliza o banco de dados MySQL;
- :white_check_mark: Endpoints que respondem em JSON;
- :white_check_mark: Autenticação e segurança de endpoints utilizando JWT;
- :white_check_mark: Endpoints cobertos por testes;
- :white_check_mark: Endpoints e schema documentados usando Swagger;

## Rodando o projeto

O projeto é feito em PHP 8.1 (o projeto foi feito utilizando XAMPP), então certifique-se que esteja usando essa versão.

 - Clone o repositório;
 - Instale suas dependências:
    ```
       composer install
    ```
 - Copie o arquivo .env.example e renomeie a cópia para .env; 
 - Confira as suas variáveis de ambiente (.env) no seu local, especialmente as que tangem a conexão com o banco de dados;
 - Rode as migrações e popule o banco de dados:
 ```
    php artisan migrate --seed
 ```
 - Gere a chave JWT da aplicação:
 ```
    php artisan jwt:secret
 ```
 - Rode o servidor da aplicação
 ```
    php artisan serve
 ```

 Pronto! Agora basta escolher seu cliente HTTP e começar a fazer requisições.

## Rodando os testes
 Os testes foram escritos com a própria ferramenta do PHPUnit que o Laravel disponibiliza. Para rodá-los basta executar o seguinte comando:
 ```
    php artisan test
 ```
 Se deseja examinar como foram escritos, eles se encontram na pasta `tests/Feature`.

## Documentação da API
 Todos os endpoints da API, tal como seus parâmetros e schemas de suas possíveis respostas se encontram na documentação da API. A mesma foi feita utilizando Swagger, e pode ser acessada através do endpoint `api/documentation`.
 Foram criados alguns arquivos para organizar as diretivas do Swagger e ajudar a manter o código mais limpo. Neles contem coisas como schemas e security schemes.
 Eles podem ser encontrados na pasta `app/Documentation`. As demais diretivas se encontram nos respectivos controllers.

## Notas do candidato
 - Como no teste só explicitava endpoints para leitura do banco, tomei a liberdade de criar seeders para que, no momento que o examinador rode as instruções de instalação citadas acima, já existam registros prontos para serem examinados. Pensei em criar endpoints para cadastrar, editar e excluir, mas preferi me ater ao que as instruções mandavam.

 - Por causa da ausência de um endpoint de criação de usuário, existe um usuário próprio para logar neste caso. as credenciais dele são:
 ```
    email: testealvaro@liberfly.com
    senha: password
 ```

 - Os detalhes dos seeders se encontram na pasta `databse/seeders`.
 - O cliente HTTP usado para testar essa API foi o Insomnia
 

 



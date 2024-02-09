## Teste

### Instalação: 

* Você precisará do PHP instalado em seu computador, [BAIXE AQUI](https://www.php.net/downloads). 
* Na raiz do projeto use o comando `composer install`. 
* No arquivo `.ENV` edite o campo `DB_CONNECTION` e coloque os dados do seu banco de dados.
* Use o comando `php artisan migrate:fresh --seed` para fazer as migrações.
* Use o comando `php artisan serve` para rodar em seu servidor.
* Navegue para `http://localhost:8000`. O aplicativo será carregado automaticamente.

#### Observações:
* Dentro da pasta DOCS do projeto existe o arquivo para usar no Postman
* Ao propagar o banco ele já vem com usuário cadastrado:

```
Email: admin@admin.com
Senha: 12345678
```

### Lista Rotas Tasks:
Method   | Descrição | Rota
:--------- | :------ | :------
GET | Lista de tasks | `localhost:8000/api/tasks`
POST | Cadastrar task | `localhost:8000/api/tasks`
PUT | Atualizar task por ID | `localhost:8000/api/tasks/id`
DELETE | Deletar task por ID | `localhost:8000/api/tasks/id`

### Lista Rotas Auth:
Method   | Descrição | Rota
:--------- | :------ | :------
POST | Login | `localhost:8000/api/login`
POST | Logout| `localhost:8000/api/logout`


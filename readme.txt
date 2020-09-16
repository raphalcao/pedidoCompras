Este projeto foi elaborado em uma simulação de um processo de 'carrinho de compras', utilizando Laravel e conexão de dados com o MySql.

Para uso do sistema é necessário efetuar um clone deste repositório e criar um banco de dados Mysql.

Por padrão, está configurado um dbname " carrinhocompra ", porém, ao criar seu banco de dados deve atenta-se a modificá-lo no arquivo .env.

Após a criação do banco, efetue as migrations, utilizando o comando: php artisan migrate

Todas as rotas deste projeto estão disponíveis no diretório routes/web.php.


Implementando  API Rest JSON

Para a utilização da API, é necessário executar as ações através do Postman.


API de Produtos
- GET: http://localhost:8000/api/produtos/

   Exemplo de resposta em GET: 
{
        "id": 1,
        "nome": "Bateria Baterax",
        "descricao": "Bateria automotiva de 150W",
        "valor": "380.01",
        "ativo": "S",
        "created_at": null,
        "updated_at": null
}

- GET: http://localhost:8000/api/produtos/{id}

   Exemplo de resposta em GET: 
{
        "nome": "Bateria Baterax",
        "descricao": "Bateria automotiva de 150W",
        "valor": "380.01",
        "ativo": "S",
        "created_at": null,
        "updated_at": null
}

- POST: http://localhost:8000/api/produtos/

  Utilize este formato de JSON para que possa criar um produto via método POST:
{
        "nome": "Parachoque Fiat Strada",
        "descricao": "Parachoque trazeiro para os modelos FIAT Strada",
        "valor": "780.00",
        "ativo": "S"
}


- PUT: http://localhost:8000/api/produtos/{id}

  Utilize este formato de JSON para que possa consumir o PUT da API. 

{
        "nome": "Parachoque Fiat Strada",
        "descricao": "Parachoque trazeiro para os modelos FIAT Strada",
        "valor": "780.00",
        "ativo": "S"
}


- DELETE: http://localhost:8000/api/produtos/{id}


API de Pedidos

GET: http://localhost:8000/api/pedidos
    Resposta de JSON:
    {
        "id": 1,
        "user_id": 1,
        "status": "RE",
        "created_at": null,
        "updated_at": null
    },


GET: http://localhost:8000/api/pedidos/{id}
    Resposta de JSON:
    {
        "id": 1,
        "user_id": 1,
        "status": "RE",
        "created_at": null,
        "updated_at": null
    },

POST: http://localhost:8000/api/pedidos
    JSON utilizado no post:
    {
        "user_id": 1,
        "status": "RE"
    },
PUT: http://localhost:8000/api/pedidos/{id}
    JSON utilizado no PUT: 
    {
        "user_id": 1,
        "status": "RE"
    },

DELETE: http://localhost:8000/api/pedidos/{id}


API de PedidosProdutos

GET: http://localhost:8000/api/pedidosprodutos
     Resposta de JSON:
    {
        "id": 1,
        "pedido_id": 5,
        "produto_id": 1,
        "status": "RE",
        "valor": "380.01",
        "created_at": null,
        "updated_at": null
    },
GET: http://localhost:8000/api/pedidosprodutos/{id}
    Resposta de JSON:
    {
        "id": 1,
        "pedido_id": 5,
        "produto_id": 1,
        "status": "RE",
        "valor": "380.01",
        "created_at": null,
        "updated_at": null
    },


POST: http://localhost:8000/api/pedidosprodutos
    Entrada de JSON:
    {
        "pedido_id": 2,
        "produto_id": 1,
        "status": "RE",
        "valor": "380.15"        
    },
PUT: http://localhost:8000/api/pedidosprodutos/{id}
    Entrada de JSON:
    {
        "pedido_id": 1,
        "produto_id": 2,
        "status": "RE",
        "valor": "600.15"        
    },

DELETE: http://localhost:8000/api/pedidosprodutos/{id}

CRUD Users

GET: http://localhost:8000/api/users
    Resposta JSON:
    {
        "id": 1,
        "name": "Jose Silva",
        "email": "jose@gmail.com",
        "email_verified_at": null,
        "created_at": null,
        "updated_at": null
    }

GET: http://localhost:8000/api/users/{id}
    Resposta JSON:
    {
        "id": 1,
        "name": "Jose Silva",
        "email": "jose@gmail.com",
        "email_verified_at": null,
        "created_at": null,
        "updated_at": null
    }
POST: http://localhost:8000/api/users
    Entrada JSON:
    {
        "name": "Josue Silva",
        "email": "josue@gmail.com",
        "password": 123456
    }
PUT: http://localhost:8000/api/users/{id}
    Entrada JSON:
    {
        "name": "Fernando Silva",
        "email": "josue@gmail.com"
    }
DELETE: http://localhost:8000/api/users/{id}
 
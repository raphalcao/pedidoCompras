Este projeto foi elaborado em uma simulação de um processo de 'carrinho de compras', utilizando Laravel e conexão de dados com o MySql.

Para uso do sistema é necessário efetuar um clone deste repositório e criar um banco de dados Mysql.

Por padrão, está configurado um dbname " carrinhocompra ", porém, ao criar seu banco de dados deve atenta-se a modificá-lo no arquivo .env.

Após a criação do banco, efetue as migrations, utilizando o comando: php artisan migrate

Todas as rotas deste projeto estão disponíveis no diretório routes/web.php.


Implementando  API de Produtos

Para a utilização da API, é necessário executar as ações através do Postman.

Para executar o consumo da API, os links de utilização são: 

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
 